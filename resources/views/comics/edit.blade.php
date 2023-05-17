@extends('layouts/main')

@section('content')
<main class="create">
  <div class="container">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf

      {{-- inserisco il metodo PUT --}}
      @method('PUT')
  
      <div class="_row mb-3">
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{$comic->title}}">
      </div>
  
      <div class="_row mb-3">
        <label for="description">Description</label>
        <textarea id="description" name="description">{{$comic->description}}</textarea>
      </div>
  
      <div class="_row mb-3">
        <label for="series">Series</label>
        <input type="text" id="series" name="series" value="{{$comic->series}}">
      </div>
  
      <div class="_row mb-3">
        <label for="thumb">Thumbnail</label>
        <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
      </div>
  
      <div class="_row mb-3">
        <label for="price">Price</label>
        <input type="text" id="price" name="price" value="{{$comic->price}}">
      </div>
  
      <div class="_row mb-3">
        <label for="sale_date">Sale Date</label>
        <input type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
      </div>
  
      <div class="_row mb-3">
        <label for="type">Type</label>
        <input type="text" id="type" name="type" value="{{$comic->type}}">
      </div>
  
      <div class="button-section mt-5">
        <button class="btn btn-primary rounded-0" type="submit">Save Comic!</button>
      </div>
    </form>
  </div>
</main>
@endsection