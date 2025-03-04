<?php
class demo{
    public $pub = "Public<br>";
    private $pri = "Private<br>";
    protected $pro = "Protected";
    public function display(){
        echo $this->pub;
        echo $this->pri;
        echo $this->pro;

    }
}
$obj = new demo;
$obj->display();
?>