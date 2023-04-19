<?php

namespace App\Http\Controllers\API\Admin\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Resources\Admin\UserinfoResource;
use App\Http\Resources\Admin\AuthResource;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\API\SqlModel;
use Illuminate\Support\Facades\Hash;

class UserinfoController extends BaseController
{
    public function __construct() {
        $this->middleware('auth');
     }
     protected $SqlModel;
     protected $LogActivity;
     public function create_user( Request $request )
     {
        $uniqid=uniqid();


         $SqlModel = new SqlModel();
         $gb_user_email= $SqlModel->gb_user_email($request);
         $pwd = Hash::make($request->passWord);

         $arr=array(
                $request->status, 
                $request->id, 
                $request->branch_code, 
                $request->fullname, 
                $request->email, 
                $request->phone, 
                $pwd,
                $request->profile, 
                $request->active,
                $gb_user_email
         );


         try {
            
            // History 
            $SqlModel->his_Activity('0',$arr,$uniqid);
            $results = $SqlModel->proc_get_data('CALL proc_create_user(?,?,?,?,?,?,?,?,?,?)',$arr);

            return $this->sendResponse($results, 'Branch info retrieved successfully.');
        
        } catch (\PDOException $e) {
            $error_arr=array($e->errorInfo[2]);
            $SqlModel->his_Activity('Error Exception',$arr,'404');
            return $this->sendError($e->errorInfo[2], $e->errorInfo);

        }
     }

    public function index(Request $request){
        $userinfo=User::all();
        return $this->sendResponse(UserinfoResource::collection($userinfo), 'Userinfo retrieved successfully.');
    }

    public function getUsers(Request $request){
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_subofbranch($request);
        $arr=array('get_users', $gb_user_branch,'');
        $results = $SqlModel->proc_get_data('CALL gb_sql_get(?,?,?)',$arr);

        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }


    public function auth(Request $request){
        if (Auth::check()) {
            $userinfo = Auth::user();
            $user = DB::table('Users')->whereRaw('id='.$userinfo['id'])->get();
            return $this->sendResponse(AuthResource::collection($user), 'Userinfo retrieved successfully.');
        }
    }

    public function get_user_byId( Request $request,$id )
    {
        $SqlModel = new SqlModel();
        $gb_user_branch= $SqlModel->gb_user_subofbranch($request);
        $results = $SqlModel->proc_get_data('CALL gb_sql_get(?,?,?)', array('get_user_by_id',$gb_user_branch,$id));
        return $this->sendResponse($results, 'Branch info retrieved successfully.');
    }

}
