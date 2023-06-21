<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Back'], function(){
    // Start Auth Route
    Route::group(['prefix' => '/login'], function(){
        Route::get('/', function(){
            return view('back.auth.login');
        });
    });

    Route::group(['prefix' => '/forget_password'], function(){
        Route::get('/', function(){
            return view('back.auth.forget_password');
        });
    });
    
    Route::group(['prefix' => '/pos'], function(){
        Route::get('/', function(){
            return view('back/products/pos');
        });
    });
    // End Auth Route


    Route::get('/clear_cache', function() {
        Artisan::call('cache:clear');
        return "cleared cache";
    });
    


    //////////////////////////////////////////////////////////////////////////////// 
    // Admin Home Page 
    Route::group(['prefix' => '/'], function(){
        Route::get('/', function(){
            return view('back.welcome');
        });
    });
    
    // product-units Routes
    Route::group(['prefix' => 'product-units'] , function (){
        Route::get('/' , 'ProductUnitController@index');
        Route::get('create' , 'ProductUnitController@create');
        Route::get('/store' , 'ProductUnitController@store');
        Route::get('/edit/{id}' , 'ProductUnitController@edit');
        Route::post('/update/{id}' , 'ProductUnitController@update');
        Route::get('/destroy/{id}' , 'ProductUnitController@destroy');
        Route::post('/destroy_selected' , 'ProductUnitController@destroy_selected');

        Route::get('datatable_product_units' , 'ProductUnitController@datatable_product_units');
    });
        
    // roles_permissions Routes
    Route::group(['prefix' => 'roles_permissions'] , function (){
        Route::get('/' , 'RolesPermissionsController@index');
        Route::get('create' , 'RolesPermissionsController@create');
        Route::post('/store' , 'RolesPermissionsController@store');
        Route::get('/edit/{id}' , 'RolesPermissionsController@edit');
        Route::post('/update/{id}' , 'RolesPermissionsController@update');
        Route::get('/destroy/{id}' , 'RolesPermissionsController@destroy');
        Route::get('/destroy_selected' , 'RolesPermissionsController@destroy_selected');

        Route::get('datatable_roles_permissions' , 'RolesPermissionsController@datatable_roles_permissions');
    });

    // admins Routes
    Route::group(['prefix' => 'admins'] , function (){
        Route::get('/' , 'AdminController@index');
        Route::get('create' , 'AdminController@create');
        Route::post('/store' , 'AdminController@store');
        Route::get('/edit/{id}' , 'AdminController@edit');
        Route::get('/show/{id}' , 'AdminController@show');
        Route::get('/change_password/{id}' , 'AdminController@change_password');
        Route::post('/change_password/{id}' , 'AdminController@change_password_post');
        Route::post('/update/{id}' , 'AdminController@update');
        Route::get('/destroy/{id}' , 'AdminController@destroy');
        Route::get('/destroy_selected' , 'AdminController@destroy_selected');
        Route::get('datatable_admins' , 'AdminController@datatable_admins');
    });

    // about_acadmy Routes
    Route::group(['prefix' => 'about_acadmy'] , function (){
        Route::get('/' , 'AboutAcadmyController@index');
        Route::get('create' , 'AboutAcadmyController@create');
        Route::post('/store' , 'AboutAcadmyController@store');
        Route::get('/edit/{id}' , 'AboutAcadmyController@edit');
        Route::get('/show/{id}' , 'AboutAcadmyController@show');
        Route::get('/change_password/{id}' , 'AboutAcadmyController@change_password');
        Route::post('/change_password/{id}' , 'AboutAcadmyController@change_password_post');
        Route::post('/update/{id}' , 'AboutAcadmyController@update');
        Route::get('/destroy/{id}' , 'AboutAcadmyController@destroy');
        Route::get('/destroy_selected' , 'AboutAcadmyController@destroy_selected');
        Route::get('datatable_about_acadmy' , 'AboutAcadmyController@datatable_about_acadmy');
    });

    // table_prices Routes
    Route::group(['prefix' => 'table_prices'] , function (){
        Route::get('/' , 'TablePriceController@index');
        Route::get('create' , 'TablePriceController@create');
        Route::post('/store' , 'TablePriceController@store');
        Route::get('/edit/{id}' , 'TablePriceController@edit');
        Route::get('/show/{id}' , 'TablePriceController@show');
        Route::post('/update/{id}' , 'TablePriceController@update');
        Route::get('/destroy/{id}' , 'TablePriceController@destroy');
        Route::get('/destroy_selected' , 'TablePriceController@destroy_selected');
        
        Route::get('datatable_table_prices' , 'TablePriceController@datatable_table_prices');
    });
   
    // settings Routes
    Route::group(['prefix' => 'settings'] , function (){
        Route::get('/' , 'SettingController@index');
        Route::get('/show/{id}' , 'SettingController@show');
        Route::get('/edit/{id}' , 'SettingController@edit');
        Route::post('/update/{id}' , 'SettingController@update');
        Route::get('datatable_settings' , 'SettingController@datatable_settings');
    });

    // xxx Routes
    Route::group(['prefix' => 'xxx'] , function (){
        Route::get('/' , 'xxxController@index');
        Route::get('create' , 'xxxController@create');
        Route::post('/store' , 'xxxController@store');
        Route::get('/edit/{id}' , 'xxxController@edit');
        Route::post('/update/{id}' , 'xxxController@update');
        Route::get('/destroy/{id}' , 'xxxController@destroy');
        Route::get('/destroy_selected' , 'xxxController@destroy_selected');

        Route::get('datatable_xxx' , 'xxxController@datatable_xxx');
    });
});

