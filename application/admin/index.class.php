<?php
if(!defined("MVC")){
    die("非法侵入");
}

class index{
    function int(){
//        echo "后台页面";

        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setTemplateDir(COMPILE_PATH);

        $smarty->display("login.html");
    }
    function login(){
      $uname=$_POST["uname"];
      $pass=$_POST["pass"];
//      echo "1";
        $db=@new mysqli("localhost","root","root","wui2006","3306");
        if(mysqli_connect_error()){
            die("数据库连接错误");
        }

        $db->query("set names utf8");
        $result=$db->query("select * from mvc_user where uname='$uname' and pass='$pass'");

        if ($result->num_rows<1){

            echo "没有相应的数据";

        }else{
            header("location:/index.php/admin/index/first");
        }


    }

}