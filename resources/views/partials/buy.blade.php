<div class="icons-container">
  <div class="icons">
    @foreach($buy as $item)
    <div class="icon">
      <img src="{{Vite::asset($item['path'])}}" alt="">
      <span>{{$item['text']}}</span>
    </div>
    @endforeach
  </div>
</div>