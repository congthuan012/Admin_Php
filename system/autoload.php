<?php 
include 'system/config/config.php';
include 'system/libs/functions.php';
//dung co che auto load cua php de load
//dang ky su kien aotoload
spl_autoload_register(function($classname){
    //tien hanh xu ly nhung thu vien CLASS trong he thong
    $pathsystem = 'system/db/'.$classname.'.php';
    if(file_exists($pathsystem))
        include $pathsystem;
    $pathlibs = 'system/libs/'.$classname.'.php';
    if(file_exists($pathlibs))
        include $pathlibs;
    $pathcontroller = 'controllers/'.$classname.'.php';
    if(file_exists($pathcontroller))
        include $pathcontroller;
    $pathmmodel = 'models/'.$classname.'.php';
    if(file_exists($pathmmodel))
        include $pathmmodel;
});
