<?php

/**
 * 单个OAID发送短信的入参
 * @author auto create
 */
class SendMessageByOaidRequest
{
	
	/** 
	 * 是否需要返回附加信息
	 **/
	public $additional_info;
	
	/** 
	 * 拓展信息
	 **/
	public $extend;
	
	/** 
	 * 拓展Code
	 **/
	public $extend_code;
	
	/** 
	 * 拓展Name
	 **/
	public $extend_name;
	
	/** 
	 * OAID
	 **/
	public $oaid;
	
	/** 
	 * 订单号
	 **/
	public $order_id;
	
	/** 
	 * 短信占位符，替换短信模板里的占位符
	 **/
	public $params;
	
	/** 
	 * 短信签名
	 **/
	public $sms_free_sign_name;
	
	/** 
	 * 短信模板
	 **/
	public $template_code;	
}
?>