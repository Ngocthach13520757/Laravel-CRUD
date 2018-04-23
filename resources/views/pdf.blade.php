<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Office</th>
        </tr>
        
        <tr>
            <td>{{$passport['id']}}</td>
            <td>{{$passport['name']}}</td>
            <td>{{$passport['email']}}</td>
            <td>{{$passport['number']}}</td>
            <td>{{$passport['office']}}</td>
        </tr>
       
    </table>
</body>
</html>