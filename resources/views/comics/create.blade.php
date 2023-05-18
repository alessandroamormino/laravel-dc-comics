@extends('layouts/main')

@section('content')
<main class="create">
  <div class="container">
    <form action="{{route('comics.store')}}" method="POST">
      @csrf
  
      <div class="row mb-3">
        <label for="title">Title</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}">
        {{-- espongo messaggio di errore --}}
        @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="row mb-3">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
        @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="row mb-3">
        <label for="series">Series</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series')}}">
        {{-- espongo messaggio di errore --}}
        @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="row mb-3">
        <label for="thumb">Thumbnail</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
        {{-- espongo messaggio di errore --}}
        @error('thumb')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="row mb-3">
        <label for="price">Price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price')}}">
        {{-- espongo messaggio di errore --}}
        @error('price')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="row mb-3">
        <label for="sale_date">Sale Date</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        {{-- espongo messaggio di errore --}}
        @error('sale_date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="row mb-3">
        <label for="type">Type</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type')}}">
        {{-- espongo messaggio di errore --}}
        @error('type')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="button-section mt-5">
        <button class="btn btn-primary rounded-0" type="submit">Add Comic!</button>
      </div>
    </form>
  </div>
</main>
@endsection