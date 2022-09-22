@extends('layout.main')
@section('head-title', 'Create Comic')
@section('main-content')
<div class="container bg-white rounded-5 my-5 p-4 text-black">
  <form action="{{route('comics.update', $comic)}}" method="post">
    @method('PUT')
    @csrf
    <div class="row g-3">
      <div class="col-6">
        <label for="title">Titolo:</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Scrivi qui.." value="{{ $comic->title}}">
      </div>
      <div class="col-6">
        <label for="thumb">Immagine:</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Scrivi l'url.." value="{{ $comic->thumb}}">
      </div>
      <div class="col-12">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description}}"</textarea>
      </div>
      <div class="col-6">
        <label for="series">Serie:</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Scrivi qui.." value="{{ $comic->series}}">
      </div>
      <div class="col-6">
        <label for="sale_date">Data Publicazione:</label>
        <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date}}">
      </div>
      <div class="col-6">
        <label for="type">Tipo:</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Scrivi qui.." value="{{ $comic->type}}">
      </div>
      <div class="col-6">
        <label for="price">Prezzo:</label>
        <input type="text" class="form-control" name="price" id="price" value="{{ $comic->price}}">
      </div>
      <div class="col-6">
        <a class="btn btn-secondary" href="{{route('comics.index')}}">Torna ai comics</a>
      </div>
      <div class="col-6 text-end">
        <button class="btn btn-danger me-2" type="reset">Cancella</button>
        <button class="btn btn-success" type="submit">Sava</button>
      </div>
    </div>
  </form>
</div>
@endsection