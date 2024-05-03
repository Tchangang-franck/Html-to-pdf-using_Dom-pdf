<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Laravel 9 Generate PDF Example</title>
</head>
<body>
    <h1 class="display-1" style="font-style:italic; font-size:30">{{ $title }}</h1>
    <p class="text-justify">Generated at {{ $date }}</p> 
    <p class="text-justify">Add some custom paragraph here</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>Thumnail</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $index=>$post )
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td><img src="{{ $post->thumbnail}}" alt="img" width="200px"></td>
                </tr>                
                <hr style="font-size: 40px ;backgroud-color:yellow">
            @endforeach
        </tbody>
    </table>
</body>
</html>