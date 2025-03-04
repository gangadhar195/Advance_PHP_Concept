<?php
abstract class a{
      abstract  public function dis1();
      abstract  public function dis2();

}
class b extends a
 {
    public function dis1()
    {
        echo "function 1";
    }
    public function dis2()
    {
        echo "function 2";
    }

}
$obj = new b();
$obj->dis1();
$obj->dis2();

?>