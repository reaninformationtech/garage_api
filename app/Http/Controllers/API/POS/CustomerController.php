<?php

namespace App\Http\Controllers\API\POS;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\API\SqlModel;

class CustomerController extends BaseController
{
    //
    protected $SqlModel;

    public function create_customer(Request $request)
    {
        $uniqid=uniqid();
        $SqlModel = new SqlModel();
        $gb_user_name=$SqlModel->gb_user_email($request);
        $gb_user_branch=$SqlModel->gb_user_branch($request);

        $arr=array(
            $request->status, 
            $request->cus_code, 
            $gb_user_branch,
            $request->cus_name, 
            $request->gender, 
            $request->phone, 
            $request->email, 
            $request->address_code, 
            $request->remark, 
            $request->active, 
            $gb_user_name);
                    
        $results = $SqlModel->proc_get_data('CALL pos_register_customer(?,?,?,?,?,?,?,?,?,?,?)', $arr);
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function getCustomer(Request $request){
        
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $arr=array('getcustomer', $gb_user_branch,'');
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)',$arr);

        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function Customer_byId( Request $request,$id )
    {
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)', array('customer_by_id',$gb_user_branch,$id));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    } 
}
