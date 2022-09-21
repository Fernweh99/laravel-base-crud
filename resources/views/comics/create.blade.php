@extends('layout.main')
@section('head-title', 'Create Comic')
@section('main-content')
<div class="container bg-white rounded-5 my-5 p-4 text-black">
  <h1><strong>Nuovo Fumetto:</strong></h1>
  <form action="{{route('comics.store')}}" method="post">
    @csrf
    <div class="row g-3">
      <div class="col-6">
        <label for="title">Titolo:</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Scrivi qui..">
      </div>
      <div class="col-6">
        <label for="thumb">Immagine:</label>
        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Scrivi l'url..">
      </div>
      <div class="col-12">
        <label for="description" class="form-label">Descrizione:</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
      </div>
      <div class="col-6">
        <label for="series">Serie:</label>
        <input type="text" class="form-control" name="series" id="series" placeholder="Scrivi qui..">
      </div>
      <div class="col-6">
        <label for="sale_date">Data Publicazione:</label>
        <input type="date" class="form-control" name="sale_date" id="sale_date">
      </div>
      <div class="col-6">
        <label for="type">Tipo:</label>
        <input type="text" class="form-control" name="type" id="type" placeholder="Scrivi qui..">
      </div>
      <div class="col-6">
        <label for="price">Prezzo:</label>
        <input type="text" class="form-control" name="price" id="price" value="$">
      </div>
      <div class="col-6">
        <a class="btn btn-secondary" href="{{route('comics.index')}}">Torna ai comics</a>
      </div>
      <div class="col-6 text-end">
        <button class="btn btn-danger me-2" type="reset">Cancella</button>
        <button class="btn btn-success" type="submit">Crea</button>
      </div>
    </div>
  </form>
</div>
@endsection