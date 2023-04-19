<?php

namespace App\Http\Controllers\API\Exists;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\API\SqlModel;
use Illuminate\Support\Facades\Hash;
use App\Models\LogActivity;

class CheckingController extends BaseController
{
    protected $SqlModel;
    protected $LogActivity;
    public function ch_user_email(Request $request)
    {
         $SqlModel = new SqlModel();
         $LogActivity= new  LogActivity();
         $gb_user_branch= $SqlModel->gb_user_branch($request);
         
         $arr=array(
            $request->input('cmd'),
            $gb_user_branch,
            $request->input('email'),
            $request->input('id')
         );

        try {

            $uniqid=uniqid();
            $SqlModel->his_Activity('0',$arr,$uniqid);
            $results = $SqlModel->proc_get_data('CALL gb_sql_checking(?,?,?,?)',$arr);
            
            $arr = json_decode(json_encode($results), true);
            return $this->sendResponse($results, 'Data retrieved successfully.');
        
        } catch (\PDOException $e) {
            $LogActivity->write_log(['subject'=>'after excute procedure','url'=>$e->errorInfo[2]]);
            return $this->sendError($e->errorInfo[2], $e->errorInfo);
        }
    }
}
