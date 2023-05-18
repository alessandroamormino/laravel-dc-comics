@extends('layouts/main')

@section('content')
<main class="create">
  <div class="container">
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
      @csrf

      {{-- inserisco il metodo PUT --}}
      @method('PUT')
  
      <div class="row mb-3">
        <label for="title">Title</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}">
        {{-- espongo il messaggio di errore --}}
        @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        
      </div>
  
      <div class="row mb-3">
        <label for="description">Description</label>
        <textarea id="description" name="description">{{old('description') ?? $comic->description}}</textarea>
        @error('description')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
      </div>
  
      <div class="row mb-3">
        <label for="series">Series</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series') ?? $comic->series}}">
        {{-- espongo il messaggio di errore --}}
        @error('series')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        
      </div>
  
      <div class="row mb-3">
        <label for="thumb">Thumbnail</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb') ?? $comic->thumb}}">
        {{-- espongo il messaggio di errore --}}
        @error('thumb')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        
      </div>
  
      <div class="row mb-3">
        <label for="price">Price</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price') ?? $comic->price}}">
        {{-- espongo il messaggio di errore --}}
        @error('price')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        
      </div>
  
      <div class="row mb-3">
        <label for="sale_date">Sale Date</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
        {{-- espongo il messaggio di errore --}}
        @error('sale_date')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        
      </div>
  
      <div class="row mb-3">
        <label for="type">Type</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type') ?? $comic->type}}">
        {{-- espongo il messaggio di errore --}}
        @error('type')
          <div class="invalid-feedback">
            {{$message}}
          </div>
        @enderror
        
      </div>
  
      <div class="button-section mt-5">
        <button class="btn btn-primary rounded-0" type="submit">Save Comic!</button>
      </div>
    </form>
  </div>
</main>
@endsection