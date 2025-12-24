<?php
/**
 * TOP API: taobao.jst.sms.officialaccount.offline request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class JstSmsOfficialaccountOfflineRequest
{
	/** 
	 * 公众号下线请求
	 **/
	private $officialAccountOffline;
	
	private $apiParas = array();
	
	public function setOfficialAccountOffline($officialAccountOffline)
	{
		$this->officialAccountOffline = $officialAccountOffline;
		$this->apiParas["official_account_offline"] = $officialAccountOffline;
	}

	public function getOfficialAccountOffline()
	{
		return $this->officialAccountOffline;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.officialaccount.offline";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->officialAccountOffline,"officialAccountOffline");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
