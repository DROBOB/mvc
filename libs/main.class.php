<?php
class main{
    function __construct()
    {
        global $config;
        $smarty=new Smarty();
        $templateDir=isset($config["smarty"]["templateDir"])?$config["smarty"]["templateDir"]:"template";
        $compileDir=isset($config["smarty"]["compileDir"])?$config["smarty"]["compileDir"]:"compile";
        $cacheDir=isset($config["smarty"]["cacheDir"])?$config["cacheDir"]["templateDir"]:"cache";
        $smarty->setTemplateDir($templateDir);
        $smarty->setTemplateDir($compileDir);
        $smarty->setCacheDir($compileDir);

        $this->smarty=$smarty;





        //数据库的配置
        $host=isset($config["database"]["host"])?$config["database"]["host"]:"localhost";
        $username=isset($config["database"]["username"])?$config["database"]["username"]:"root";
        $password=isset($config["database"]["password"])?$config["database"]["password"]:"";
        $dbname=isset($config["database"]["dbname"])?$config["database"]["dbname"]:"";
        $port=isset($config["database"]["port"])?$config["database"]["port"]:"3306";





       $db=new mysqli("$host,$username,$password,$dbname,$port");
       if ($db->connect_errno){
           echo "数据库连接出错";
       }




    }
}