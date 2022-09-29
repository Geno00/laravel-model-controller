<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Movies</title>
</head>
<body>
    <h1>I Film</h1>
    <ul>
        @foreach ($movies as $movie)
            <li> 
                <h3>Titolo:</h3>{{$movie->title}}
                <h5>Titolo originale:</h5>{{$movie['original_title']}}
                <h5>Nazionalita':</h5>{{$movie['nationality']}}
                <h5>Data di uscita:</h5>{{$movie['date']}}
                <h5>Voto:</h5>{{$movie['vote']}}
            </li>
        @endforeach
        
    </ul>
</body>
</html>
