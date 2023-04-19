<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\V1\MenuController;
use App\Http\Controllers\API\Admin\V1\UserinfoController;
use App\Http\Controllers\API\Admin\V1\BranchController;
use App\Http\Controllers\API\POS\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\API\Global\ComboController;
use App\Http\Controllers\API\Exists\CheckingController;
use App\Http\Controllers\API\POS\CustomerController;
use App\Http\Controllers\api\pos\PosController;
use App\Http\Controllers\api\pos\PurchaseOrderController;
use App\Http\Controllers\API\POS\StockController;
use App\Http\Controllers\API\POS\SupplyController;

Route::post('login', [LoginController::class, 'login']);
Route::post('userlogin', [LoginController::class, 'userlogin']);
Route::post('refreshtoken', [LoginController::class, 'refresh']);

Route::prefix('gb')->middleware('auth:api')->group(function () {
    Route::get('combo/{id}', [ComboController::class, 'combo']);
    Route::get('combo_sys/{id}', [ComboController::class, 'combo_sys']);
    Route::get('combo_branch/{id}', [ComboController::class, 'combo_branch']);
    Route::any('ch_user_email', [CheckingController::class, 'ch_user_email']);
    Route::get('comboByBranch/{id}', [ComboController::class, 'comboByBranch']);
});

Route::prefix('admin')->middleware('auth:api')->group(function () {
    Route::resource('get-product', ProductController::class);
    Route::get('alluser', [UserinfoController::class, 'index']);
    Route::get('auth', [UserinfoController::class, 'auth']);
});

Route::prefix('setting')->middleware('auth:api')->group(function () {
    Route::get('getmenu', [MenuController::class, 'index']);
    Route::get('get_left_menu', [MenuController::class, 'get_left_menu']);
    Route::get('get_left_menu_byId/{id}', [MenuController::class, 'get_left_menu_byId']);

    // POST
    Route::post('create_left_menu', [MenuController::class, 'create_left_menu']);

    // Branch
    Route::post('create_branch', [BranchController::class, 'create_branch']);
    Route::get('getbranch', [BranchController::class, 'all_branch']);
    Route::get('getbranch_byId/{id}', [BranchController::class, 'get_branch_byId']);

    // Get Users
    Route::get('getuser', [UserinfoController::class, 'getUsers']);


    // Create user
    Route::post('create_user', [UserinfoController::class, 'create_user']);
    Route::get('get_user_byId/{id}', [UserinfoController::class, 'get_user_byId']);

});

Route::prefix('pos')->middleware('auth:api')->group(function () {
    Route::get('combo/{id}', [PosController::class, 'pos_combo']);


    Route::post('create_stock', [StockController::class, 'create_stock']);
    Route::get('getStock', [StockController::class, 'getStock']);
    Route::get('getStock_byId/{id}', [StockController::class, 'getStock_byId']);

    // Register product
    Route::post('create_product', [ProductController::class, 'create_product']);
    Route::get('getProduct', [ProductController::class, 'getProduct']);
    Route::get('Product_byId/{id}', [ProductController::class, 'Product_byId']);

    // Register Customer

    Route::post('create_customer', [CustomerController::class, 'create_customer']);
    Route::get('getCustomer', [CustomerController::class, 'getCustomer']);
    Route::get('Customer_byId/{id}', [CustomerController::class, 'Customer_byId']);


    // Register Supply

    Route::post('create_supply', [SupplyController::class, 'create_supply']);
    Route::get('getSupply', [SupplyController::class, 'getSupply']);
    Route::get('Supply_byId/{id}', [SupplyController::class, 'Supply_byId']);

    // Register PO
    Route::post('create_po', [PurchaseOrderController::class, 'create_po']);
    Route::get('una_po_list', [PurchaseOrderController::class, 'una_po_list']);
    Route::get('una_po_by_id/{id}', [PurchaseOrderController::class, 'una_po_by_id']);

    Route::get('search_items/{id}', [PurchaseOrderController::class, 'search_items']);

});
