<?php
namespace Modules\Core\Http\Controllers\Client\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Validator;
use ThrowException;
use Storage;

class UploadImageController extends Controller
{
    public function uploadImage(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $image = $req->image;

        $disk = Storage::disk();

        // 前缀 or 目录
        $dir = '/img/' . $req->input('dir', 'other');

        $path = $disk->put($dir, $image);
        $path = $disk->url($path);

        return [
            'image' => [
                'url' => $path
            ]
        ];
    }
}
