<?php
/**
 * TOP API: taobao.jst.miniapp.crowd.message.send request
 * 
 * @author auto create
 * @since 1.0, 2020.11.26
 */
class JstMiniappCrowdMessageSendRequest
{
	/** 
	 * 短信内容
	 **/
	private $content;
	
	/** 
	 * 活动code
	 **/
	private $crowdCode;
	
	/** 
	 * 短信签名
	 **/
	private $signName;
	
	/** 
	 * 短信模板，必须为全变量模板
	 **/
	private $templateCode;
	
	/** 
	 * 短信中携带的短链，会替换短信内容中的${url}
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setContent($content)
	{
		$this->content = $content;
		$this->apiParas["content"] = $content;
	}

	public function getContent()
	{
		return $this->content;
	}

	public function setCrowdCode($crowdCode)
	{
		$this->crowdCode = $crowdCode;
		$this->apiParas["crowd_code"] = $crowdCode;
	}

	public function getCrowdCode()
	{
		return $this->crowdCode;
	}

	public function setSignName($signName)
	{
		$this->signName = $signName;
		$this->apiParas["sign_name"] = $signName;
	}

	public function getSignName()
	{
		return $this->signName;
	}

	public function setTemplateCode($templateCode)
	{
		$this->templateCode = $templateCode;
		$this->apiParas["template_code"] = $templateCode;
	}

	public function getTemplateCode()
	{
		return $this->templateCode;
	}

	public function setUrl($url)
	{
		$this->url = $url;
		$this->apiParas["url"] = $url;
	}

	public function getUrl()
	{
		return $this->url;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.miniapp.crowd.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->crowdCode,"crowdCode");
		RequestCheckUtil::checkNotNull($this->signName,"signName");
		RequestCheckUtil::checkNotNull($this->templateCode,"templateCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
