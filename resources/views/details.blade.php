@extends('layouts.app')
@section('content')
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('images/'.$post->image) }}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12">
              <span class="text-white text-uppercase">{{ $post->created_at }}</span>
            <h2 class="heading mb-5">{{ $post->title }}</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
   <div id="blog" class="site-section">
    <div class="container">
            
            <div class="row">

              <div class="col-md-8">               
                <p>
                 <img src="{{ asset('images/'.$post->image )}}" alt="" class="img-fluid">
                </p>
                <p>
                  {{ $post->content }}
                </p>
                
                <div class="tag-widget post-tag-container mb-5 mt-5">
                  <div class="tagcloud">
                    <a href="{{ url('/news') }}" class="tag-cloud-link">More Blogs</a>
                    {{-- <a href="#" class="tag-cloud-link">Brewin foundation</a>
                    <a href="#" class="tag-cloud-link">Donate</a> --}}
                    {{-- <a href="#" class="tag-cloud-link">School</a> --}}
                  </div>
                </div>

                <div class="pt-5 mt-5">
                  <h3 class="mb-5">0 Comments</h3>
                  No comments yet
                  {{-- <ul class="comment-list">

                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>Jean Doe</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply"> like comment</a></p>
                      </div>
                    </li>

                    
                  </ul> --}}
                  

                  
                  <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5">Leave a Comment</h3>
                    <form action="#" class="">
                      <div class="form-group">
                        <label for="name">Name *</label>
                        <input type="text" class="form-control" id="name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <label for="website">Website</label>
                        <input type="url" class="form-control" id="website">
                      </div>

                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                      </div>

                    </form>
                  </div>
                </div>

              </div> <!-- .col-md-8 -->
              <div class="col-md-4 sidebar">
                <div class="sidebar-box">
                  <form action="#" class="search-form">
                    <div class="form-group">
                      <span class="icon fa fa-search"></span>
                      <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                    </div>
                  </form>
                </div>
                <div class="sidebar-box">
                  <div class="categories">
                    <h3>Categories</h3>
                    <li><a href="#">Charity <span></span></a></li>
                    <li><a href="#">Outreaches <span></span></a></li>
                    <li><a href="#"> Fundraisers<span></span></a></li>
                    {{-- <li><a href="#">Updates <span>(42)</span></a></li> --}}
                  </div>
                </div>
                <div class="sidebar-box">
                  <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4 rounded">
                  <h3>Nambaziira Winnie</h3>
                  <span><small>About The Founder</small></span>
                  <p>
                    Founded by Nambaziira Winnie; medical doctor in 2017 following
                    a call from God to serve Ugandan children living in dire conditions
                  </p>
                  <p><a href="{{ url('/about') }}" class="btn btn-primary btn-lg">Read More</a></p>
                </div>

              </div>

            </div>

            
          </div>
  </div>
@endsection