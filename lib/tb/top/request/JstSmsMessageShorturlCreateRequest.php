<?php
/**
 * TOP API: taobao.jst.sms.message.shorturl.create request
 * 
 * @author auto create
 * @since 1.0, 2021.01.04
 */
class JstSmsMessageShorturlCreateRequest
{
	/** 
	 * 批次号
	 **/
	private $batchNumber;
	
	/** 
	 * 是否需要https前缀： true-要  false-不要
	 **/
	private $needHttpsPrefix;
	
	/** 
	 * 人群标签
	 **/
	private $tag;
	
	/** 
	 * 商品或者店铺的H5地址，只支持长链
	 **/
	private $url;
	
	private $apiParas = array();
	
	public function setBatchNumber($batchNumber)
	{
		$this->batchNumber = $batchNumber;
		$this->apiParas["batch_number"] = $batchNumber;
	}

	public function getBatchNumber()
	{
		return $this->batchNumber;
	}

	public function setNeedHttpsPrefix($needHttpsPrefix)
	{
		$this->needHttpsPrefix = $needHttpsPrefix;
		$this->apiParas["need_https_prefix"] = $needHttpsPrefix;
	}

	public function getNeedHttpsPrefix()
	{
		return $this->needHttpsPrefix;
	}

	public function setTag($tag)
	{
		$this->tag = $tag;
		$this->apiParas["tag"] = $tag;
	}

	public function getTag()
	{
		return $this->tag;
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
		return "taobao.jst.sms.message.shorturl.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->batchNumber,"batchNumber");
		RequestCheckUtil::checkNotNull($this->tag,"tag");
		RequestCheckUtil::checkNotNull($this->url,"url");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
