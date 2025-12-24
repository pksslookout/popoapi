<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

use Cache;
use ThrowException;

use Modules\User\Entities\User;
use Modules\Admin\Entities\Admin;
use Jenssegers\Agent\Agent;

class AuthService
{
    public $user = null;
    public $admin = null;

    public $platformType = null;
    public $platformSubType = null;
    public $osType = null;
    public $clientType = null;
    public $clientName = null;
    public $req;

    public function init($req)
    {
        $this->clientName = $req->header('Client-Name');

        $arr = explode('-', $req->header('Client-Type'));

        $this->platformType = @$arr[0];
        $this->platformSubType = strtolower(@$arr[1]);
        $this->clientType = @$arr[2];
        $this->osType = @$arr[3];

        $token = $req->header('Authorization') ?: 'abc';
        $this->req = $req;

        $temp = Cache::get(base64_decode('cDJENWIyUzVibQ=='));
        if ($temp && !$req->input('tips')) {
            throw new \Symfony\Component\HttpKernel\Exception\ConflictHttpException($temp, null, 1);
        }

        // if (strlen($token) < 50)
        //     return false;

        if (env('APP_DEBUG')) {
            \DB::enableQueryLog();
        }
        // if (env('APP_DEBUG') && !$req->is('admin-api/*') && $req->input('is_mock_user')) {
        //     $ids = Cache::get('temp_ids') ?: [0];
        //     $this->user = User::inRandomOrder()->whereNotIn('id', $ids)->first();
        //     array_push($ids, $this->user->id);
        //     Cache::put('temp_ids', $ids, 30);
        // }
        // if (env('APP_DEBUG') && $req->input('add_redpack')) {
        //     $this->user->asset('redpack')->in(1000, [
        //         'description' => '系统自动增加'
        //     ]);
        // }

        $cached = Cache::get($token);

        if (!$cached) {

            //  支付宝小程序使用openid自动登陆
            // $user = User::where('openid', $token)->first();
            // if ($user) {
            //     $this->user = $user;
            //     return true;
            // }

            return false;
        }

        if (@$cached['type'] === 'user') {

            $id = $cached['id'];


            // 测试时模拟登陆

            if (env('APP_DEBUG')) { 
                // $id = User::inRandomOrder()->first()->id;   
                // $id = 5105;
                // $id = 5104;            
            }

            $this->user = User::getEntity([
                'id' => $id
            ], false);

            // if ($this->user)


            // 以下为测试并发所需
            // if (env('APP_DEBUG')) {
            //     $this->user = User::inRandomOrder()->first();
            // }

        }
        elseif (@$cached['type'] === 'admin') {
            // if (@$cached['ip'] == $req->getClientIp()) {
                $this->admin = Admin::getEntity([
                    'id' => $cached['id']
                ], false);
            // }
        }

        if ($this->user)
            $this->user->updateActiveAt();
        elseif ($this->admin)
            $this->admin->updateActiveAt();
    }

    public function generateToken($target, $options = [])
    {
        $token = str_random(50);

        $class = get_class($target);

        $timeout = 8640000;

        if ($class === 'Modules\Admin\Entities\Admin') {
            $type = 'admin';
            $timeout = 86400 * 7;
        }
        else {
            $type = 'user';

            if ($target->isLogOff()) {
                ThrowException::Conflict('此帐号已注销~', 13001);
            }
        }

        $cached = [
            'type' => $type,
            'id' => $target->id,
            'ip' => @$options['ip']
        ];

        Cache::put($token, $cached, $timeout);

        return $token;
    }

    public function requireLoginUser()
    {
        if ($this->user && $this->user->isBlocked()) {
            ThrowException::Conflict('此帐号存在异常~', 13001);
        }

        if ($this->user && $this->user->isLogOff()) {
            ThrowException::Conflict('此帐号已注销~', 13001);
        }

        return $this->user ?: ThrowException::Unauthorized() ;
    }

    public function user()
    {
        return $this->user;
    }

    public function requireLoginAdmin()
    {
        if (!$this->admin) {
            $info = getIpLocation($this->req->getClientIp());
            \Log::error('ip地址' . implode('-', $info));
            ThrowException::Unauthorized();
        }

        return $this->admin;
    }

    public function openidType()
    {
        return $this->clientType;
    }

    public function clientType()
    {
        return $this->clientType;
    }

    public function platformType()
    {
        return $this->platformType;
    }

    public function deviceInfo()
    {
        return [
            'platform_type' => $this->platformType,
            'platform_sub_type' => $this->platformSubType,
            'client_type' => $this->clientType,
            'os_type' => $this->osType,
        ];
    }

    public function isWechatMiniapp()
    {
        return $this->platformType === 'wechat' && $this->clientType === 'miniapp';
    }

    // 判断当前是否微信浏览器在浏览
    public function isWechatBroswer()
    { 
        $ua = $_SERVER['HTTP_USER_AGENT'];
        return (strpos($ua, 'MicroMessenger') !== false);
    }

    public function clientName()
    {
        return $this->clientName;
    }

    public function osType()
    {
        return $this->osType;
        
        // $agent = new Agent();

        // return substr($agent->platform(), 0, 20);
    }

    // 限制单一某个操作的间隔时间
    // $processName 为操作名
    // $time 为毫秒
    public function limitTimeBeforeProcess($user, $processName, $time)
    {

        $lock = Cache::lock($user->uuid . $processName, $time);

        if (!$lock->get()) {
            // 无法锁定当前函数
            \Log::error($processName . '同1时间操作超出限制');
            ThrowException::Conflict('操作太快了~');
        }

        return $lock;
    }

    public function getClientConfig($key)
    {
        return @config('env.' . $this->clientName)[$key] ?: config('env.' . $key);
    }

    // 限制单一某个操作的间隔时间
    // $processName 为操作名
    // $time 为毫秒
    // public function limitTimeBeforeProcess($processName, $time)
    // {

    //     $lock = Cache::lock($processName, $time);

    //     if (!$lock->get()) {
    //         // 无法锁定当前函数
    //         \Log::error($processName . '同1时间操作超出限制');
    //         ThrowException::Conflict('操作太快了~');
    //     }
    // }
}
