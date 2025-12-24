<?php
namespace Modules\Core\Http\Controllers\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Core\Entities\AppVersion;

use Validator;
use ThrowException;
use Auth;

class AppVersionController extends Controller
{
    public function index(Request $req)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $options = $req->all();

        // $options['order_by'] = ['list_weight' => 'desc'];
        // $options['with'] = ['user'];

        $list = AppVersion::getList($options);

        return $list->generateListResponse();
    }

    public function store(Request $req)
    {
        $rule = [
            'os_type' => ['required'],
            'package_url' => ['required'],
            'version' =>  ['required']
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $info = $req->all();

        $item = AppVersion::create($info);

        return [
            'id' => $item->id,
            'uuid' => $item->uuid
        ];
    }

    public function show(Request $req, $uuid)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $item = AppVersion::getEntity([
            'uuid' => $uuid
        ]);

        $info = $item->getInfo();

        return [
            'info' => $info
        ];
    }

    public function update(Request $req, $uuid)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $item = AppVersion::getEntity([
            'uuid' => $uuid
        ]);

        if ($req->type === 'update') {
            $info = $req->input('attributes');
            $item->update($info);
        }

        return [];
    }

    public function destroy(Request $req, $uuid)
    {
        $rule = [
        ];
        Validator::make($req->all(), $rule)->fails() && ThrowException::BadRequest(); 

        $item = AppVersion::getEntity([
            'uuid' => $uuid
        ]);

        $item->delete();

        return [];
    }
}
