<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Factorial and Fibonacci Program </title>
    <style>
        table,
        td {
            border: 1px solid black;
        }
        table{
            margin-bottom: 20px;
        }

        .btn {
            align-items: center;
            text-align: center;
            padding: 4px;
        }

        .form {
            display: flex;
            justify-content: center;
            align-items: center;
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
                <strong>
                    <?php
                  echo "Factorial of No " . $n . " is : " . $fact . "<br>";
                    
                    ?>
                </strong>
                <?php
                $n1 = 0;
                $n2 = 1;
                echo "Fibonacci Series No " . $n . " : ";
                for ($i = 0; $i < $n; $i++) {
                    echo " " . $n1;
                    $n3 = $n1 + $n2;
                    $n1 = $n2;
                    $n2 = $n3;
                }
            }
            ?>
        </form>
    </div>
</body>

</html>