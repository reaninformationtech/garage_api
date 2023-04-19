<?php

namespace App\Models\API;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LogActivity;

class SqlModel extends Model
{
    use HasFactory, Notifiable;
    protected $LogActivity;

    public function gb_user_id(Request $request)
    {
        $userinfo = Auth::user();
        return  $userinfo['id'];
    }

    public function gb_user_name(Request $request)
    {
        $userinfo = Auth::user();
        return  $userinfo['name'];
    }

    public function gb_user_email(Request $request)
    {
        $userinfo = Auth::user();
        return  $userinfo['email'];
    }

    public function gb_user_branch(Request $request)
    {
        $userinfo = Auth::user();
        $user = DB::table('users')->whereRaw('id='.$userinfo['id'])->get();
        return  $user[0]->branch_code;
    }

    public function gb_user_subofbranch(Request $request)
    {
        $gb_user_branch=$this->gb_user_branch($request);
        $data = DB::table('branches')->whereRaw('branch_code='.$gb_user_branch)->get();
        return  $data[0]->subofbranch;
    }

    public function gb_user_system(Request $request)
    {
        $gb_user_branch=$this->gb_user_branch($request);
        $data = DB::table('branches')->whereRaw('branch_code='.$gb_user_branch)->get();
        return  $data[0]->system_id;
    }

    public function arr_str($arr){
        $str='History ';
        foreach($arr as $key => $value)
        {
            if (empty($value)){
                $value=' Empty';
            }
            $str=$str.(string)$key.'=>'.$value.',';
        }
        return $str;
    }

    public function arr_str_input($arr){
        $str='(';
        foreach($arr as $key => $value)
        {
            $str=$str.$value.',';
        }
        return $str.')';
    }

    public function fun_replace($str, $val)
    {
        $v_str=str_replace($val,'',$str);;
        return  $v_str;
    }

    public function str_re($str)
    {
        $v_str=$this->fun_replace($str,'"');
        $v_str=$this->fun_replace($v_str,']');
        $v_str=$this->fun_replace($v_str,'[');
        $v_str=$this->fun_replace($v_str,',');
        $v_str=$this->fun_replace($v_str,'%');
        return  $v_str;
    }
    public function row_number()
    {
        return 10;
    }

    public function proc_get_data($procedure,array $sql)
    {
        $data= DB::select($procedure, $sql);
        return $data;
    }

    public function get_currentRouteName()
    {
        Route::currentRouteName();
        return  Route::currentRouteName();
    }

    public function arrayPaginator($array, $request, $perPage=3)
    {
        $page = request('page', 1);
        //$perPage = 3;
        $offset = ($page * $perPage) - $perPage;
        return new LengthAwarePaginator(
            array_slice($array, $offset, $perPage, true),
            count($array),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );
    }

    public function arrayPaginator_url($array,$url, $request, $perPage=3)
    {
        $page = request('page', 1);
        $offset = ($page * $perPage) - $perPage;
        return new LengthAwarePaginator(
            array_slice($array, $offset, $perPage, true),
            count($array),
            $perPage,
            $page,
            ['path' => $url, 'query' => $request->query()]
        );
    }


    public function his_Activity($status,$arr,$uniqid){

        $LogActivity= new  LogActivity();
        $str = $this->arr_str($arr);

        try {
            $LogActivity->write_log(['subject'=>'Step-'.$status.'-'.$str,'url'=>$uniqid,'ip'=>'']);
        } catch (\PDOException $e) {
            $LogActivity->write_log(['subject'=>$e->errorInfo[2],'url'=>$uniqid,'agent'=>'catch arror ','ip'=>'']);
        }
    }

}
