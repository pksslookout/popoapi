<?php
/**
 * TOP API: taobao.jst.sms.officialaccount.online request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class JstSmsOfficialaccountOnlineRequest
{
	/** 
	 * 公众号上线请求参数
	 **/
	private $officialAccountOnlineRequest;
	
	private $apiParas = array();
	
	public function setOfficialAccountOnlineRequest($officialAccountOnlineRequest)
	{
		$this->officialAccountOnlineRequest = $officialAccountOnlineRequest;
		$this->apiParas["official_account_online_request"] = $officialAccountOnlineRequest;
	}

	public function getOfficialAccountOnlineRequest()
	{
		return $this->officialAccountOnlineRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.officialaccount.online";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->officialAccountOnlineRequest,"officialAccountOnlineRequest");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
