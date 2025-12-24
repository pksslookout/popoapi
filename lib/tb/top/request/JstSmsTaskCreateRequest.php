<?php
/**
 * TOP API: taobao.jst.sms.task.create request
 * 
 * @author auto create
 * @since 1.0, 2021.01.12
 */
class JstSmsTaskCreateRequest
{
	/** 
	 * 创建任务的入参
	 **/
	private $paramCreateSmsTaskRequest;
	
	private $apiParas = array();
	
	public function setParamCreateSmsTaskRequest($paramCreateSmsTaskRequest)
	{
		$this->paramCreateSmsTaskRequest = $paramCreateSmsTaskRequest;
		$this->apiParas["param_create_sms_task_request"] = $paramCreateSmsTaskRequest;
	}

	public function getParamCreateSmsTaskRequest()
	{
		return $this->paramCreateSmsTaskRequest;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.sms.task.create";
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
