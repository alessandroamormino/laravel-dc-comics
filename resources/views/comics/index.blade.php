@extends('layouts/main')

@section('content')
<main>
  <div class="container">
    <div class="row">
      @foreach($comics as $item)
        <a href="{{route('comics.show', $item->id)}}" class="col-2 comics-card">
          <div class="comics-card-inner">
            <img src="{{$item->thumb}}" alt="{{$item->title}}">
            <span class='title'>{{$item['series']}}</span>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</main>

@endsection