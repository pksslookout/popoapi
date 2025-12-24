<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) surpaimb <surpaimb@126.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Surpaimb\KuaiShou\MiniProgram\Payment;

use Surpaimb\KuaiShou\Kernel\BaseClient;
use Surpaimb\KuaiShou\Kernel\Exceptions\InvalidArgumentException;
use ReflectionClass;

/**
 * Class Client.
 *
 * @author hugo <rabbitzhang52@gmail.com>
 */
class Client extends BaseClient
{

    protected $paysecret = '';

    /**
     * {@inheritdoc}.
     */
    protected $message = [
        'out_order_no' => '',
        'total_amount' => '',
        'subject' => '',
        // 'body' => '',
        // 'valid_time' => '',
        'attach' => '',
        'sign' => '',
        'cp_extra' => '',
        'notify_url' => '',
        'thirdparty_id' => '',
        'disable_msg' => '',
        'msg_page' => '',
        'store_uid' => '',
    ];

    /**
     * {@inheritdoc}.
     */
    protected $required = ['out_order_no', 'total_amount', 'subject', 'body', 'valid_time'];

    /**
     * Send a template message.
     *
     * @param array $data
     *
     * @return \Psr\Http\Message\ResponseInterface|\Surpaimb\KuaiShou\Kernel\Support\Collection|array|object|string
     *
     * @throws \Surpaimb\KuaiShou\Kernel\Exceptions\InvalidArgumentException
     * @throws \Surpaimb\KuaiShou\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function unify(array $data = [])
    {
        $params = $this->formatMessage($data);

        $this->restoreMessage();

        $params = $this->withAppId($params);


        $params['sign'] = $this->getSign($params);
        unset($params["app_id"]);

        $appId = $this->getAppId();
        $accessToken = $this->getAccessToken()->getToken()['access_token'];
        // \Log::error($accessToken);
        // var_dump($params);
        // unset($params['app_id']);
        // \Log::error($params);
        $query = [
            'app_id' => $appId,
            'access_token' => $accessToken
        ];

        $url = '/openapi/mp/developer/epay/create_order';

        // return $query;
        // \Log::error($url);
        return $this->httpPostJson($url, $params, $query);
    }

    public function getSign(array $params)
    {
        unset($params["sign"]);
        unset($params["access_token"]);
        // unset($params["thirdparty_id"]);
        $paramArray = [];
        foreach ($params as $key => $param) {
            if (trim($param))
                $paramArray[] = $key . '=' . trim($param);
        }
        // $paramArray[] = trim($this->app['config']['pay_secret']);
        sort($paramArray, 2);
        // \Log::error($paramArray);
        $signStr = trim(implode('&', $paramArray));

        $appSecret = $this->getAppSecret();

        $signStr .= $appSecret;

        // \Log::error($signStr);

        return md5($signStr);
    }

    /**
     * @param array $data
     *
     * @return array
     *
     * @throws \Surpaimb\KuaiShou\Kernel\Exceptions\InvalidArgumentException
     */
    protected function formatMessage(array $data = [])
    {
        $params = array_merge($this->message, $data);
        $rs = [];
        foreach ($params as $key => $value) {
            if (in_array($key, $this->required, true) && empty($value) && empty($this->message[$key])) {
                throw new InvalidArgumentException(sprintf('Attribute "%s" can not be empty!', $key));
            }

            $val = empty($value) ? $this->message[$key] : $value;
            if(!empty($val)){
                $rs[$key] = $val;
            }
        }

        return $rs;
    }

    /**
     * Restore message.
     */
    protected function restoreMessage()
    {
        $this->message = (new ReflectionClass(static::class))->getDefaultProperties()['message'];
    }

    // 上传图片
    public function updateImage($order, $url)
    {
        $url = $url ?: 'http://hquesoft.oss-cn-shenzhen.aliyuncs.com/box/orderthumb.jpeg';

        $params = [];

        $appId = $this->getAppId();
        $accessToken = $this->getAccessToken()->getToken()['access_token'];
        $query = [
            'app_id' => $appId,
            'access_token' => $accessToken,
            'url' => $url
        ];
        // var_dump($params);
        $res = $this->httpPostJson('/openapi/mp/developer/file//img/uploadWithUrl', $params, $query);

        if ($res['result'] == 1) {
            return $res['data']['imgId'];
        }

        \Log::error('快手订单图片上传失败: ' . $order->pay_number);
        \Log::error($res);

        return false;
    }

    // 确认订单核销
    public function confirmUsedOrder($order)
    {
        $user = $order->user;

        $thumb = 'https://apitest.popolive.com/box/img/other/h19vTx5mpv6JcA2n3wxDwcnQ3GljpkQx82VIaTQY.png?x-oss-process=image/resize,w_400';

        $params = [
            'out_order_no' => $order->pay_number,
            'out_biz_order_no' => $order->number,
            'open_id' => @$user->kuaishou_accounts()->first()->openid,
            'order_create_time' => strtotime($order->created_at) * 1000,
            'order_status' => 11,
            'order_path' => '/package/order/detail/index?uuid=' . $order->uuid,
            'product_cover_img_id' => $this->updateImage($order, $thumb)
        ];

        $params = $this->withAppId($params);
        $params['sign'] = $this->getSign($params);
        unset($params["app_id"]);

        $appId = $this->getAppId();
        $accessToken = $this->getAccessToken()->getToken()['access_token'];
        $query = [
            'app_id' => $appId,
            'access_token' => $accessToken
        ];
        // var_dump($params);
        $res = $this->httpPostJson('/openapi/mp/developer/order/v1/report', $params, $query);

        if ($res['result'] == 1) {
            return true;
        }

        \Log::error('快手订单核销失败: ' . $order->pay_number);
        \Log::error($res);

        return false;
        // \Log::error($res);
        // return $res;
    }

    // 订单结算
    public function completeOrder($order)
    {
        $params = [
            'out_order_no' => $order->pay_number,
            'out_settle_no' => $order->number,
            'reason' => '结算',
            'notify_url' => env('APP_URL'),
        ];

        $params = $this->withAppId($params);
        $params['sign'] = $this->getSign($params);
        unset($params["app_id"]);

        $appId = $this->getAppId();
        $accessToken = $this->getAccessToken()->getToken()['access_token'];
        $query = [
            'app_id' => $appId,
            'access_token' => $accessToken
        ];
        // var_dump($params);
        $res = $this->httpPostJson('/openapi/mp/developer/epay/settle', $params, $query);

        if ($res['result'] == 1) {
            return true;
        }

        \Log::error('快手订单结算失败: ' . $order->pay_number);
        \Log::error($res);

        return false;
        // \Log::error($res);
        // return $res;
    }

    public function getOrderStatus(string $order_no)
    {
        $params = ['out_order_no'=>$order_no];

        $params = $this->withAppId($params);

        $params['sign'] = $this->getSign($params);
        // var_dump($params);
        return $this->httpPostJson('api/apps/ecpay/v1/query_order', $params);
    }
}
