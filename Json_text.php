<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Json Parse</title>
    
</head>
<body>
    <div class="data">
        <h2> Create object from Json String</h2>
        <div class="emp">
        <p id="demo">

        </p>
        </div>
    </div>
    <script>
        var text ='{"employees":['+
        '{"fname":"Raj","lname":"shet"},'+
        '{"fname":"Tajiro","lname":"Motona"},'+
        '{"fname":"Akara","lname":"Benta"}]}';

         obj = JSON.parse(text);
        document.getElementById('demo').innerHTML = 
        obj.employees[1].fname + " " + obj.employees[1].lname;
    </script>
</body>
</html>