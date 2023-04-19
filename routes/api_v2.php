<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Admin\V1\MenuController;
use App\Http\Controllers\API\Admin\V1\UserinfoController;
use App\Http\Controllers\API\Products\V1\ProductController;
use App\Http\Controllers\Auth\LoginController;

Route::prefix('settingssss')->middleware('auth:api')->group(function () {
    Route::get('getmenu', [MenuController::class, 'index']);
    Route::get('main_menu', [MenuController::class, 'get_main_menu']);
    Route::get('get_left_menu', [MenuController::class, 'get_left_menu']);
    // POST
    Route::post('create_left_menu', [MenuController::class, 'create_left_menu']);
});
 
