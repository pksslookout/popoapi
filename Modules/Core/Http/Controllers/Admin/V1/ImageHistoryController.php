<?php
namespace Modules\Core\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use \Modules\Core\Entities\HistoryImage;

use Validator;
use ThrowException;
use Storage;

class ImageHistoryController extends Controller
{
    public function list(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $options = $req->all();

        $list = HistoryImage::getList($options);

        return $list->generateListResponse();
    }
}
