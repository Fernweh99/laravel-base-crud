@extends('layout.main')
@section('head-title', 'Comics')
@section('main-content')
  <div class="container my-5 position-relative">
    <h3 class="middle-text">CURRENT SERIES</h3>
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6">
      @foreach($comics as $comic)
      <div class="col">
        <a class="text-white" href="{{route('comics.show', $comic)}}">
          <img class="comic-img" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
          <p>{{$comic['title']}}</p>
        </a>
      </div>
      @endforeach
    </div>
    <div class="text-center">
      <a class="btn btn-primary" href="{{route('comics.create')}}">Aggiungi</a>
    </div>
  </div>
@endsection