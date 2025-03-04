<?php
abstract class definemethod{
    abstract public function method1();
    abstract public function method2();
}
class evenodd extends definemethod
{
    public $n;
    public function method1(){
        $this->n = $_REQUEST['n'];

    }
    public function method2(){
        if($this->n%2==0){

            echo "Even No : ".$this->n;
        }
     else{
            echo "Odd No : ".$this->n;
        }
    }
}
if(isset($_REQUEST['submit'])){
    $obj = new evenodd();
    $obj->method1();
    $obj->method2();
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
                <tr><td>Enter No : </td>
                <td><input type="text" name="n"/></td>
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