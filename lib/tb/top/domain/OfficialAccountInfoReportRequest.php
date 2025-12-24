<?php

/**
 * 公众号信息上报接口入参
 * @author auto create
 */
class OfficialAccountInfoReportRequest
{
	
	/** 
	 * ADD：新增，MODIFY：修改
	 **/
	public $operation;
	
	/** 
	 * 白底logo图片的资源Url地址，正方形，400x400，png格式
	 **/
	public $shop_logo;
	
	/** 
	 * 店铺名
	 **/
	public $shop_name;
	
	/** 
	 * 短信签名
	 **/
	public $sms_sign;
	
	/** 
	 * ISV给商家分配的通道号码后缀，可传多个，逗号分隔
	 **/
	public $suffixes;	
}
?>