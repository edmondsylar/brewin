@php
    $posts = DB::select('select * from blogs LIMIT 3');
    $sponsers = DB::select('select * from sponsors where main="yes" LIMIT 3');
@endphp

<footer class="footer" style="background: #400C4A">
    <div class="container">
      <div class="row">
        @if (count($sponsers) > 0)
            @foreach ($sponsers as $sponser)
                <div class="col-md-4">
                  <div class="media block-6">
                    <div class="icon">
                      <img src="images/{{ $sponser->image }}" alt="Product Image" width="85px" height="auto">
                    </div>
                    <div class="media-body">
                      <h3 class="heading">{{ $sponser->name }}</h3>
                      <p>
                        {{ $sponser->description }}
                      </p>
                      <p> <br> </p>
                    </div>
                  </div>     
                </div>
            @endforeach

            @else
              <p>
                No Sponsors in the Data.
              </p>
        @endif      
      </div>

      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <h3 class="heading-section">About Us</h3>
          <p class="mb-5">Brewin Foundation is a Christian non-governmental organisation serving orphaned
            and vulnerable children of Uganda.</p>
          {{-- <p class="mb-5">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p> --}}
          <p><a href="{{ url('/about') }}" class="link-underline">Read  More</a></p>
        </div>
        <div class="col-md-6 col-lg-4">
          <h5 class="heading-section">Recent Blog</h5>

          @foreach ($posts as $item)
              <div class="block-21 d-flex mb-4">
                <figure class="mr-3">
                  <img src="{{ asset('images/'.$item->image) }}" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <h3 class="heading"><a href="{{ url('/details/'.$item->id) }}">{{ $item->title }}</a></h3>
                  <div class="meta">
                    <div><a href="{{ url('/details/'.$item->id) }}"><span class="icon-calendar"></span> {{ $item->created_at }}</a></div>
                    <div><a href="{{ url('/details/'.$item->id) }}"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="{{ url('/details/'.$item->id) }}"><span class="icon-chat"></span> 0</a></div>
                  </div>
                </div>
              </div>
          @endforeach
          

        </div>
        <div class="col-md-6 col-lg-4">
          <div class="block-23">
            <h3 class="heading-section">Get Connected</h3>
              <ul>
                <li><a href="https://www.youtube.com/channel/UCJoo8GwaNpi7wLz_T7nyX1w" target="_blank"><span class="icon icon-instagram"></span><span class="text">youtube</span></a></li>
                <li><a href="https://www.instagram.com/brewinfoundation_/" target="_blank"><span class="icon-instagram"></span><span class="text">Instagram</span></a></li>
                {{-- <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li> --}}
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256 778 030 280
</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@brewinfoundationug.com</span></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
  </footer>

  