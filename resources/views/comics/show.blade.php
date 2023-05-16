@extends('layouts/main')

@section('content')
  <main class="comics">
    <div class="separator"></div>
    <div class="container">
      <div class="thumb">
        <img src="{{$comic->thumb}}" alt="Comic">
      </div>
    </div>
    <div class="container">
      <div class="left">
        <h1>{{$comic->title}}</h1>
        <div class="price">
          <div class="left">
            <span>US Price: {{$comic->price}}</span>
          </div>
          <div class="right">
            <span>Available</span>
          </div>
        </div>
        <div class="paragraph">          
          <p>{{$comic->description}}</p>         
        </div>
      </div>
      <div class="right">
        <span>IMAGE</span>
        <img src="{{Vite::asset('resources/images/advertisement.jpg')}}" alt="asd">
      </div>
    </div>
  </main>
@endsection