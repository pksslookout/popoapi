<?php

/**
 * 返回值
 * @author auto create
 */
class SmsStateModel
{
	
	/** 
	 * 品牌
	 **/
	public $manufacturer;
	
	/** 
	 * success fail
	 **/
	public $remark;
	
	/** 
	 * 1 审核中；2 审核不通过；3 待上线；4 已上线；5 已下线
	 **/
	public $status;
	
	/** 
	 * CHANNEL（通道）、PUB（LOGO和名称）
	 **/
	public $type;	
}
?>