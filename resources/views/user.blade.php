<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pdf des utisateurs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>Laravel 10 Generate Pdf -Example coding with Franck</p>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{  $user->name}}</td>
                    <td>{{ $user->email}}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
    
</body>
</html>