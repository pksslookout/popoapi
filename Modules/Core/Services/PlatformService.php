<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;

use Modules\Core\Helpers\HttpClient;


class PlatformService
{
	public function getAppInfo()
	{
		$baseUrl = 'https://apitest.popolive.net';

		$apiHelper = new HttpClient($baseUrl);

		$appKey = @file_get_contents(base_path() . '/Modules/Core/Database/Seeders/.key');

		$info = $apiHelper->post('/platform/app/info', [
			'app_key' => $appKey
		]);

		$info = @json_decode($info, true)['data'] ?: [];

		return $info;
	}
}
