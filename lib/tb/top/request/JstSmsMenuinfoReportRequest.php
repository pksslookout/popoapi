<?php
/**
 * TOP API: taobao.jst.sms.menuinfo.report request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class JstSmsMenuinfoReportRequest
{
	/** 
	 * 菜单信息上报接口的请求参数
	 **/
	private $menuInfoReportRequest;
	
	private $apiParas = array();
	
	public function setMenuInfoReportRequest($menuInfoReportRequest)
	{
		$this->menuInfoReportRequest = $menuInfoReportRequest;
		$this->apiParas["menu_info_report_request"] = $menuInfoReportRequest;
	}

	public function getMenuInfoReportRequest()
	{
		return $this->menuInfoReportRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.menuinfo.report";
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
