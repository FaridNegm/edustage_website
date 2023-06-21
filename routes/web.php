<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/','namespace' => 'front'], function(){
    Route::get('/', function () {
        return 'welcome front';
    });    
});

