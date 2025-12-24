<?php

namespace Modules\Core\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Services\ShortMessageService ;

use Illuminate\Database\Eloquent\Relations\Relation;

class CoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        require __DIR__.'/../Routes/api.php';

        app('Dingo\Api\Exception\Handler')->register(function (\Symfony\Component\HttpKernel\Exception\HttpException $exception) {
            $exception->setHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
            return [];
        });

        app('Dingo\Api\Exception\Handler')->register(function (\Modules\Core\Exceptions\UserGroupForbiddenException $exception) {
            $exception->setHeaders([
                'Access-Control-Allow-Origin' => '*'
            ]);
            return $exception->render();
        });


        // 对全部节点类名称和类名映射
        $nodeTypeMap = config('map.node_type');
        Relation::morphMap($nodeTypeMap);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton('ShortMessageService', function($app){
        //     return new ShortMessageService() ;
        // }) ;

        $this->app->singleton('InnerMessage', function () {
            return new \Modules\Core\Services\InnerMessageService();
        });

        $this->app->singleton('Auth', function () {
            return new \Modules\Core\Services\AuthService();
        });

        $this->app->singleton('Tool', function () {
            return new \Modules\Core\Services\ToolService();
        });

        $this->app->singleton('Asset', function () {
            return new \Modules\Core\Services\AssetService();
        });

        $this->app->singleton('Miniapp', function () {
            return new \Modules\Core\Services\MiniappService();
        });

        $this->app->singleton('LogService', function () {
            return new \Modules\Log\Services\LogService();
        });

        $this->app->singleton('Wechat', function () {
            return new \Modules\Core\Services\WechatService();
        });

        $this->app->singleton('ByteDance', function () {
            return new \Modules\Core\Services\ByteDanceService();
        });

        $this->app->singleton('Kuaishou', function () {
            return new \Modules\Core\Services\KuaishouService();
        });

        $this->app->singleton('Alipay', function () {
            return new \Modules\Core\Services\AlipayService();
        });

        $this->app->singleton('Stats', function () {
            return new \Modules\Core\Services\StatsService();
        });

        $this->app->singleton('Node', function () {
            return new \Modules\Core\Services\NodeService();
        });

        $this->app->singleton('Platform', function () {
            return new \Modules\Core\Services\PlatformService();
        });

        $this->app->singleton('Payment', function () {
            return new \Modules\Core\Services\PaymentService();
        });

        $this->app->singleton('Setting', function () {
            return new \Modules\Core\Services\SettingService();
        });

        $this->app->singleton('ShortMessageService', function($app){
            return new \Modules\Core\Services\ShortMessageService();
        }) ;

        $this->app->singleton('ThrowExceptionService', function () {
            return new \Modules\Core\Services\ThrowExceptionService();
        });
    }
}
