<?php

namespace App\Http\Controllers\API\Admin\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Menu\MenuResource;
use App\Http\Resources\Menu\MenuCollection;
use App\Models\API\SqlModel;

class MenuController extends BaseController
{
    //
    protected $SqlModel;
    public function index(Request $request)
    {
        $SqlModel = new SqlModel();
        $gb_user_id=$SqlModel->gb_user_id($request);
        $menus = Menu::whereNull('parent_id')->where('active', '1') ->with('subMenu', function($q){ return $q->orderByRaw('ISNULL(ordering), ordering asc'); })->orderByRaw('ISNULL(ordering), ordering asc')->get();
        return $this->sendResponse(MenuResource::collection($menus), 'Userinfo retrieved successfully.');
    }
    
    public function get_main_menu(Request $request)
    {
        $SqlModel = new SqlModel();
        $results = $SqlModel->proc_get_data('CALL gb_get_combo(?,?,?)', array('main_menu','', ''));
        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function create_left_menu(Request $request)
    {
        $SqlModel = new SqlModel();
        $gb_user_name=$SqlModel->gb_user_email($request);

        $arr=array(
                    $request->status, 
                    $request->id, 
                    $request->parent_id, 
                    $request->icon, 
                    $request->page_name, 
                    $request->title, 
                    $request->active, 
                    $gb_user_name);
        
        $results = $SqlModel->proc_get_data('CALL proc_add_left_menu(?,?,?,?,?,?,?,?)', $arr);

        return $this->sendResponse($results, 'Userinfo retrieved successfully.');
    }

    public function get_left_menu(Request $request)
    {
        $SqlModel = new SqlModel();
        $results = $SqlModel->proc_get_data('CALL gb_sql_get(?,?,?)', 
                              array('left_menu_list','',''));

        return $this->sendResponse($results, 'Retrieved successfully.');
    }

    public function get_left_menu_byId( Request $request,$id )
    {
        $SqlModel = new SqlModel();
        $results = $SqlModel->proc_get_data('CALL gb_sql_get(?,?,?)', array('get_menu_by_id','',$id));

        return $this->sendResponse($results, 'Branch info retrieved successfully.');
    }

}
