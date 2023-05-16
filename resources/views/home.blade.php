{{-- estendo il main layout --}}
@extends('layout/main')

{{-- content --}}
@section('content')
  <main class="home">
    <div class="container">
      <div class="tag">
        <h3>Current Series</h3>
      </div>
      <div class="row">

        @foreach($comics as $item)
          <div class="col-2 comics-card">
            <div class="comics-card-inner">
              <img src="{{$item['thumb']}}" alt="{{$item['title']}}">
              <span class='title'>{{$item['series']}}</span>
            </div>
          </div>
        @endforeach

      </div>
      <div class="button-section">
        <button class="btn btn-primary rounded-0">Load more</button>
      </div>
    </div>
    {{-- includo la sezione buy --}}
    @include('partials/buy')

  </main>
@endsection