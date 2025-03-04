<?php
class getdata{
    public $a;
    public $b;
    public $add;
    public function __construct()
    {
        $this->a= $_REQUEST['n1'];
    $this->b = $_REQUEST['n2'];
    }
    public function display()
    {
        $this->add = $this->a + $this->b;
        echo "Addition of ".$this->a." and ".$this->b." is : ".$this->add;
        
    }
    public function __destruct()
    {
        
    }
}

if(isset($_REQUEST['submit'])){
    $obj= new getdata();
    $obj->display();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract Class</title>
    <style>
        table ,td{
            border:1px solid black
        }
        .btn{
            align-items: center;
            text-align: center;
            padding: 4px;
        }

    </style>
</head>
<body>
    <div>
        <form method="post">
            <table>
                <tr><td>Enter No1 : </td>
                <td><input type="text" name="n1"/></td>
            </tr>
            <tr><td>Enter No2 : </td>
                <td><input type="text" name="n2"/></td>
            </tr>
            <tr>
                <td class="btn" colspan="2">
                    <input  type="submit" name="submit" value="Submit"/>
                </td>
            </tr>
            </table>
        </form>
    </div>
</body>
</html>