@extends('layout.main')
@section('head-title', 'Comics')
@section('main-content')

  {{-- layout with thumb --}}
  <div class="blue-layout">
    <div class="container position-relative">
      <img class="thumb" src="{{$comic['thumb']}}" alt="">
    </div>
  </div>

  {{-- main info comic --}}
  <section class="main-info-comic">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h3 class="title">{{$comic['title']}}</h3>
          <div class="row info-status">
            <div class="col-8 border-right">
              <div class="row">
                <div class="col">
                  <span class="c-green">U.S Price:</span>
                  <span>{{$comic['price']}}</span>
                </div>
                <div class="col text-end">
                  <span class="c-green">AVAILABLE</span>
                </div>
              </div>
            </div>
            <div class="col-4 text-center">
              <div class="row">
                <div class="col">
                  <span>Check Availability</span>
                </div>
              </div>
            </div>
          </div>
          <p>{{$comic['description']}}</p>
        </div>
        <div class="col-4 text-end">
          <span>ADVERTISEMENT</span>
          <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>

  {{-- footer info comic --}}
  <section class="footer-info-comic">
    <div class="container">
      <div class="row g-5">
        <div class="col">
          <h4>Talent</h4>
          <div class="row border-y">
            <div class="col-4">
              <h6>Art by:</h6>
            </div>
            <div class="col">
              @foreach ($comic['artists'] as $artist)
              <a href="#">
                {{$artist}}{{$loop->index != count($comic['artists']) - 1 ? ',' : ''}}
              </a>
              @endforeach
            </div>
          </div>
          <div class="row border-y">
            <div class="col-4">
              <h6>Written by:</h6>
            </div>
            <div class="col">
              @foreach ($comic['writers'] as $writer)
              <a href="#">
                {{$writer}}
                {{$loop->index != count($comic['writers']) - 1 ? ',' : ''}}
              </a>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col">
          <h4>Specs</h4>
          <div class="row border-y">
            <div class="col-4">
              <h6>Series:</h6>
            </div>
            <div class="col">
              <a class="text-uppercase" href="">{{$comic['series']}}</a>
            </div>
          </div>
          <div class="row border-y">
            <div class="col-4">
              <h6>U.S. Price:</h6>
            </div>
            <div class="col">
              <span>{{$comic['price']}}</span>
            </div>
          </div>
          <div class="row border-y">
            <div class="col-4">
              <h6>On Sale Date:</h6>
            </div>
            <div class="col">
              <span>{{$comic['sale_date']}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection