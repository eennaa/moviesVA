@extends('layouts.master')

@section('content')
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{ $movie->title }} </title>     
        
    </head>

    <body>
    
        <h2>{{ $movie->title }}</h2>
        <p>{{ $movie->genre }} </p>
        <p>{{ $movie->year }} </p>
        <p>{{ $movie->director }} </p>
        <p>{{ $movie->storyline }} </p>

    </body>
</html>
@endsection
