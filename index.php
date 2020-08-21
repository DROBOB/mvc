<?php
////mvc 架构 困难
//// model 模型  view 视图 controller 控制器
//define("ENTRY",true);
////php 大名鼎鼎的框架 thinkphp框架
//$action=isset($_GET["action"])?$_GET["action"]:"";
//if($action) {
//    if (is_file($action.".php")) {
//        include_once $action.".php";
//
//
//    }else{
//        echo "page not exites";
//    }}else{
//    echo "first page";
//}
header();
//用来记录一个口令
define("MVC",true);
//应用文件夹
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);



require_once "libs/start.php";


//echo __DIR__;获取当前程序运行的目录
//echo __FILE__;获取当前运行的程序文件




