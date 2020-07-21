@extends('layouts.app')
@section('content')
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('https://gogetfunding.com/wp-content/uploads/2013/07/42420/primary_image.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h2 class="heading mb-5">The Brewin Blog</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <div class="site-section bg-light">
    <div class="container">
      <div class="row">
        @if (count($blogs) > 0)
        @foreach ($blogs as $blog)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="post-entry">
                    <a href="{{ url('/details') }}/{{ $blog->id }}" class="mb-3 img-wrap">
                    <img src="images/{{ $blog->image }}" alt="Image placeholder" class="img-fluid">
                    </a>
                    <h3><a href="{{ url('/details') }}/{{ $blog->id }}">{{ $blog->title }}</a></h3>
                    <span class="date mb-4 d-block text-muted">{{ $blog->created_at }}</span>

                    <style>
                      .truncate {
                        text-overflow: ellipsis;
                        /* Needed to make it work */
                        overflow: hidden;
                        white-space: nowrap;
                      }
                    </style>
                    
                    <p class="truncate">
                      {{ $blog->content }} 
                    </p>
                    <p><a href="{{ url('/details') }}/{{ $blog->id }}" class="link-underline">Read More</a></p>
                </div>
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