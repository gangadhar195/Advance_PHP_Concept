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

        table {
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

        .output {
            background-color: black;
            color: yellow;
        }
    </style>
</head>

<body>
    <div class="form">
        <form>
            <table>
                <tr>
                    <td>
                        Enter No 1 :
                    </td>
                    <td>
                        <input type="text" name="n1" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Enter No 2 :
                    </td>
                    <td>
                        <input type="text" name="n2" />
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
                $n1 = $_REQUEST['n1'];
                $n2 = $_REQUEST['n2'];

                
            ?>
        </form>
    </div>
</body>

</html>