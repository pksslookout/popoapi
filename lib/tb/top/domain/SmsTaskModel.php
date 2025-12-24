<?php

/**
 * 出参
 * @author auto create
 */
class SmsTaskModel
{
	
	/** 
	 * appkey
	 **/
	public $app_key;
	
	/** 
	 * 短信文案
	 **/
	public $contents;
	
	/** 
	 * 创建时间
	 **/
	public $gmt_create;
	
	/** 
	 * 修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * isv淘宝nick
	 **/
	public $isv_nick;
	
	/** 
	 * 商家淘宝nick
	 **/
	public $seller_nick;
	
	/** 
	 * 短信签名
	 **/
	public $sign_names;
	
	/** 
	 * 任务对应的短信类型 ：1--数字短信  2--权益短信  3--公众号短信
	 **/
	public $sms_type;
	
	/** 
	 * 系统分配的任务code
	 **/
	public $task_code;
	
	/** 
	 * 短信模板code
	 **/
	public $template_codes;
	
	/** 
	 * 商品或店铺详情页H5长链地址
	 **/
	public $url;	
}
?>