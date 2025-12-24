<?php
/**
 * TOP API: taobao.miniapp.cloud.function.invoke request
 * 
 * @author auto create
 * @since 1.0, 2021.02.24
 */
class MiniappCloudFunctionInvokeRequest
{
	/** 
	 * 调用云函数时的传参（JSON格式）
	 **/
	private $data;
	
	/** 
	 * 云环境
	 **/
	private $env;
	
	/** 
	 * 扩展协议参数
	 **/
	private $exts;
	
	/** 
	 * 指定云函数的handler
	 **/
	private $handler;
	
	/** 
	 * 云函数名称
	 **/
	private $name;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setEnv($env)
	{
		$this->env = $env;
		$this->apiParas["env"] = $env;
	}

	public function getEnv()
	{
		return $this->env;
	}

	public function setExts($exts)
	{
		$this->exts = $exts;
		$this->apiParas["exts"] = $exts;
	}

	public function getExts()
	{
		return $this->exts;
	}

	public function setHandler($handler)
	{
		$this->handler = $handler;
		$this->apiParas["handler"] = $handler;
	}

	public function getHandler()
	{
		return $this->handler;
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

	public function getApiMethodName()
	{
		return "taobao.miniapp.cloud.function.invoke";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->env,"env");
		RequestCheckUtil::checkNotNull($this->handler,"handler");
		RequestCheckUtil::checkNotNull($this->name,"name");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
