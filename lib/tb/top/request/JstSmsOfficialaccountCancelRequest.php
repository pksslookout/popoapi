<?php
/**
 * TOP API: taobao.jst.sms.officialaccount.cancel request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class JstSmsOfficialaccountCancelRequest
{
	/** 
	 * 取消公众号订购请求
	 **/
	private $cancelOrderRequest;
	
	private $apiParas = array();
	
	public function setCancelOrderRequest($cancelOrderRequest)
	{
		$this->cancelOrderRequest = $cancelOrderRequest;
		$this->apiParas["cancel_order_request"] = $cancelOrderRequest;
	}

	public function getCancelOrderRequest()
	{
		return $this->cancelOrderRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.officialaccount.cancel";
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
