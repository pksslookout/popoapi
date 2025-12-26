<?php

$api = app('Dingo\Api\Routing\Router');
$moduleName = 'Setting';

// 平台后台api
$api->version('v1', ['prefix' => 'admin-api', 'namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Admin\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'] ;
	$api->resource('setting-', "SettingController", ['only' => $allMethod]);

});
