<?php
if(isset($_REQUEST['submit']))
{
    $n = $_REQUEST['n'];
    $fact = 1;
    for($i = 2;$i<=$n;$i++){
        $fact *= $i; 
    }
    echo "Factorial of give ".$n." is : ".$fact;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Factorial No </title>
    <style>
        table , td{
            border: 1px solid black;
        }
        .btn{
            align-items: center;
            text-align: center;
            padding: 4px;
        }
    </style>
</head>
<body>
    <div class="form">
        <form> 
            <table>
                <tr>
                    <td>
                        Enter No :
                    </td>
                    <td>
                        <input type="text" name="n" />
                    </td>
                </tr>
                <tr>
                    <td class="btn" colspan="2">
                        <input type="submit" name="submit" value="submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>