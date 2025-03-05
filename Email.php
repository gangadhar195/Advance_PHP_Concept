<?php
if(isset($_REQUEST['submit'])){
    $t = $_REQUEST['email'];
    $s = $_REQUEST['sub'];
    $m = $_REQUEST['msg'];
    $f = $_FILES['file']['name'];
    mail($t,$s,$m,$f);
    echo"Mail send Sucessfully";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Send Email</title>
    <style>
        .email{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="email">
        <form method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        <label>Email</label>
                        <input type="email" name="email"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Subject</label>
                        <input type="text" name="sub"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Messages</label>
                        <input type="text" name="msg"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Attachment</label>
                        <input type="file" name="file"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>