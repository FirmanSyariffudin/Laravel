<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
    <h3>Input data</h3>
    <br>
    
    <!-- form input data -->
    <form action="/form/progress" method="post">
        <input type="hidden" name="_token" value= "<?php echo csrf_token() ?>" >

        Name: 
        <input type="text" name="name" ><br>
        Address:
        <input type="text" name="address" ><br>
        <input type="submit" name="submit" value="Save">
    </form>
</body>
</html>