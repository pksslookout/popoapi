<?php
namespace Modules\Core\Services;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use ThrowException;

use Modules\Core\Helpers\HttpClient;

use HarriesCC\Kuaidi100\Tracker;

class ExpressQueryService
{
    // public function getProgress($number)
    // {
    //     $url = 'https://ali-deliver.showapi.com';
    //     $appcode = "2c64651b63494be992120df448bd92ab";

    //     $path = "/showapi_expInfo?com=auto&nu=" . $number;

    //     $httpClient = new HttpClient($url);

    //     $httpClient->get($path, [
    //         'Authorization' => 'APPCODE '.$appcode
    //     ]);
    // }

    public function query($number)
    {

        $data = [];

        try {
            // 快递100查询
            $kuaidi = new Tracker([
                'key' => env('EXPRESS100_KEY'),
                'customer' => env('EXPRESS100_APPID')
            ]);

            $data = $kuaidi->track('auto', $number);

            $data = @json_decode($data, true)['data'] ?: [];
        } 
        catch (Exception $e) {
        }
        
        // \Log::error($data);
        return $data;
    }

}
