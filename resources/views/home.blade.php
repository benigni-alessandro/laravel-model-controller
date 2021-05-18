@extends('layouts.app')
@section('main')
  @foreach($movies as $key => $movie)
    <div class="movie">
      <ul>
        <li><span>Title: </span><span>{{$movie['title']}}</span></li>
        <li><span>Original title: </span><span>{{$movie['original_title']}}</span></li>
        <li><span>Nationality: </span><span>{{$movie['nationality']}}</span></li>
        <li><span>Date: </span><span>{{$movie['date']}}</span></li>
        <li><span>Rating: </span><span>{{$movie['vote']}}</span></li>
      </ul>
    </div>
  @endforeach

@endsection
