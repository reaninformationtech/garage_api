<?php

namespace App\Http\Controllers\api\pos;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\API\SqlModel;
class PurchaseOrderController extends BaseController
{
    //
    protected $SqlModel;
    public function create_po(Request $request)
    {
        $SqlModel = new SqlModel();
        $gb_user_name=$SqlModel->gb_user_email($request);
        $gb_user_branch=$SqlModel->gb_user_branch($request);

        $arr=array(
            $request->status,
            $request->pur_code,
            $gb_user_branch,
            $request->sup_code,
            $request->invoice,
            $request->remark,
            $gb_user_name);

        $results = $SqlModel->proc_get_data('CALL pos_register_po(?,?,?,?,?,?,?)', $arr);
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function create_po_detail(Request $request)
    {
        $SqlModel = new SqlModel();
        $gb_user_name=$SqlModel->gb_user_email($request);
        $gb_user_branch=$SqlModel->gb_user_branch($request);
        $arr=array(
            $request->status,
            $request->pur_code,
            $gb_user_branch,
            $request->sup_code,
            $request->invoice,
            $request->remark,
            $gb_user_name);

        $results = $SqlModel->proc_get_data('CALL pos_register_po(?,?,?,?,?,?,?)', $arr);
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function una_po_list(Request $request){

        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $arr=array('una_po_list', $gb_user_branch,'');
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)',$arr);

        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function una_po_by_id( Request $request,$id )
    {
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);
        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)', array('una_po_by_id',$gb_user_branch,$id));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function search_items( Request $request,$id )
    {

        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_branch($request);

        $results = $SqlModel->proc_get_data('CALL pos_sql_get(?,?,?)', array('search_items',$gb_user_branch,$id));
        $notices = $SqlModel->arrayPaginator($results, $request, $SqlModel->row_number());

        return $this->sendResponse($notices, 'Userinfo retrieved successfully.');
    }


}
