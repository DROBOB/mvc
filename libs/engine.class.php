<?php
class engine{

    private $templateDir="template";
    private $compileDir="compile";

    function getDate($file){

        $destfile=$this->templateDir.DIRECTORY_SEPARATOR.$file;
        if(is_file($destfile)){
           $this->con=file_get_contents($destfile);

        }else{
            die("this templat not found");
        }


    }
    function compile($file){
       $con=$this->getDate($file);
       $reg="/\{}";
       preg_replace_callback($reg,function ($val){
           return '<?php echo '.$val[1].'?>';
       },$con);
    }
    function display($file){
        $this->compile();

    }
}

$en=new engine();