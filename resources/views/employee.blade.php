<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
    <h3>That was how to passing data from controller to view</h3>
    <br>
    
    <!-- Passing data -->
    <h2>Name Employee = {{ $jeneng }}</h2>
    <ul> JOB 
        @foreach($jobdesk as $j)
        <li>{{$j}}</li>
        @endforeach
    </ul>
</body>
</html>