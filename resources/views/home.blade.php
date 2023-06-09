{{-- estendo il main layout --}}
@extends('layouts/main')

{{-- content --}}
@section('content')
  <main class="home">
    <div class="container">
      <div class="tag">
        <h3>Current Series</h3>
      </div>
      <div class="button-section">
        <button class="btn btn-primary rounded-0">
            <a href="{{route('comics.index')}}">Load comics</a>
        </button>
      </div>
    </div>
    {{-- includo la sezione buy --}}
    @include('partials/buy')

  </main>
@endsection