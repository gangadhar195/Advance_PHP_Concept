<?php
    if(isset($_REQUEST['submit']))
    {
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <div class="main">
        <h1>Hello World Gangadhar</h1>
        <h2>DSA Questions</h2>
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

        </form>
    </div>
</body>
</html>