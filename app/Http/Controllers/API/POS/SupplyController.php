<?php

namespace App\Http\Controllers\API\POS;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\API\SqlModel;

class SupplyController extends BaseController
{
    //

    protected $SqlModel;
    public function create_supply(Request $request)
    {
        $uniqid=uniqid();
        $SqlModel = new SqlModel();
        $gb_user_name=$SqlModel->gb_user_email($request);
        $gb_user_branch=$SqlModel->gb_user_branch($request);

        $arr=array(
            $request->status, 
            $request->sup_code, 
            $gb_user_branch,
            $request->sup_name, 
            $request->website, 
            $request->phone, 
            $request->email, 
            $request->address_code, 
            $request->remark, 
            $request->active, 
            $gb_user_name);
                    
        $SqlModel->his_Activity('0',$arr,$uniqid);
        $results = $SqlModel->proc_get_data('CALL pos_register_supply(?,?,?,?,?,?,?,?,?,?,?)', $arr);
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function getSupply(Request $request){
        
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $arr=array('getsupply', $gb_user_branch,'');
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)',$arr);

        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function Supply_byId( Request $request,$id )
    {
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)', array('supply_by_id',$gb_user_branch,$id));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    } 

}
