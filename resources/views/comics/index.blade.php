@extends('layout.main')
@section('more-links')
<script src="https://kit.fontawesome.com/7ff5ce46be.js" crossorigin="anonymous"></script>
@endsection
@section('head-title', 'Comics')
@section('main-content')
  <div class="container my-5 position-relative">
    <h3 class="middle-text">CURRENT SERIES</h3>
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6">
      @foreach($comics as $comic)
      <div class="col position-relative comic">
        <img class="comic-img" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        <div class="btn-comic row">
            <div class="col">
              <a class="btn btn-primary" href="{{route('comics.show', $comic)}}">
                <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
              </a>
            </div>
            <div class="col">
              <a class="btn btn-primary" href="{{route('comics.edit', $comic)}}">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>
            </div>
            <div class="col">
              <form class="delete-form" action="{{route('comics.destroy', $comic)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">
                  <i class="fa-solid fa-trash"></i>
                </button>
              </form>
            </div>
          </div>
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
@section('more-js')
  <script>
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
      form.addEventListener('submit', event => {
        event.preventDefault();
        const hasConfirmation = confirm('Sei sicuro di voler eliminare questo fumetto?');

        if (hasConfirmation) form.submit();
      });
    });
  </script>
@endsection