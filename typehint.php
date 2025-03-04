<?php
class test1{
    public $v ="this is test function";
}
 function display(test1 $v1){
    echo $v1->v;
}
display(new test1());
?>