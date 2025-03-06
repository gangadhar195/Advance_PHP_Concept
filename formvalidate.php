

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .form{
        display: flex;
        align-items: center;
        justify-content: center;
        
       }
        .main{
            margin-top: 30px;
            border: 1px solid black;
        background-color: black;
        color:white;
        padding: 20px;
        }
        .btn{
            align-items: center;
            text-align: center;
            padding: 4px;
        }
    </style>
    <script type="text/javascript" language="javascript">
       function chekusername(){
        if(document.frm.uname.value == ""){
            alert("Username Does not Empty");
            return false;
        }
       }
       function chekpass(){
        if(document.frm.pass.value == ""){
            alert("Password Does not Empty");
            return false;

        }
        if(document.frm.pass.value.length<3 || document.frm.pass.value.length>8){
            alert("Password Shoud at list 3 charecter");
            return false;

        }

       }
       function chekgender(){
        if((document.frm.gender[0].checked ==false) &&
        (document.frm.gender[1].checked == false)
    ){
        alert("please choose your gender");
        return false;
    }

        
    }
    function chekhobby(){
        if((document.frm.chk[0].checked == false) &&
        (document.frm.chk[1].checked == false)){
            alert("please choose your hobby");
            return false;
        }
    }

    function checkcountry(){
        if(document.frm.country.selectIndex==0){
            alert("please select country");
            return false;
        }
    }

    </script>
</head>

<body>
    <div class="form">
        <form method="post" enctype="multipart/form-data" name="frm">
            <table class="main">
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
                        <select name="country" id="country" onblur="checkcountry();">
                            <option value="india" name="con">India</option>
                            <option value="us" name="con">US</option>
                            <option value="uk" name="con">UK</option>
                            <option value="russia" name="con">Russia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="btn" colspan="2">
                        <input  type="submit" name="submit" value="Submit"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>