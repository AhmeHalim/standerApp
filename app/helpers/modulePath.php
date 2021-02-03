<?php

function getModuleName(string $moduleName){
    return app_path('modules'.DS().$moduleName.DS());
}

function loadModuleConfigFile(string $fileName , string $moduleName){
    return getModuleName($moduleName).'config'.DS().$fileName.'.php';
}

function loadModuleRoutes(string $fileName , string $moduleName){
    return getModuleName($moduleName).'routes'.DS().$fileName.'.php';
}

function loadModuleViews(string $moduleName){
    return getModuleName($moduleName).'resources'.DS().'views';
}

function loadModuleLangs(string $moduleName){
    return getModuleName($moduleName).'resources'.DS().'lang';
}

function loadModuleMigrations(string $moduleName){
    return getModuleName($moduleName).'database'.DS().'migrations';
}

function DS(){
    return DIRECTORY_SEPARATOR ;
}