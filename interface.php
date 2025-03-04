<?php
interface h1{
    public function dis1();
}
interface h2{
    public function dis2();
}
class demo implements h1,h2{
    public function dis1(){
        echo "Method 1<br>";
    }
    public function dis2(){
        echo "Method 2";
    }
}

$obj=new demo();
$obj->dis1();
$obj->dis2();
?>