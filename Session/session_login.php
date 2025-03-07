<?php
session_start();

if(isset($_REQUEST['submit']))
{

    if($_REQUEST['uname']=="raj" && $_REQUEST['upass']=="r1234")
    {
        $_SESSION['user'] = $_REQUEST['uname'];
        header("location:welcome.php");
    }
    else{
        echo"Invalid Username and Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>amazon</title>
    <style>
        table ,td{
            border: 1px solid black;
        }
        .btn{
            text-align: center;
            padding: 5px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="form">
            <form>
                
                <table>
                    <tr>
                        <td class="btn" colspan="2">
                            <h2>Login Form</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username : 
                        </td>
                        <td>
                            <input type="text" name="uname"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password : 
                        </td>
                        <td>
                            <input type="password" name="upass"/>
                        </td>
                    </tr>
                    <tr>
                        <td class="btn" colspan="2">
                            <input type="submit" name="submit" value="Submit"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>