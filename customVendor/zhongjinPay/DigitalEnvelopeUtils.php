<?php
    /**
	 * [encryptByRSA RSA非对称加密]
	 * @param  [type] $plainDate [明文字符串]
	 * @return [type]            [密文字符串]
	 */
    //RSA非对称加密
function encryptByRSA($plainDate){
		$file = 'config/paytest.cer';
		//添加 01| 代表国际对称加密，即AES
		$data='01|'.$plainDate;
		openssl_public_encrypt($data,$encrypted,file_get_contents($file));
		return base64_encode($encrypted);
	}
	/**
	 * [getDecryptKeyByteByRSA RSA非对称解密]
	 * @param  [type] $signData [密文字符串]
	 * @return [type]           [明文字符串]
	 */
	//RSA非对称解密
function getDecryptKeyByteByRSA($signData){
		$plainDate = '';
		$p12cert = array();
		$file = 'config/test.pfx';
		$fd = fopen($file, 'r');
		$p12buf = fread($fd, filesize($file));
		fclose($fd);
		openssl_pkcs12_read($p12buf, $p12cert, 'cfca1234');
		$pkeyid = $p12cert['pkey'];
		openssl_private_decrypt(base64_decode($signData), $plainDate, $pkeyid);
		return $plainDate;
	}
	/**
	 * [getSignSN 返回商户证书序列号]
	 * @return [type] [商户证书序列号]
	 */
	//返回商户私钥证书序列号
function getSignSN(){
		$p12cert = array();
		$file = 'config/test.pfx';
		$fd = fopen($file, 'r');
		$p12buf = fread($fd, filesize($file));
		fclose($fd);
		openssl_pkcs12_read($p12buf, $p12cert, 'cfca1234');
		$cert = $p12cert['cert'];
		$ssl = openssl_x509_parse($cert);
		return $ssl['serialNumberHex'];
	}
	/**
	 * [getEncryptSN 返回中金证书序列号]
	 * @return [type] [中金证书序列号]
	 */
	//返回中金公钥证书序列号
function getEncryptSN(){
		$cert = file_get_contents('config/paytest.cer');
		$ssl = openssl_x509_parse($cert);
		return $ssl['serialNumberHex'];
	}
    /**
	 * [randomHexString 生成对称秘钥]
	 * @return [string] [32位大写十六进制字符串]
	 */
    //生成随机对称私钥
function randomHexString(){
		$str = "";
		for ($i=1; $i <=16; $i++) { 
			$temp = dechex(mt_rand(0,15));
			$str=$str.$temp;
		}
		$randomKeyData = strtoupper($str);
		return $randomKeyData;
	}
	/**
	 * [decode aes256加密]
	 * @param  [type] $objStr [报文明文]
	 * @param  [type] $key    [32位大写十六进制字符串]
	 * @return [type]         [加密后的报文message]
	 */
function encode($objStr,$key){
		return base64_encode(openssl_encrypt($objStr, 'aes-128-ecb', $key,1,substr(0, 16)));
	}

	/**
	 * [decode aes256解密]
	 * @param  [type] $encryptedMessage [报文密文responseMessage]
	 * @param  [type] $key              [32位大写十六进制字符串]
	 * @return [type]                   [报文明文]
	 */
function decode($encryptedMessage,$key){

		return openssl_decrypt(base64_decode($encryptedMessage), 'aes-128-ecb', $key,1,substr(0,16));
	}
?> 
