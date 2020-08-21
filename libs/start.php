<?php
if (defined(MVC)){
    die("访问路径不合法");
}
//服务器所在的根路径
define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"]);
//入口文件的路径
define("ENTRY_PATH",ROOT_PATH.$_SERVER["SCRIPT_NAME"]);
//框架所在的路径
define("MAIN_PATH",dirname(ENTRY_PATH).DIRECTORY_SEPARATOR);
//核心库所在的路径
define("LIBS_PATH",MAIN_PATH."libs".DIRECTORY_SEPARATOR);
//插件所在的路径
define("PLU_PATH",MAIN_PATH."plugins".DIRECTORY_SEPARATOR);
//模板所在路径
define ("TPL_PATH",APP_NAME.DIRECTORY_SEPARATOR."template".DIRECTORY_SEPARATOR);
//编译文件所在目录
define("COMPILE_PATH",APP_NAME."compile".DIRECTORY_SEPARATOR);
//缓存文件所在目录
define("CACHE_PATH",APP_NAME."cache".DIRECTORY_SEPARATOR);

//以上定义的都是各种文件在本地的路径

//定义smarty的路径
define("SMART_PATH",APP_NAME."smarty".DIRECTORY_SEPARATOR);

define("FONT_PATH",ADD_NAME."static/font/");


//以下定义通过http协议访问的路径

define("HOST_ADD","http://".$_SERVER["HTTP_HOST"]);

define("ENTRY_ADD",HOST_ADD.$_SERVER["SCRIPT_NAME"]);

define("MAIN_PATH",dirname(HOST_ADD.$_SERVER["SCRIPT_NAME"]).DIRECTORY_SEPARATOR);
define("APP_PATH",MAIN_PATH.APP_DIR_NAME.DIRECTORY_SEPARATOR);



//静态文件的地址
define("STATIC_ADD",APP_ADD."static".DIRECTORY_SEPARATOR);
//CSS地址
define("CSS_ADD",STATIC_ADD."css".DIRECTORY_SEPARATOR);
//js地址
define("JS_ADD",STATIC_ADD."js".DIRECTORY_SEPARATOR);
//img地址
define("IMG_ADD",STATIC_ADD."img".DIRECTORY_SEPARATOR);
//font地址
define("FONT_ADD",STATIC_ADD."font".DIRECTORY_SEPARATOR);

//include_once LIBS_PATH."engin.class.php";
$config=include_once APP_NAME."config.php";
include_once LIBS_PATH."main.class.php";
include_once SMARTY_DIR."Smarty.class.php";
include_once LIBS_PATH."route.class.php";

function auto($classname){
    include_once LIBS_PATH.""
}
spl_autoload_register("auto");
$router=new \libs\route();
$router->run();




?>