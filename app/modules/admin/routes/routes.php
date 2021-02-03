<?php

use Illuminate\Support\Facades\Route;

$moduleName = basename(dirname(__DIR__ ,1));
Route::namespace(buildControllerNamespace($moduleName))->group(function() use($moduleName){
    Route::prefix(buildPrefix('admin'))->group(function(){
        require 'web.php';
    });

    Route::prefix(buildPrefix('admin','api'))->namespace('Api')->group(function(){
        require 'api.php';
    });
    
});

