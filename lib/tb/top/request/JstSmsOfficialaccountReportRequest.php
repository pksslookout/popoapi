<?php
/**
 * TOP API: taobao.jst.sms.officialaccount.report request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class JstSmsOfficialaccountReportRequest
{
	/** 
	 * 公众号信息上报接口入参
	 **/
	private $officialAccountInfoReportRequest;
	
	private $apiParas = array();
	
	public function setOfficialAccountInfoReportRequest($officialAccountInfoReportRequest)
	{
		$this->officialAccountInfoReportRequest = $officialAccountInfoReportRequest;
		$this->apiParas["official_account_info_report_request"] = $officialAccountInfoReportRequest;
	}

	public function getOfficialAccountInfoReportRequest()
	{
		return $this->officialAccountInfoReportRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.officialaccount.report";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
