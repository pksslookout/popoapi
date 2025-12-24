<?php
/**
 * TOP API: taobao.miniapp.template.instantiate request
 * 
 * @author auto create
 * @since 1.0, 2020.11.30
 */
class MiniappTemplateInstantiateRequest
{
	/** 
	 * 小程序简称【1-16】字符，可重名
	 **/
	private $alias;
	
	/** 
	 * 投放端,目前可投放： taobao(淘宝),tmall(天猫)，taobao为必填，需要模板在这些端上已经发布上线
	 **/
	private $clients;
	
	/** 
	 * 描述长度(9~200)
	 **/
	private $description;
	
	/** 
	 * 扩展信息，JSON格式。
	 **/
	private $extJson;
	
	/** 
	 * 小程序icon
	 **/
	private $icon;
	
	/** 
	 * 小程序名称按平台规则自动生成，该字段仅做兜底使用。
	 **/
	private $name;
	
	/** 
	 * 模板id
	 **/
	private $templateId;
	
	/** 
	 * 模板版本
	 **/
	private $templateVersion;
	
	private $apiParas = array();
	
	public function setAlias($alias)
	{
		$this->alias = $alias;
		$this->apiParas["alias"] = $alias;
	}

	public function getAlias()
	{
		return $this->alias;
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

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setExtJson($extJson)
	{
		$this->extJson = $extJson;
		$this->apiParas["ext_json"] = $extJson;
	}

	public function getExtJson()
	{
		return $this->extJson;
	}

	public function setIcon($icon)
	{
		$this->icon = $icon;
		$this->apiParas["icon"] = $icon;
	}

	public function getIcon()
	{
		return $this->icon;
	}

	public function setName($name)
	{
		$this->name = $name;
		$this->apiParas["name"] = $name;
	}

	public function getName()
	{
		return $this->name;
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

	public function setTemplateVersion($templateVersion)
	{
		$this->templateVersion = $templateVersion;
		$this->apiParas["template_version"] = $templateVersion;
	}

	public function getTemplateVersion()
	{
		return $this->templateVersion;
	}

	public function getApiMethodName()
	{
		return "taobao.miniapp.template.instantiate";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->clients,"clients");
		RequestCheckUtil::checkMaxListSize($this->clients,20,"clients");
		RequestCheckUtil::checkNotNull($this->description,"description");
		RequestCheckUtil::checkNotNull($this->extJson,"extJson");
		RequestCheckUtil::checkNotNull($this->icon,"icon");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
		RequestCheckUtil::checkNotNull($this->templateVersion,"templateVersion");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
