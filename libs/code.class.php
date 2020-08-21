<?php
namespace libs;

class code{
    public $type = "png";
    public $width=160;
    public $height=50;
    private function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);


    }

    private function setColor(){
        $r=mt_rand(0,255);
        $g=mt_rand(0,255);
        $b=mt_rand(0,255);
        imagecolorallocate($this->image,$r,$g,$b);

    }
    private function getText(){

    }
    private function setText(){
        $str=$this->getText();
        for ($i=0;$i<$this->codelen;$i++){

        }
    }

    function out(){
        header("content-type:image/".$this->type);

        //1.创建画布

        $this->createCanvas();

        $outtype="image".$this->type;

        $outtype($this->image);

        imagedestroy($this->image);

    }


}

$code=new code();
$code->out();