 <section id="{{ $page->alias }}" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
             {!! $page->text !!}
              <a href="{{ route('home') }}" class="read_more2">BACK</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5">
            <img src="/img/{{ $page->images }}" class="zoomIn wow animated" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>