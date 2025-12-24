<?php
/**
 * TOP API: taobao.miniapp.template.offlineapp request
 * 
 * @author auto create
 * @since 1.0, 2020.11.26
 */
class MiniappTemplateOfflineappRequest
{
	/** 
	 * 要下线的小程序app_id
	 **/
	private $appId;
	
	/** 
	 * 要下线的小程序版本号
	 **/
	private $appVersion;
	
	/** 
	 * 要下线的投放端,目前可投放： taobao(淘宝),tmall(天猫)
	 **/
	private $clients;
	
	/** 
	 * 模板id
	 **/
	private $templateId;
	
	private $apiParas = array();
	
	public function setAppId($appId)
	{
		$this->appId = $appId;
		$this->apiParas["app_id"] = $appId;
	}

	public function getAppId()
	{
		return $this->appId;
	}

	public function setAppVersion($appVersion)
	{
		$this->appVersion = $appVersion;
		$this->apiParas["app_version"] = $appVersion;
	}

	public function getAppVersion()
	{
		return $this->appVersion;
	}

	public function setClients($clients)
	{
		$this->clients = $clients;
		$this->apiParas["clients"] = $clients;
	}

	public function getClients()
	{
		return $this->clients;
	}

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function getApiMethodName()
	{
		return "taobao.miniapp.template.offlineapp";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->appId,"appId");
		RequestCheckUtil::checkNotNull($this->appVersion,"appVersion");
		RequestCheckUtil::checkNotNull($this->clients,"clients");
		RequestCheckUtil::checkMaxListSize($this->clients,999,"clients");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
