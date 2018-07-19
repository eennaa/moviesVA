@extends('layouts.master')


@section('content')
<form method="POST" action="/movies">
{{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" id="title">
    </div>

    
    <div class="form-group">
        <label for="title">Genre</label>
        <input name="genre" type="title" class="form-control" id="title">
    </div>

<div class="form-group">
        <label for="title">Year</label>
        <input name="year" type="integer" class="form-control" id="title">
    </div>

<div class="form-group">
        <label for="title">Director</label>
        <input name="director" type="title" class="form-control" id="title">
    </div>


    <div class="form-group">
      <label for="body">Storyline</label>
      <textarea name="storyline" class="form-control" id="body"></textarea>
      <small id="emailHelp" class="form-text text-muted"> Without spoilers, please!</small>
    </div>

  
   

    <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection