<?php

$api = app('Dingo\Api\Routing\Router');
$moduleName = 'Log';

// 平台后台api
$api->version('v1', ['prefix' => 'admin-api', 'namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Admin\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'] ;

	$api->get('/log/admin-logs', ['uses'=> "AdminLogController@index"]);
	$api->get('/log/admin-logs/{uuid}', ['uses'=> "AdminLogController@show"]);
	$api->get('/log/key-map', ['uses'=> "AdminLogController@keyMapIndex"]);
	$api->get('/log/action-type-map', ['uses'=> "AdminLogController@actionTypeMapIndex"]);

	$api->get('/log/asset-logs', ['uses'=> "AssetLogController@index"]);
});

// 租户api
$api->version('v1', ['prefix' => 'tenant-api', 'namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Tenant\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'];
});

// 普通用户api
$api->version('v1', ['namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Client\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'];

});