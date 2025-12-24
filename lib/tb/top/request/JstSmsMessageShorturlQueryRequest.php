<?php
/**
 * TOP API: taobao.jst.sms.message.shorturl.query request
 * 
 * @author auto create
 * @since 1.0, 2021.01.13
 */
class JstSmsMessageShorturlQueryRequest
{
	/** 
	 * 短链名，即域名后的字符串
	 **/
	private $shortName;
	
	private $apiParas = array();
	
	public function setShortName($shortName)
	{
		$this->shortName = $shortName;
		$this->apiParas["short_name"] = $shortName;
	}

	public function getShortName()
	{
		return $this->shortName;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.message.shorturl.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->shortName,"shortName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
