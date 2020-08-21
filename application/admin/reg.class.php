<?php
class reg{
    function add(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setTemplateDir(COMPILE_PATH);

        $smarty->display("admin/reg.html");


    }
    function addUser(){
        $uname=$_POST["uname"];
        $pass=$_POST["pass"];
        $pass1=$_POST["pass1"];
        if ($pass!==$pass1){
            echo "密码不一致";
            return;

        }
        $db=@new mysqli("localhost","root","root","wui2006","3306");
      if(mysqli_connect_error()){
          die("数据库连接错误");
      }

      $db->query("set names utf8");

      $db->query("insert into mvc_user (uname,pass) VALUES ('$uname','$pass')");

      if ($db->num_row>0){

      };
    }


}