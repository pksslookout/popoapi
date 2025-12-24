<?php
/**
 * TOP API: taobao.jst.sms.message.send request
 * 
 * @author auto create
 * @since 1.0, 2021.01.04
 */
class JstSmsMessageSendRequest
{
	/** 
	 * 短信发送请求
	 **/
	private $sendMessageRequest;
	
	private $apiParas = array();
	
	public function setSendMessageRequest($sendMessageRequest)
	{
		$this->sendMessageRequest = $sendMessageRequest;
		$this->apiParas["send_message_request"] = $sendMessageRequest;
	}

	public function getSendMessageRequest()
	{
		return $this->sendMessageRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.message.send";
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
