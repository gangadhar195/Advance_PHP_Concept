<?php
class demo{
    const a = "Hello Gangdhar";
}
echo demo::a;
?>

<?php
class Parents{
   final public function dis1(){
        echo "Parent <br>";
    }
}
class child extends Parents{
    public function dis1(){
        echo "Child <br>";
    }
}
$obj = new child();
$obj->dis1();
?>