<?php
class getdata
{
    public $h;
    public $b;
    public function method1()
    {
        $this->h = $_REQUEST['height'];
        $this->b = $_REQUEST['base'];
    }
}
class findarea extends getdata
{
    public $area;
    public function method2()
    {
        $this->area = ($this->h * $this->b) / 2;
        echo "Area of Triangle : " . $this->area;
    }
}
if (isset($_REQUEST['submit'])) {
    $obj = new findarea();
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
                    <td>Enter Base</td>
                    <td>
                        <input type="number" name="base" />
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