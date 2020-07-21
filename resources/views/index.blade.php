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
                    <p style="display: inline-block;"><a href="https://youtu.be/tn3LOXjZXRI"  data-fancybox class="ftco-play-video d-flex"><span class="play-icon-wrap align-self-center mr-4"><span class="ion-ios-play"></span></span> <span class="align-self-center">Watch Video</span></a></p>

                    </div>
                  </div>
                </div>
              </div>
          @endforeach
      @endif
    </div>
  </div>

    <div class="site-section section-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-6 pr-5">
          <div class="block-48">
              <span class="block-48-text-1">Served Over</span>
              <div class="block-48-counter ftco-number" data-number="14500">14500</div>
              <span class="block-48-text-1 mb-4 d-block">Children in Uganda</span>
              <p class="mb-0"><a href="{{ url('/about') }}" class="btn btn-white px-3 py-2">View Our Program</a></p>
            </div>
        </div>
        <div class="col-md-6 welcome-text">
          <h2 class="display-4 mb-3">Who Are We?</h2>
          <p class="lead">Brewin Foundation is a Christian non-governmental organisation serving orphaned
            and vulnerable children of Uganda and their households with the aim of providing a
            safe haven for each child.</p>
          <p class="mb-4">
              Building communities equipped to nurture orphaned and vulnerable children to their
              full potential
          </p>
          <p class="mb-0"><a href="{{ url('/about') }}" class="btn btn-primary px-3 py-2">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>

    <div class="site-section border-top">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-bulb"></span></div>
            <div class="media-body">
              <h3 class="heading">Our Mission</h3>
              <p>To nurture, raise and support orphaned and vulnerable children through a family centred approach</p>
              <p><a href="{{ url('/about') }}" class="link-underline">Learn More</a></p>
            </div>
          </div>     
        </div>

        <div class="col-md-6">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-cash"></span></div>
            <div class="media-body">
              <h3 class="heading">Our Vision</h3>
              <p>
                  Building communities equipped to nurture orphaned and vulnerable children to their full potential
              </p>
              <p><a href="{{ url('/about') }}" class="link-underline">Learn More</a></p>
            </div>
          </div>  
        </div>

        {{-- <div class="col-md-4">
          <div class="media block-6">
            <div class="icon"><span class="ion-ios-contacts"></span></div>
            <div class="media-body">
              <h3 class="heading">We Need Volunteers</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="#" class="link-underline">Learn More</a></p>
            </div>
          </div> 
        </div> --}}

      </div>
    </div>
  </div>

    <div class="site-section fund-raisers bg-light">
    <div class="container">
      <div class="row mb-3 justify-content-center">
        <div class="col-md-8 text-center">
          <h2>Latest Fundraisers</h2>
          <p class="lead">Some of our Outreaches in the society maybe include but not limitted to only the ones listed</p>
          {{-- <p><a href="#" class="link-underline">View All Fundraisers</a></p> --}}
        </div>
      </div>
    </div>

    <div class="container-fluid">

      <!-- <div class="row"> -->
        
        <div class="col-md-12 block-11">
          <div class="nonloop-block-11 owl-carousel">

            @if (count($fundraisers) > 0)
                @foreach ($fundraisers as $funder)
                    <div class="card fundraise-item">
                      <a href="#"><img class="card-img-top" src="images/kids.png" alt="Image placeholder"></a>
                      <div class="card-body">
                        <h3 class="card-title"><a href="#">{{ $funder->title }}</a></h3>
                        <p class="card-text">
                          {{ $funder->description }}
                        </p>
                        <span class="donation-time mb-3 d-block">{{ $funder->created_at }}</span>
                      </div>
                    </div>
                @endforeach
                {{ $fundraisers->links() }}
                @else
                <p>
                  No Recent Fundraisers
                </p>
            @endif
            {{-- outreach bigins here --}}
            
        {{-- end here --}}

          </div>
        </div>
      <!-- </div> -->
    </div>
  </div>

  <div class="featured-section overlay-color-2" style="background-image: url('images/kids.png');">
    
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="{{ asset('images/kids.png')}}" alt="Image placeholder" class="img-fluid">
        </div>

        <div class="col-md-6 pl-md-5">
          <span class="featured-text d-block mb-3">Brewin Foundation</span>
          <h2>Genesis of the foundation</h2>
          <p class="mb-3">
                The foundation was founded by Nambaziira Winnie; medical doctor in 2017 following
                a call from God to serve Ugandan children living in dire conditions. Through her work
                with children living with HIV, she witnessed the struggles the children undergo to
                survive the trials of this world.
          </p>
          <p><a href="{{ url('/about') }}" class="btn btn-warning btn-hover-white py-3 px-5">Learn more about us</a></p>
        </div>
        
      </div>
    </div>

  </div>

  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-12">
          <h2>Latest News</h2>
        </div>
      </div>

      <div class="row">
        
        @if (count($blogs) > 0)
            @foreach ($blogs as $article)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                  <div class="post-entry">
                    <a href="{{ url('/details') }}/{{ $article->id }}" class="mb-3 img-wrap">
                      <img src="images/{{ $article->image }}" alt="Image placeholder" class="img-fluid">
                    </a>
                    <h3><a href="#"> {{ $article->title }} </a></h3>
                    {{-- <span class="date mb-4 d-block text-muted">{{ $article->created_at }}</span> --}}
                    {{-- <p>{{ $article->content }}</p> --}}
                    <p><a href="{{ url('/news') }}/#{{ $article->id }}" class="link-underline">Read More</a></p>
                  </div>
                </div>
            @endforeach
            {{ $blogs->links() }} &nbsp; 
             <p><a href="{{ url('/about') }}" class="btn btn-primary px-3 py-2">More News</a></p>

        @else 
          <p> 
            No recent News yet;
          </p>
        @endif

        

      </div>
    </div>
  </div>
  <div class="featured-section overlay-color-2" style="background-image: url('images/bg_2.jpg');">
    
    <div class="container">
      <div class="row">

        <div class="col-md-6 mb-5 mb-md-0">
          <img src="{{ asset('images/kids.png')}}" alt="Image placeholder" class="img-fluid">
        </div>

        <div class="col-md-6 pl-md-5">

          <div class="form-volunteer">
            
            <h2>Be A Volunteer Today</h2>
            <form action="{{ url('/') }}" method="post">
              <div class="form-group">
                @csrf
                <input type="text" class="form-control py-2" id="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <!-- <label for="email">Email</label> -->
                <input type="text" class="form-control py-2" id="email" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <!-- <label for="v_message">Email</label> -->
                <textarea name="v_message" id="" cols="30" rows="3" class="form-control py-2" placeholder="Write your message"></textarea>
                <!-- <input type="text" class="form-control py-2" id="email"> -->
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-white px-5 py-2" value="Send">
              </div>
            </form>
          </div>
        </div>
        
      </div>
    </div>

  </div>
@endsection