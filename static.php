<?php
class a{
    static $my="hello";
    public function display()
    {
        return self::$my;
    }
}
class b extends a
{
     function sencond(){
        return parent::$my;
    }
}
echo a::$my;
echo "<br>";
echo b::$my;
?>