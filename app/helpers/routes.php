<?php

function buildPrefix(string $moduleName , string $type='admin'){
    return config($moduleName.'.prefix.'.$type ,config('module.prefix.'.$type)).'/'.config($moduleName.'.module_name');
}

function buildControllerNamespace(string $moduleName){
    return ucfirst($moduleName).'\Http\Controllers';
}

function viewRoute(string $fileName , string $folderName = NULL){
    if($folderName == NULL){
        return 'admin::admin.'.$fileName;
    }
    return 'admin::admin.'.$folderName.'.'.$fileName;
}

function sourceImageRoute(string $fileName , string $folderName = NULL){
    return 'uploads/'.$folderName.'source/'.$fileName;
}

function resize200ImageRoute(string $fileName , string $folderName = NULL){
    return 'uploads/'.$folderName.'resize200/'.$fileName;
}

function resize800ImageRoute(string $fileName , string $folderName = NULL){
    return 'uploads/'.$folderName.'resize800/'.$fileName;
}