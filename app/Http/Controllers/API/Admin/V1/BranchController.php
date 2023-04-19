<?php

namespace App\Http\Controllers\API\Admin\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\API\SqlModel;

class BranchController extends BaseController
{
    //
    protected $SqlModel;
    public function create_branch( Request $request )
    {
        $SqlModel = new SqlModel();
        $subofbranch= $SqlModel->gb_user_subofbranch($request);
        $gb_user_email= $SqlModel->gb_user_email($request);
        $gb_user_system= $SqlModel->gb_user_system($request);

        $results = $SqlModel->proc_get_data('CALL proc_add_branch(?,?,?,?,?,?,?,?,?,?,?,?)', 
                            array(
                                $request->status, 
                                $request->branch_code, 
                                $subofbranch, 
                                $request->branch_name, 
                                $request->short_name, 
                                $request->slogan, 
                                $request->phone, 
                                $request->address, 
                                $gb_user_system,
                                $request->comments,
                                $request->active,
                                $gb_user_email
                            ));
        return $this->sendResponse($results, 'Branch info retrieved successfully.');
    }

    public function all_branch( Request $request )
    {
        $SqlModel = new SqlModel();
        $subofbranch= $SqlModel->gb_user_subofbranch($request);
        $results = $SqlModel->proc_get_data('CALL gb_sql_get(?,?,?)', array('all_branch',$subofbranch,''));
        return $this->sendResponse($results, 'Branch info retrieved successfully.');
    }

    public function get_branch_byId( Request $request,$id )
    {
        $SqlModel = new SqlModel();
        $subofbranch= $SqlModel->gb_user_subofbranch($request);
        $results = $SqlModel->proc_get_data('CALL gb_sql_get(?,?,?)', array('get_branch',$subofbranch,$id));

        return $this->sendResponse($results, 'Branch info retrieved successfully.');
    }

}
