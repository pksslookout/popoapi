<?php

$api = app('Dingo\Api\Routing\Router');
$moduleName = 'Admin';

// 平台后台api
$api->version('v1', ['prefix' => 'admin-api', 'namespace' => 'Modules\\'.$moduleName.'\Http\Controllers\Admin\V1'], function ($api) {
	$allMethod = ['index', 'show', 'store', 'update', 'destroy'] ;
	$api->post('login/with-password', ['uses'=> "LoginController@loginWithPassword"]);
	$api->resource('admins', "AdminController", ['only' => $allMethod]);
});
