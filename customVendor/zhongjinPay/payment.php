<?php
/**
本函数库需要openssl和curl支持。
*/
require("DigitalEnvelopeUtils.php");

define("PAYURL",   "https://test.cpcn.com.cn/Gateway/InterfaceI");
define("TXURL",    "https://test.cpcn.com.cn/Gateway/InterfaceII");
define("PAYURL2",  "https://test.cpcn.com.cn/Gateway4PaymentUser/InterfaceI");
define("TXURL2",   "https://test.cpcn.com.cn/Gateway4PaymentUser/InterfaceII");
define("TXURL3",   "https://test.cpcn.com.cn/Gateway4File/InterfaceII");
define("PAYURL4",   "https://test.cpcn.com.cn/Gateway4DepositBank/InterfaceI");
define("TXURL4",   "https://test.cpcn.com.cn/Gateway4DepositBank/InterfaceII");
define("PAYURL5",   "https://test.cpcn.com.cn/Cashier/InterfaceI");
define("PAYURL6",   "https://test.cpcn.com.cn/AggrateGateway/InterfaceI");

define("isDgEnv",   "NO");//YES OR NO （本系统是否使用数字信封发送数据配置）
define("signAlgorithm",   "SHA1withRSA");//SHA1withRSA or SHA256withRSA   （本系统的签名算法配置）
define("signAlgorithm_1",   "SHA1withRSA");//SHA1withRSA or SHA256withRSA (中金返回的签名算法格式，默认不需要修改)

//  签名函数
function cfcasign_pkcs12($plainText){
	$p12cert = array();
	$file = base_path() . '/cert/zhongjin/test.pfx';
	$fd = fopen($file, 'r');
	$p12buf = fread($fd, filesize($file));
	fclose($fd);
	openssl_pkcs12_read($p12buf, $p12cert, 'cfca1234');
	
	$pkeyid = $p12cert["pkey"];
	$binary_signature = "";
    if(signAlgorithm=="SHA1withRSA"){
        openssl_sign($plainText,$binary_signature, $pkeyid,OPENSSL_ALGO_SHA1);
    }elseif(signAlgorithm=="SHA256withRSA"){
        openssl_sign($plainText, $binary_signature, $pkeyid,  OPENSSL_ALGO_SHA256);
    }else{
        echo "signAlgorithm 配置错误";
    }
	return bin2hex($binary_signature);

}

// 验签函数
function cfcaverify($plainText,$signature){
	// $fcert = fopen('config/paytest.cer', "r"); 
    $fcert = fopen(base_path() . '/cert/zhongjin/paytest.cer', "r");
	$cert = fread($fcert, 8192); 
	fclose($fcert); 		
	$binary_signature = pack("H" . strlen($signature), $signature);	
    if(signAlgorithm_1=="SHA1withRSA"){
       $ok = openssl_verify($plainText, $binary_signature, $cert);//默认OPENSSL_ALGO_SHA1 
    }elseif(signAlgorithm_1=="SHA256withRSA"){
        $ok = openssl_verify($plainText, $binary_signature, $cert,OPENSSL_ALGO_SHA256);
    }else{
        echo "signAlgorithm 配置错误！";
    }
	return $ok;
}

//发送数据
function get_web_content( $curl_data )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => false,        // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_ENCODING       => "",           // handle all encodings
        CURLOPT_USERAGENT      => "institution",     // who am i
        CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
        CURLOPT_TIMEOUT        => 120,          // timeout on response
        CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
        CURLOPT_POST            => 1,            // i am sending post data
           CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1                //
    );

    $ch      = curl_init(TXURL);
    curl_setopt_array($ch,$options);
	curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
	
} 

function get_web_content2( $curl_data )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => false,        // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_ENCODING       => "",           // handle all encodings
        CURLOPT_USERAGENT      => "institution",     // who am i
        CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
        CURLOPT_TIMEOUT        => 120,          // timeout on response
        CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
        CURLOPT_POST            => 1,            // i am sending post data
           CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1                //
    );

    $ch      = curl_init(TXURL2);
    curl_setopt_array($ch,$options);
	curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
	
} 
function get_web_content3( $curl_data )
{
   // var_dump("$curl_data:");
   // var_dump($curl_data);
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => false,        // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_ENCODING       => "",           // handle all encodings
        CURLOPT_USERAGENT      => "institution",     // who am i
        CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
        CURLOPT_TIMEOUT        => 120,          // timeout on response
        CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
        CURLOPT_POST            => 1,            // i am sending post data
           CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1                //
    );

    $ch      = curl_init(TXURL3);
    $flag=curl_setopt_array($ch,$options);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
    //curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
    var_dump("flag:");
    var_dump($flag);
	curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
    curl_setopt($ch, CURLOPT_TIMEOUT, 120);
    $content = curl_exec($ch);
    $info=curl_getinfo($ch);
    var_dump("info:");
    var_dump($info);
    curl_close($ch);
    var_dump("content:");
    var_dump($content);
    var_dump("post_max_size:");
    var_dump(ini_get('post_max_size'));
    return $content;
	
} 

function get_web_content4( $curl_data )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => false,        // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_ENCODING       => "",           // handle all encodings
        CURLOPT_USERAGENT      => "institution",     // who am i
        CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
        CURLOPT_TIMEOUT        => 120,          // timeout on response
        CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
        CURLOPT_POST            => 1,            // i am sending post data
           CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1                //
    );

    $ch      = curl_init(TXURL4);
    curl_setopt_array($ch,$options);
	curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
	
} 

function get_web_content5( $curl_data )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => false,        // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_ENCODING       => "",           // handle all encodings
        CURLOPT_USERAGENT      => "institution",     // who am i
        CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
        CURLOPT_TIMEOUT        => 120,          // timeout on response
        CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
        CURLOPT_POST            => 1,            // i am sending post data
           CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1                //
    );

    $ch      = curl_init(PAYURL2);
    curl_setopt_array($ch,$options);
    curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
    
} 

function get_web_content6( $curl_data )
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => false,        // don't return headers
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_ENCODING       => "",           // handle all encodings
        CURLOPT_USERAGENT      => "institution",     // who am i
        CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
        CURLOPT_TIMEOUT        => 120,          // timeout on response
        CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
        CURLOPT_POST            => 1,            // i am sending post data
           CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1                //
    );

    $ch      = curl_init(PAYURL6);
    curl_setopt_array($ch,$options);
    curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
    
} 

//同步交易方式向支付平台发送请求，支付平台返回一个数组，其中第一个元素为message，第二个为signature。注意这两个参数为支付平台返回。
function cfcatx_transfer($message,$signature){	
	$post_data = array();
	$post_data['message'] = $message;
	$post_data['signature'] = $signature;
	
	$response= get_web_content(data_encode($post_data) );
	$response=trim($response);
	
	return explode(",",$response);
}
function cfcatx_transfer2($message,$signature){	
	$post_data = array();
	$post_data['message'] = $message;
	$post_data['signature'] = $signature;
	
	$response= get_web_content2(data_encode($post_data) );
	$response=trim($response);
	
	return explode(",",$response);
}
function cfcatx_transfer3($message,$signature){	
	$post_data = array();
	$post_data['message'] = $message;
	$post_data['signature'] = $signature;
	
	$response= get_web_content3(data_encode($post_data) );
	$response=trim($response);
	
	return explode(",",$response);
}

function cfcatx_transfer4($message,$signature){	
	$post_data = array();
	$post_data['message'] = $message;
	$post_data['signature'] = $signature;
	
	$response= get_web_content4(data_encode($post_data) );
	$response=trim($response);
	
	return explode(",",$response);
}

function cfcatx_transfer5($message,$signature){ 
    $post_data = array();
    $post_data['message'] = $message;
    $post_data['signature'] = $signature;
    
    $response= get_web_content5(data_encode($post_data) );
    $response=trim($response);
    
    return explode(",",$response);
}

function cfcatx_transfer6($message,$signature){ 
    $post_data = array();
    $post_data['message'] = $message;
    $post_data['signature'] = $signature;
    
    $response= get_web_content6(data_encode($post_data) );
    $response=trim($response);
    
    return explode(",",$response);
}
//提交数据前要进行一下urlencode转换
function data_encode($data, $keyprefix = "", $keypostfix = "") {
  assert( is_array($data) );
  $vars=null;
  foreach($data as $key=>$value) {
    if(is_array($value)) $vars .= data_encode($value, $keyprefix.$key.$keypostfix.urlencode("["), urlencode("]"));
    else $vars .= $keyprefix.$key.$keypostfix."=".urlencode($value)."&";
  }
  return $vars;
}

//以下是数字信封相关方法

//数据发送
function dig_https( $curl_data,$url_flag)
{
    $options = array(
        CURLOPT_RETURNTRANSFER => true,         // return web page
        CURLOPT_HEADER         => true,        // don't return headers
        CURLOPT_NOBODY         => false,        // return body
        CURLOPT_FOLLOWLOCATION => true,         // follow redirects
        CURLOPT_ENCODING       => "",           // handle all encodings
        CURLOPT_USERAGENT      => "institution",     // who am i
        CURLOPT_AUTOREFERER    => true,         // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 120,          // timeout on connect
        CURLOPT_TIMEOUT        => 120,          // timeout on response
        CURLOPT_MAXREDIRS      => 10,           // stop after 10 redirects
        CURLOPT_POST            => 1,            // i am sending post data
        CURLOPT_POSTFIELDS     => $curl_data,    // this are my post vars
        CURLOPT_SSL_VERIFYHOST => 0,            // don't verify ssl
        CURLOPT_SSL_VERIFYPEER => false,        //
        CURLOPT_VERBOSE        => 1                //
    );
    //判断发送地址
    switch ($url_flag) { 
        case 1:  $url=TXURL; break; 
        case 2:  $url=TXURL2; break; 
        case 3:  $url=TXURL3; break; 
        case 4:  $url=TXURL4; break; 
        case 5:  $url=PAYURL2; break; 
        case 6:  $url=PAYURL6; break; 
        default: echo "发送地址设置错误！"; 
    } 
    $ch      = curl_init($url);
    curl_setopt_array($ch,$options);
    curl_setopt($ch,CURLOPT_HTTPHEADER,array("Expect:"));
    $response = curl_exec($ch);
    if (curl_getinfo($ch, CURLINFO_HTTP_CODE) == '200') {
        $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $headerSize);
        $body = substr($response, $headerSize);
    }

    curl_close($ch);
    $responseArray = array(
     'header' => $header,
     'body' => $body,    
    );
    return $responseArray;
    
} 

//发送数据到中金并获取返回参数
function cfcatx_transfer_dig($message,$signature,$isDgEnv,$signAlgorithm,$signSN,$encryptSN,$digitalEnvelope,$institutionID,$url_flag){ 
    $post_data = array();
    $post_data['message'] = $message;
    $post_data['signature'] = $signature;
    $post_data['isDgEnv'] = $isDgEnv;
    $post_data['signAlgorithm'] = $signAlgorithm;
    $post_data['signSN'] = $signSN;
    $post_data['encryptSN'] = $encryptSN;
    $post_data['digitalEnvelope'] = $digitalEnvelope;
    $post_data['institutionID'] = $institutionID;
    
    //var_dump($post_data);
    $responseArray= dig_https(data_encode($post_data),$url_flag);
    $header=$responseArray["header"];
    $body=$responseArray["body"];
    //将body拆分
    $bdoymessage=explode(",",$body);
   //将header拆分为数组
    $headArr = explode("\r\n", $header);
    //遍历获取header中所需参数
    foreach ($headArr as $loop) {
        if(strpos($loop, "isDgEnv") !== false){
        $isDgEnv = trim(substr($loop, 8));
        }
        if(strpos($loop, "signAlgorithm") !== false){
        $signAlgorithm = trim(substr($loop, 14));
        }
        if(strpos($loop, "signSN") !== false){
        $signSN = trim(substr($loop, 7));
        }
        if(strpos($loop, "encryptSN") !== false){
        $encryptSN = trim(substr($loop, 10));
        }
        if(strpos($loop, "digitalEnvelope") !== false){
        $digitalEnvelope = trim(substr($loop, 16));
        }
    }
     //将获取到的参数封装到数组中
     $responseArray = array(
     'message' => $bdoymessage[0],
     'signature' => $bdoymessage[1],    
     'isDgEnv' => $isDgEnv,    
     'signAlgorithm' => $signAlgorithm,    
     'signSN' => $signSN,    
     'encryptSN' => $encryptSN,    
     'digitalEnvelope' => $digitalEnvelope,    
    );
     
    return $responseArray;
    
}
//数字信封数据封装
/*
[message] 对称加密message
[signature] 数据签名
[isDgEnv] 是否是数字信封发送
[signAlgorithm] 签名算法
[signSN] 签名证书序列号
[encryptSN] 加密证书序列号
[digitalEnvelope] 数字信封
[institutionID] 机构号
*/
function  process_encrypt($xmlStr,$signature,$signAlgorithm,$institutionID,$url_flag){
        //生成随机字符串
        $randomKeyData = randomHexString();
        //用对称秘钥加密数据message
        $message= encode($xmlStr,$randomKeyData);
        //生成数字信封digitalEnvelope
        $digitalEnvelope = encryptByRSA($randomKeyData);
        //获取到签名证书序列号
        $signSN = getSignSN();
        //获取中金证书序列号
        $encryptSN = getEncryptSN();
        
        //发送数据
        $response=cfcatx_transfer_dig($message,$signature,isDgEnv,$signAlgorithm,$signSN,$encryptSN,$digitalEnvelope,$institutionID,$url_flag); 
        return $response;
               
}
//异步交易数据封装
function  process_encrypt_Asynchronous($xmlStr,$signature,$signAlgorithm,$institutionID){
        //生成随机字符串
        $randomKeyData = randomHexString();
        //用对称秘钥加密数据message
        $message= encode($xmlStr,$randomKeyData);
        //生成数字信封digitalEnvelope
        $digitalEnvelope = encryptByRSA($randomKeyData);
        //获取到签名证书序列号
        $signSN = getSignSN();
        //获取中金证书序列号
        $encryptSN = getEncryptSN();

        $responseArray = array(
               'message' => $message,
               'digitalEnvelope' => $digitalEnvelope,    
               'signSN' => $signSN,    
               'encryptSN' => $encryptSN,    
        );
        return $responseArray;
               
}
//解密中金返回参数
function  process_decrypt($message,$signature,$signAlgorithm,$signSN,$encryptSN,$digitalEnvelope){
        //解密对称秘钥
        $ResponseRandomKeyData_pri = getDecryptKeyByteByRSA($digitalEnvelope);
        $arr_ResponseRandomKeyData=explode('|',$ResponseRandomKeyData_pri);
        $ResponseRandomKeyData = $arr_ResponseRandomKeyData[1];
        //非对称解密获取报文明文
        $plainText = trim(decode($message,$ResponseRandomKeyData));

        return $plainText;                
}
?>
