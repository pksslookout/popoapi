<?php

/**
 * 菜单信息上报接口的请求参数
 * @author auto create
 */
class MenuInfoReportRequest
{
	
	/** 
	 * 左菜单按钮文案 店铺首页
	 **/
	public $left_menu_topic;
	
	/** 
	 * 左菜单按钮的URL,菜单url限制域名为taobao.com、tmall.com，tb.cn, 且只有180天内有效、用长链。聚石塔侧直接传tbopen链接
	 **/
	public $left_menu_url;
	
	/** 
	 * 中间菜单按钮文案 热销商品、精选商品
	 **/
	public $mid_menu_topic;
	
	/** 
	 * 中间菜单的URL
	 **/
	public $mid_menu_url;
	
	/** 
	 * ADD：新增，MODIFY：修改
	 **/
	public $operation;
	
	/** 
	 * 右菜单按钮文案 会员中心、入会有礼、新品推荐、最新活动、店铺微淘
	 **/
	public $right_menu_topic;
	
	/** 
	 * 右菜单的URL
	 **/
	public $right_menu_url;	
}
?>