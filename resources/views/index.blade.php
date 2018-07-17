<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies</title>        
    </head>

    <body>       
      
    @foreach($movies as $movie)
      <br> <br> 
      <div>
         <h2><a href="/movies/ {{ $movie->id }}">{{$movie->title}}</a></h2>
        
      </div>      
      <!-- {{ $movie->producer }} <br>
      {{ $movie->year }} <br> -->
      {{ $movie->storyline }} <br>
 
    @endforeach
     
    </body>
</html>
