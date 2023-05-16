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

    <div class="container more-info">
      <div class="talent">
        <h3>Talent</h3>
        <hr>
        <div class="_row artists">
          <div class="left">Art by:</div>
          <div class="right">{{$comic->artists}}</div>
        </div>
        <div class="_row writers">
          <div class="left">Written by:</div>
          <div class="right">{{$comic->writers}}</div>
        </div>
      </div>
      <div class="specs">
        <h3>Specs</h3>
        <hr>
        <div class="_row series">
          <div class="left">Series:</div>
          <div class="right">{{$comic->series}}</div>
        </div>
        <div class="_row price">
          <div class="left">U.S. Price:</div>
          <div class="right">{{$comic->price}}</div>
        </div>
        <div class="_row sale">
          <div class="left">On Sale Date:</div>
          <div class="right">{{$comic->sale_date}}</div>
        </div>
      </div>
    </div>
  </main>
@endsection