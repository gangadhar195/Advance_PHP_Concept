<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratics

    </title>
</head>
<body>
    <div class="form">
        <form>
            <table>
                <tr>
                    <td>
                        Enter No for Factorial and Fibonacci :
                    </td>
                    <td>
                        <input type="text" name="n" />
                    </td>
                </tr>
                <tr>
                    <td class="btn" colspan="2">
                        <input type="submit" name="submit" value="submit" />
                    </td>
                </tr>
            </table>
            <?php
            if (isset($_REQUEST['submit'])) {
                $n = $_REQUEST['n'];
                $fact = 1;
                for ($i = 2; $i <= $n; $i++) {
                    $fact *= $i;
                }
            ?>
                <strong class="output">
                    <?php
                    echo "Factorial of No " . $n . " is : " . $fact . "<br>";
                    echo "Fibonacci Series No " . $n . " : ";

                    ?>
                </strong>
            <?php
                $n1 = 0;
                $n2 = 1;
                for ($i = 0; $i < $n; $i++) {
                    ?>
                    <strong class="output">
                    <?php
                    echo " " . $n1;
                    $n3 = $n1 + $n2;
                    $n1 = $n2;
                    $n2 = $n3;
                    ?>
                    
                    </strong>
                    <?php
                    
                }
            }
            ?>
        </form>
    </div>
</body>
</html>