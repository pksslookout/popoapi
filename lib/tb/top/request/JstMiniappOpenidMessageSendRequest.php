<?php
/**
 * TOP API: taobao.jst.miniapp.openid.message.send request
 * 
 * @author auto create
 * @since 1.0, 2020.12.02
 */
class JstMiniappOpenidMessageSendRequest
{
	/** 
	 * 短信内容
	 **/
	private $content;
	
	/** 
	 * 活动或人群code
	 **/
	private $crowdCode;
	
	/** 
	 * 短信拓展码
	 **/
	private $extendNum;
	
	/** 
	 * 用户openId
	 **/
	private $openId;
	
	/** 
	 * 商家的APPKEY，如果openId是用商家的appKey生成的则需要传递
	 **/
	private $sellerAppKey;
	
	/** 
	 * 短信签名
	 **/
	private $signName;
	
	/** 
	 * 短信模板
	 **/
	private $templateCode;
	
	/** 
	 * 短链，替换短信内容中的${url}
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

	public function setExtendNum($extendNum)
	{
		$this->extendNum = $extendNum;
		$this->apiParas["extend_num"] = $extendNum;
	}

	public function getExtendNum()
	{
		return $this->extendNum;
	}

	public function setOpenId($openId)
	{
		$this->openId = $openId;
		$this->apiParas["open_id"] = $openId;
	}

	public function getOpenId()
	{
		return $this->openId;
	}

	public function setSellerAppKey($sellerAppKey)
	{
		$this->sellerAppKey = $sellerAppKey;
		$this->apiParas["seller_app_key"] = $sellerAppKey;
	}

	public function getSellerAppKey()
	{
		return $this->sellerAppKey;
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
		return "taobao.jst.miniapp.openid.message.send";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->content,"content");
		RequestCheckUtil::checkNotNull($this->crowdCode,"crowdCode");
		RequestCheckUtil::checkNotNull($this->openId,"openId");
		RequestCheckUtil::checkNotNull($this->signName,"signName");
		RequestCheckUtil::checkNotNull($this->templateCode,"templateCode");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
