<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;

// use Modules\Core\Entities\FormId;
// use \EasyWeChat;
use Auth;
use Setting;
use Log;
use Cache;

// use Codeinfo\LaravelKuaishou\Factory;
use Alipay\EasySDK\Kernel\Factory;
use Alipay\EasySDK\Kernel\Config;
use Alipay\EasySDK\Kernel\Util\ResponseChecker;

class AlipayService
{
    public $clientName;
    public $miniapp;
    public $appId;

    public function __construct($clientName = 'default')
    {
        $this->clientName = $clientName;

        Factory::setOptions($this->getOptions($clientName));
    }

    // 获取支付宝相关配置
    public function getOptions($clientName)
    {
        $options = new Config();
        $options->protocol = 'https';
        $options->gatewayHost = 'openapi.alipay.com';
        $options->signType = 'RSA2';
        
        $options->appId = config('alipay.' . $clientName . '.app_id');
        
        // 为避免私钥随源码泄露，推荐从文件中读取私钥字符串而不是写入源码中
        $options->merchantPrivateKey = env('ALIPAY_MINIAPP_PRIVATE_KEY');
        
        // $options->alipayCertPath = '<-- 请填写您的支付宝公钥证书文件路径，例如：/foo/alipayCertPublicKey_RSA2.crt -->';
        // $options->alipayRootCertPath = '<-- 请填写您的支付宝根证书文件路径，例如：/foo/alipayRootCert.crt" -->';
        // $options->merchantCertPath = '<-- 请填写您的应用公钥证书文件路径，例如：/foo/appCertPublicKey_2019051064521003.crt -->';
        
        //注：如果采用非证书模式，则无需赋值上面的三个证书路径，改为赋值如下的支付宝公钥字符串即可
        $options->alipayPublicKey = env('ALIPAY_MINIAPP_PUBLIC_KEY');

        //可设置异步通知接收服务地址（可选）
        $options->notifyUrl = "<-- 请填写您的支付类接口异步通知接收服务地址，例如：https://www.test.com/callback -->";
        
        //可设置AES密钥，调用AES加解密相关接口时需要（可选）
        $options->encryptKey = "<-- 请填写您的AES密钥，例如：aa4BtZ4tspm2wnXLb1ThQA== -->";

        return $options;
    }

    public function get($clientName = NULL) 
    {
        $clientName = $clientName ?: Auth::clientName();
        return new self($clientName);
    }

    public function getUserInfo($code)
    {
        $responseChecker = new ResponseChecker();

        $res = Factory::util()->generic()->execute('alipay.user.info.share', [
            'auth_token' => Factory::base()->oauth()->getToken($code)->accessToken
        ], []);

        $responseChecker = new ResponseChecker();
        //3. 处理响应或异常
        if ($responseChecker->success($res)) {
            return @json_decode($res->httpBody, true)['alipay_user_info_share_response'] ?: ThrowException::Conflict('获取用户信息失败~');
        } else {
            ThrowException::conflict('获取用户信息失败~');
            \Log::error("支付宝小程序获取用户授权信息失败，原因：" . $res->msg . "，" . $res->subMsg);
        }
    }


    public function decryptPhoneNumber($encryptedData)
    {
        $aesKey = 'ro1sD6N29VUU0xfLVVxOKQ==';
        // $iv = $aesKey; // IV 向量等于 AES 密钥
        $cipher = "AES-128-CBC";


        $encryptedData = json_decode($encryptedData)->response;
        \Log::error($encryptedData);

        // Base64 解码
        $encryptedData = base64_decode($encryptedData);


        // AES 解密
        $decrypted = openssl_decrypt($encryptedData, $cipher, base64_decode($aesKey), OPENSSL_RAW_DATA);

        \Log::error($decrypted);
        // 解析 JSON
        $decryptedJson = json_decode($decrypted, true);

        \Log::error($decrypted);

        return $decryptedJson["mobile"] ?? null;
    }

    public function getPhone($code)
    {
        // define("ALIPAY_AES_KEY", "ro1sD6N29VUU0xfLVVxOKQ==");

        $res = $this->decryptPhoneNumber($code) ?: ThrowException::Conflict('支付宝小程序获取手机号失败~');
        \Log::error($res);
        return [];

        $responseChecker = new ResponseChecker();

        $result = Factory::base()->oauth()->decodeMobile($code);

        \Log::error($result);

        return [];

        // $res = Factory::util()->generic()->execute('alipay.user.mobile.auth.query', [
        //     'auth_token' => Factory::base()->oauth()->getToken($code)->accessToken
        // ], []);

        $responseChecker = new ResponseChecker();
        //3. 处理响应或异常
        if ($responseChecker->success($res)) {
            \Log::error($res);
            return @json_decode($res->httpBody, true)['alipay_user_info_share_response'] ?: ThrowException::Conflict('获取支付宝手机号失败~');
        } else {
            ThrowException::conflict('获取支付宝手机号失败~');
            \Log::error("获取支付宝手机号失败，原因：" . $res->msg . "，" . $res->subMsg);
        }
    }

}
