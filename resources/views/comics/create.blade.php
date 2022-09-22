@extends('layout.main')
@section('head-title', 'Create Comic')
@section('main-content')
<div class="container bg-white rounded-5 my-5 p-4 text-black">
  <h1><strong>Nuovo Fumetto:</strong></h1>
  @include('includes.form')
</div>
@endsection