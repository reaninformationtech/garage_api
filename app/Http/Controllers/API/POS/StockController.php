<?php

namespace App\Http\Controllers\API\POS;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\API\SqlModel;

class StockController extends BaseController
{
    //
    protected $SqlModel;

    public function create_stock(Request $request)
    {
        $uniqid=uniqid();
        $SqlModel = new SqlModel();
        $gb_user_name=$SqlModel->gb_user_email($request);
        $gb_user_branch=$SqlModel->gb_user_branch($request);

        $arr=array(
            $request->status, 
            $request->stc_code, 
            $gb_user_branch,
            $request->stc_name, 
            $request->comments, 
            $request->active, 
            $gb_user_name);
                    
        $SqlModel->his_Activity('0',$arr,$uniqid);
        $results = $SqlModel->proc_get_data('CALL pos_register_stock(?,?,?,?,?,?,?)', $arr);
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function getStock(Request $request){
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $arr=array('getstock', $gb_user_branch,'');
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)',$arr);

        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function getStock_byId( Request $request,$id )
    {
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)', array('getstock_by_id',$gb_user_branch,$id));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    } 

}
