<?php
interface i1{
    public function method1();
}
interface i2{
    public function method2();
}

class findArea implements i1,i2
{
    public $h;
    public $w;
    public $area;

    public function method1(){
        $this->h = $_REQUEST['height'];
        $this->w = $_REQUEST['width'];
    }
    public function method2(){
        $this->area = $this->h * $this->w;
        echo " Area of ReactAngle : ".$this->area;
    }
}
if(isset($_REQUEST['submit'])){
    $obj = new findArea();
    $obj->method1();
    $obj->method2();

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 Inheritance</title>
</head>
<style>
    table,
    td {
        border: 1px solid black;
    }
    .btn{
        align-items: center;
        text-align: center;
        padding: 4px;
    }
</style>

<body>
    <div>
        <form method="post">
            <table>
                <tr>
                    <td>Enter Height</td>
                    <td>
                        <input type="number" name="height" />
                    </td>
                </tr>
                <tr>
                    <td>Enter Width</td>
                    <td>
                        <input type="number" name="width" />
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="btn" > <button name="submit" type="submit">Click</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>