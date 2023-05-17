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
    <div class="container">
      <div class="update-section">
        {{-- Aggiungo un bottone per modificare il comic --}}
        <button class="btn btn-primary rounded-0"><a href="{{route('comics.edit', $comic->id)}}">Update Comic</a></button>
      </div>
      <div class="delete-section">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger rounded-0" data-bs-toggle="modal" data-bs-target="#deleteComic">
          Delete Comic
        </button>

        <!-- Modal -->
        <div class="modal fade" id="deleteComic" tabindex="-1" aria-labelledby="deleteComicLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Comic</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure you want to delete this comic?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
        
                  <button type="submit" class="btn btn-danger">Delete Comic</button>
                </form>
              </div>
            </div>
          </div>
        </div>


        


      </div>
    </div>
  </main>
@endsection