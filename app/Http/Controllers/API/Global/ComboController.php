<?php

namespace App\Http\Controllers\API\Global;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\SqlModel;
use App\Http\Controllers\API\BaseController as BaseController;

class ComboController extends BaseController
{
    //
    protected $SqlModel;
    public function combo(Request $request,$id)
    {
        $SqlModel = new SqlModel();
        $results = $SqlModel->proc_get_data('CALL gb_get_combo(?,?,?)', array($id,'', ''));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function combo_sys(Request $request,$status)
    {
        $SqlModel = new SqlModel();
        $SystemId = $SqlModel->gb_user_system($request);
        $results = $SqlModel->proc_get_data('CALL gb_get_combo(?,?,?)', array($status,'', $SystemId));
        
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function combo_branch(Request $request,$id)
    {
        $SqlModel = new SqlModel();
        $branch = $SqlModel->gb_user_branch($request);
        $subofbranch = $SqlModel->gb_user_subofbranch($request);

        $results = $SqlModel->proc_get_data('CALL gb_get_combo(?,?,?)', array($id,$branch, $subofbranch));
        
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function comboByBranch(Request $request,$status)
    {
        $SqlModel = new SqlModel();
        $gb_user_branch = $SqlModel->gb_user_branch($request);
        $results = $SqlModel->proc_get_data('CALL gb_get_combo(?,?,?)', array($status,$gb_user_branch,''));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

}
