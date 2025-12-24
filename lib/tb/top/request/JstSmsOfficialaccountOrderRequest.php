<?php
/**
 * TOP API: taobao.jst.sms.officialaccount.order request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class JstSmsOfficialaccountOrderRequest
{
	/** 
	 * 聚石塔公众号订购
	 **/
	private $orderOfficialAccountRequest;
	
	private $apiParas = array();
	
	public function setOrderOfficialAccountRequest($orderOfficialAccountRequest)
	{
		$this->orderOfficialAccountRequest = $orderOfficialAccountRequest;
		$this->apiParas["order_official_account_request"] = $orderOfficialAccountRequest;
	}

	public function getOrderOfficialAccountRequest()
	{
		return $this->orderOfficialAccountRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.officialaccount.order";
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
