@extends('layouts.app')
@section('content')
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      @if (count($slider) > 0)
          @foreach ($slider as $item)
              <div class="block-30 block-30-sm item" style="background-image: url('images/{{ $item->image }}');" data-stellar-background-ratio="0.5">
                <div class="container">
                  <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-7">
                    <h2 class="heading mb-5">{{ $item->title }}</h2>
                    </div>
                  </div>
                </div>
              </div>
          @endforeach
      @endif
    </div>
  </div>
  <div class="site-section ">
    <div class="container">
      <div class="row">
        @if (count($gallery) > 0)
        @foreach ($gallery as $item)
            <div class="col-md-4">
                <a href="images/{{ $item->image }}" class="img-hover" data-fancybox="gallery">
                    <span class="icon">
                        {{ $item->title }}
                    </span>
                    <img src="images/{{ $item->image }}" alt="Image placeholder" class="img-fluid">
                </a>
            </div>
        @endforeach
    
        @else
          <p>
            No News yet
          </p>    

        @endif
      </div>
    </div>
  </div>
  
@endsection