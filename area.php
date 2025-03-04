<?php
class Cricle_area{
    public function radius($r){
        $pi =3.14;
        $area = $pi * $r * $r;
        echo "Area Of Cricle : ".$area;
    }
}
    if(isset($_REQUEST['submit']))
    {
        $r=($_REQUEST['rad']);
        $obj = new Cricle_area();
        $obj->radius($r);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form method="post">
        <table class="border 1 solid black" >
            <tr>
                <th>Radius</th>
                <th>
                    <input type="number" name="rad" />
                </th>
            </tr>
            <tr >
                <td class="left">
                    <!-- <input type="submit" name="submit" value="click"/> -->
                     <button type="submit" name="submit">Click Me</button>
                </td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>