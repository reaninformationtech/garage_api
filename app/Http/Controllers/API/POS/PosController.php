<?php

namespace App\Http\Controllers\api\pos;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\API\SqlModel;

class PosController extends BaseController
{
    //
    protected $SqlModel;
    public function pos_combo(Request $request,$id)
    {
        $SqlModel = new SqlModel();
        $gb_user_branch=$SqlModel->gb_user_branch($request);
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)', array($id,$gb_user_branch, ''));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }
}
