<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .from{
            border: 1px solid black;
        }
    </style>
    <script type="text/javascript" language="javascript">
       function chekusername(){
        if(document.frm.uname.value == ""){
            alert("Username Does not Empty")
            return false;
        }
       }
       function chekpass(){
        if(document.frm.pass.value == ""){
            alert("Password Does not Empty")
            return false;

        }
        if(document.frm.pass.value.lenght<3 || document.frm.pass.value.lenght>8){
            alert("Password Shoud at list 3 charecter")
            return false;

        }

       }
       function chekgender(){
        if((document.frm.gender[0].checked ==false) &&
        (document.frm.gender[1].checked == false)
    ){
        alert("please choose your gender")
    }

        
    }

    </script>
</head>

<body>
    <div class="from">
        <form method="post" enctype="multipart/form-data" name="frm">
            <table>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="uname" onblur="chekusername();" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="pass" onblur="chekpass();" />
                    </td>
                </tr>
                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="radio" name="gender" onblur="chekgender();" />Male
                        <input type="radio" name="gender" onblur="chekgender();" />Female

                    </td>
                </tr>
                <tr>
                    <td>
                        Hobby
                    </td>
                    <td>
                        <input type="checkbox" name="chk" onblur="chekhobby();" />Read
                        <input type="checkbox" name="chk" onblur="chekhobby();" />Play

                    </td>
                </tr>
                <tr>

                    <td>
                        Select
                    </td>
                    <td>
                        <label for="country">Choose a country:</label>
                        <select name="country" id="country">
                            <option value="india" name="con">India</option>
                            <option value="us" name="con">US</option>
                            <option value="uk" name="con">UK</option>
                            <option value="russia" name="con">Russia</option>
                        </select>
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