<?php
namespace Modules\Core\Http\Controllers\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class HomeController extends Controller
{
    // 跳转至公司主页，可自行修改
    public function home(Request $req) 
    {
    	return redirect(env('HOME_REDIRECT') ?: 'https://hquesoft.com');
    }
}
