<?php
/**
 * TOP API: taobao.jst.sms.status.query request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class JstSmsStatusQueryRequest
{
	/** 
	 * 公众号状态信息查询请求
	 **/
	private $officialAccountStatusQueryRequest;
	
	private $apiParas = array();
	
	public function setOfficialAccountStatusQueryRequest($officialAccountStatusQueryRequest)
	{
		$this->officialAccountStatusQueryRequest = $officialAccountStatusQueryRequest;
		$this->apiParas["official_account_status_query_request"] = $officialAccountStatusQueryRequest;
	}

	public function getOfficialAccountStatusQueryRequest()
	{
		return $this->officialAccountStatusQueryRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.status.query";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->officialAccountStatusQueryRequest,"officialAccountStatusQueryRequest");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
