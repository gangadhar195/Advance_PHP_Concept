<?php
class a{
    public function __set($data,$value){
        echo "Data  is : ".$data."<br>";
        echo "Value  is : ".$value;

    }
}

$obj= new a();
$obj->x=40;
?>