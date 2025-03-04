<?php
class a{
    public $name;
     function __construct()
    {
      echo"Construter<br>"; 
      $this->name="Vinu"; 
    }

 function __destruct()
    {
        echo"destructer".$this->name."<br>";
    }
}
$obj=new a();
// $obj->__construct();
// $obj->__destruct();
?>