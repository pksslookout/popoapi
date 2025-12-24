<?php

$api = app('Dingo\Api\Routing\Router');
$moduleName = 'Role';

// 平台后台api
$api->version('v1', ['prefix' => 'admin-api', 'namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Admin\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'] ;

	$api->resource('admin-roles', "AdminRoleController", ['only' => $allMethod]);
});

// 租户api
$api->version('v1', ['prefix' => 'tenant-api', 'namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Tenant\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'];
});

// 普通用户api
$api->version('v1', ['namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Client\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'];
});