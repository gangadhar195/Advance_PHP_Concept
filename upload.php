<?php
if(isset($_REQUEST['submit'])) {

    if($_FILES['file']['type'] == 'image/jpeg'){

        move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$_FILES['file']['name']);
        echo"Sucessfull upload";
    }
    else{
        echo"Only jpeg file to Upload";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Upload File</title>
</head>
<body>
    <div class="file">
        <form method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td><label>Select File</label></td>
                    <td><input type="file" name="file" /></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"/></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
