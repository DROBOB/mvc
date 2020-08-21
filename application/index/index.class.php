<?php

if(!defined("MVC")){
    die("非法侵入");
}

class index extends main{
    function int(){

//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);


        //php操 作数据库

//      $db=@new mysqli("localhost","root","root","wui2006","3306");
//      if(mysqli_connect_error()){
//          die("数据库连接错误");
//      }

//      $db->query("set names utf8");

      $result=$db->query("select * from demo");

//      $result->fetch_assoc();关联数据

//        $result->fetch_array();

//      $data=array();

//    while ($row=$result->fetch_assoc()){
//        $data[]=($row);
//    }




//        $smarty->assign("data",$data);
//        $smarty->display("index.html");

    }
    function del(){

    }
}