<?php

$api = app('Dingo\Api\Routing\Router');
$moduleName = 'Core';

// 平台后台api
$api->version('v1', ['prefix' => 'admin-api', 'namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Admin\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'] ;

	// 上传图片
	$api->post('/image', ['uses'=> "UploadController@uploadImage"]);

	// 上传文件
	$api->post('/file/private', ['uses'=> "UploadController@uploadPrivateFile"]);

	// 上传文件
	$api->post('/file', ['uses'=> "UploadController@uploadFile"]);

	$api->get('/platform/app/info', ['uses'=> "PlatformController@appInfo"]);
	$api->get('/platform/option-modules', ['uses'=> "PlatformController@optionModuleIndex"]);

	$api->get('/miniapp/live-list', ['uses'=> "WechatController@miniappLiveList"]);
	$api->get('/miniapp/qrcode', ['uses'=> "WechatController@miniappCode"]);
    $api->post('/miniapp/url', ['uses'=> "WechatController@getUrl"]);

	$api->post('/setting/sys/{type}', ['uses'=> "SysSettingController@store"]);
	$api->get('/setting/sys/{type}', ['uses'=> "SysSettingController@show"]);

	$api->resource('app-versions', "AppVersionController", ['only' => $allMethod]);

	// 历史上传的图片列表
	$api->get('/image/history', ['uses'=> "ImageHistoryController@list"]);

	// 导出记录
	$api->get('/export-records', ['uses'=> "ExportRecordController@index"]);
	$api->post('/export-records', ['uses'=> "ExportRecordController@store"]);
	$api->post('/export-records/{uuid}/run', ['uses'=> "ExportRecordController@run"]);
	$api->delete('/export-records/{uuid}', ['uses'=> "ExportRecordController@destroy"]);

});

// 租户api
// $api->version('v1', ['prefix' => 'tenant-api', 'namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Tenant\V1'], function ($api) {
// 	$allMethod = ['index', 'show', 'store', 'update', 'destroy'];
// });

// 普通用户api
$api->version('v1', ['namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Client\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'];
	$api->post('/image', ['uses'=> "UploadImageController@uploadImage"]);

	$api->post('/wechat/jssdk-config', ['uses'=> "WechatController@jssdkConfig"]);

	// 测试用
	$api->post('/mock-rank-data', ['uses'=> "TestController@mockRankData"]);

	$api->get('/test', ['uses'=> "TestController@test"]);

	$api->get('/miniapp/subscribe-ids', ['uses'=> "WechatController@miniappSubscribeIdIndex"]);

	$api->get('/miniapp/qrcode', ['uses'=> "WechatController@miniappCode"]);
	$api->post('/miniapp/qrcode', ['uses'=> "WechatController@miniappCode"]);

	// 小程序跳转路径
	$api->post('/miniapp/url', ['uses'=> "WechatController@getUrl"]);

	$api->post('/version/app/check-update', ['uses'=> "VersionController@appVersionCheckUpdate"]);

	$api->post('/subscribe', ['uses'=> "SubscribeRecordController@store"]);

	$api->get('/', ['uses'=> "HomeController@home"]);
});