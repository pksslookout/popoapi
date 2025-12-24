<?php
namespace Modules\Core\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use \Modules\Core\Entities\HistoryImage;

use Validator;
use ThrowException;
use Storage;

class UploadController extends Controller
{
    public function uploadImage(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $image = $req->image;

        $disk = Storage::disk();

        // 前缀 or 目录
        $dir = env('APP_NAME') . '/img/' . $req->input('dir', 'other');

        $path = $disk->put($dir, $image);
        $path = $disk->url($path);

        // 保存记录
        HistoryImage::create([
            'url' => $path,
            'category_id' => $req->input('tag_id')
        ]);

        return [
            'image' => [
                'url' => $path
            ]
        ];
    }

    // 上传文件
    public function uploadFile(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $file = $req->file;

        // $disk = Storage::disk();

        $extension = $file->getClientOriginalExtension();

        // 前缀 or 目录
        $dir = env('APP_NAME') . '/file';

        $path = $file->storeAs($dir, uniqid() . '.' . $extension);
        $path = Storage::url($path);

        return [
            'file' => [
                'url' => $path
            ]
        ];
    }

    // 上传文件
    public function uploadPrivateFile(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $file = $req->file;

        // $disk = Storage::disk();

        $extension = $file->getClientOriginalExtension();

        // $dir = $req->fileType;
        $dir = "private";

        $path = $file->storeAs($dir, uniqid() . '.' . $extension, 'private');


        // 前缀 or 目录
        // $dir = base_path() . '/storage/upload/';

        // $path = $file->storeAs($dir, uniqid() . '.' . $extension);
        // $path = Storage::disk('private')->url($path);
        $path = '/upload/' . $path;


        return [
            'file' => [
                'url' => $path
            ]
        ];
    }
}
