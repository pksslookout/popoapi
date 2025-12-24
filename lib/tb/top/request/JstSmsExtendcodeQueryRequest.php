<?php
/**
 * TOP API: taobao.jst.sms.extendcode.query request
 * 
 * @author auto create
 * @since 1.0, 2020.08.13
 */
class JstSmsExtendcodeQueryRequest
{
	/** 
	 * 扩展码查询请求
	 **/
	private $extendCodeQueryRequest;
	
	private $apiParas = array();
	
	public function setExtendCodeQueryRequest($extendCodeQueryRequest)
	{
		$this->extendCodeQueryRequest = $extendCodeQueryRequest;
		$this->apiParas["extend_code_query_request"] = $extendCodeQueryRequest;
	}

	public function getExtendCodeQueryRequest()
	{
		return $this->extendCodeQueryRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.extendcode.query";
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
