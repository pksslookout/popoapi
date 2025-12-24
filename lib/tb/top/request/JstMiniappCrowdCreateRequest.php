<?php
/**
 * TOP API: taobao.jst.miniapp.crowd.create request
 * 
 * @author auto create
 * @since 1.0, 2020.11.26
 */
class JstMiniappCrowdCreateRequest
{
	/** 
	 * 活动名称
	 **/
	private $crowdName;
	
	/** 
	 * 活动描述
	 **/
	private $description;
	
	/** 
	 * 活动开始时间，开始时间和结束时间不能超过1个月
	 **/
	private $endDate;
	
	/** 
	 * 活动开始时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setCrowdName($crowdName)
	{
		$this->crowdName = $crowdName;
		$this->apiParas["crowd_name"] = $crowdName;
	}

	public function getCrowdName()
	{
		return $this->crowdName;
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

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.jst.miniapp.crowd.create";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->crowdName,"crowdName");
		RequestCheckUtil::checkNotNull($this->description,"description");
		RequestCheckUtil::checkNotNull($this->endDate,"endDate");
		RequestCheckUtil::checkNotNull($this->startDate,"startDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
