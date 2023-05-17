<footer>
  <div class="container">
    <div class="footer-flex">
      <div class="list-container">
        <div class="list-column">
              {{-- @foreach($lists[0] as $item)
                <div class="list">
                  <h2>{{$item['title']}}</h2>
                  <ul>
                    @foreach($item['links'] as $item)
                      <li><a href="#">{{$item}}</a></li>
                    @endforeach
                  </ul>
                </div>
              @endforeach
            </div>
            @foreach($lists[1] as $item)
              <div class="list">
                <h2>{{$item['title']}}</h2>
                <ul>
                  @foreach($item['links'] as $item)
                    <li><a href="#">{{$item}}</a></li>
                  @endforeach
                </ul>
              </div>
            @endforeach --}}
          <div class="list">
            <h2>Dc Comics</h2>
            <ul>
              <li><a href="#">Characters</a></li>
              <li><a href="#">Comics</a></li>
              <li><a href="#">Movies</a></li>
              <li><a href="#">TV</a></li>
              <li><a href="#">Games</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">News</a></li>
            </ul>
          </div>
          <div class="list">
            <h2>Shop</h2>
            <ul>
              <li><a href="#">Shop DC</a></li>
              <li><a href="#">Shop DC Collectibles</a></li>
            </ul>
          </div>
        </div>
        <div class="list">
          <h2>DC</h2>
          <ul>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Privacy policy (New)</a></li>
            <li><a href="#">Ad Choices</a></li>
            <li><a href="#">Advertising</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Subscriptions</a></li>
            <li><a href="#">Talent Workshops</a></li>
            <li><a href="#">CPSC Certificates</a></li>
            <li><a href="#">Ratings</a></li>
            <li><a href="#">Shop Help</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="list">
          <h2>Sites</h2>
          <ul>
            <li><a href="#">DC</a></li>
            <li><a href="#">MAD Magazine</a></li>
            <li><a href="#">DC Kids</a></li>
            <li><a href="#">DC Universe</a></li>
            <li><a href="#">DC Power Visa</a></li>
          </ul>
        </div>
      </div>
      <div class="logo-bg">
        <img src="{{Vite::asset('resources/images/dc-logo-bg.png')}}" alt="dc-logo">
      </div>
    </div>
    <div class="copy">
      <span>All Site content &trade; and &copy; 2023 DC Entertainment, unless otherwise <a href="#">noted here.</a> All rights reserved.</span>
      <br>
      <span><a href="#">Cookies settings</a></span>
    </div>
  </div>
  <div class="footer-banner">
    <div class="container">
      <div class="left">
        <button class="btn btn-outline-primary rounded-0">SING-UP NOW!</button>
      </div>
      <div class="right">
        <h5>FOLLOW US</h5>
        <img src="{{Vite::asset('resources/images/footer-facebook.png')}}" alt="fb">
        <img src="{{Vite::asset('resources/images/footer-twitter.png')}}" alt="twitter">
        <img src="{{Vite::asset('resources/images/footer-youtube.png')}}" alt="yt">
        <img src="{{Vite::asset('resources/images/footer-pinterest.png')}}" alt="pinterest">
        <img src="{{Vite::asset('resources/images/footer-periscope.png')}}" alt="periscope">
      </div>
    </div>
  </div>
</footer>