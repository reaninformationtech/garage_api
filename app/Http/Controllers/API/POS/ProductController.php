<?php

namespace App\Http\Controllers\API\POS;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\API\SqlModel;
class ProductController extends BaseController
{
    //
    protected $SqlModel;
    public function create_product(Request $request)
    {
        $uniqid=uniqid();
        $SqlModel = new SqlModel();
        $gb_user_name=$SqlModel->gb_user_email($request);
        $gb_user_branch=$SqlModel->gb_user_branch($request);

        $arr=array(
            $request->status, 
            $request->pro_code, 
            $gb_user_branch,
            $request->pro_name, 
            $request->barcode, 
            $request->cost, 
            $request->unitprice, 
            $request->discount, 
            $request->qty_alert, 
            $request->lin_code, 
            $request->remark, 
            $request->active, 
            $gb_user_name);
                    
        $SqlModel->his_Activity('0',$arr,$uniqid);
        $results = $SqlModel->proc_get_data('CALL pos_register_product(?,?,?,?,?,?,?,?,?,?,?,?,?)', $arr);
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }
     public function getProduct(Request $request){
        
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $arr=array('getproduct', $gb_user_branch,'');
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)',$arr);
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');

    }

    public function Product_byId( Request $request,$id )
    {
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)', array('product_by_id',$gb_user_branch,$id));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
        
    } 
}
