<?php
namespace Modules\Core\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use \Modules\Core\Entities\ExportRecord;

use Validator;
use ThrowException;
use Storage;
use Auth;

class ExportRecordController extends Controller
{
    public function index(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $options = $req->all();

        $admin = Auth::requireLoginAdmin();

        $options['where']['admin_id'] = $admin->id;

        $list = ExportRecord::getList($options);

        return $list->generateListResponse();
    }

    public function store(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $info = $req->all();

        $admin = Auth::requireLoginAdmin();

        $info['title'] = @$info['options']['export_title'];
        if (!$info['title']) {
            ThrowException::Conflict('请填写导出标题~');
        }

        $info['admin_id'] = $admin->id;
        $info['submited_at'] = now();


        $item = ExportRecord::create($info);

        return [
        	'id' => $item->id,
        	'uuid' => $item->uuid
        ];
    }

    public function run(Request $req, $uuid)
    {
    	$item = ExportRecord::where('uuid', $uuid)->first();

    	$item->run();

    	return [];
    }

    public function destroy(Request $req, $uuid)
    {
        $item = ExportRecord::where('uuid', $uuid)->first();

        $item->delete();

        return [];

        // \Log::error($url);
    }
}
