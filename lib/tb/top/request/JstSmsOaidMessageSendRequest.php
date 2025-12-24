<?php
/**
 * TOP API: taobao.jst.sms.oaid.message.send request
 * 
 * @author auto create
 * @since 1.0, 2021.05.13
 */
class JstSmsOaidMessageSendRequest
{
	/** 
	 * 单个OAID发送短信的入参
	 **/
	private $paramSendMessageByOAIDRequest;
	
	private $apiParas = array();
	
	public function setParamSendMessageByOAIDRequest($paramSendMessageByOAIDRequest)
	{
		$this->paramSendMessageByOAIDRequest = $paramSendMessageByOAIDRequest;
		$this->apiParas["param_send_message_by_o_a_i_d_request"] = $paramSendMessageByOAIDRequest;
	}

	public function getParamSendMessageByOAIDRequest()
	{
		return $this->paramSendMessageByOAIDRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.oaid.message.send";
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
