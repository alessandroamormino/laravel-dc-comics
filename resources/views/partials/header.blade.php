<header>
  <div class="container">
    <nav>
      <div class="nav-left">
        <a href="/"><img src="{{Vite::asset('resources/images/dc-logo.png')}}" alt="Logo"></a>
      </div>
      {{-- <div class="nav-center">
        <ul>
          @foreach($links as $link)
              <li><a href="{{ $link == 'comics' ? '/'.$link : '#' }}">{{ $link }}</a></li>
          @endforeach
        </ul>
      </div> --}}
      <div class="nav-center">
        <ul>
          <li><a href="#">characters</a></li>
          <li><a href="/comics">comics</a></li>
          <li><a href="#">movies</a></li>
          <li><a href="#">tv</a></li>
          <li><a href="#">games</a></li>
          <li><a href="#">collectibles</a></li>
          <li><a href="#">videos</a></li>
          <li><a href="#">fans</a></li>
          <li><a href="#">news</a></li>
          <li><a href="#">shop</a></li>
          </ul>
      </div>
      <div class="nav-right">
        <span>Search</span>
      </div>
    </nav>
  </div>
  <div class="jumbo"></div>
</header>