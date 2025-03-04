<?php

class a{
    public function display(){
        echo"Example of ...";
    }
}
class b extends a
{
    public function child(){
        echo"Inheritance";
    }
}
$obj = new b();
$obj->display();
$obj->child();
?>