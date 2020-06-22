@extends('layouts.app')
@section('content')
  <div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
      <div class="block-30 block-30-sm item" style="background-image: url('{{ asset('images/more.png') }}');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="heading">Get In Touch</h2>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

<div class="site-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control px-3 py-3" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control px-3 py-3" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        
        </div>

        <div class="col-md-6">
            <h4>Another day to live (Psalms 95:7)</h4>
            <p class="lead">
                Brewin Foundation is a Christian non-governmental organisation serving orphaned
                and vulnerable children of Uganda and their households with the aim of providing a
                safe haven for each child.
            </p>

            <h6>Our Vision</h6>
            <p>
                Building communities equipped to nurture orphaned and vulnerable children to their
                full potential
            </p>

            <h6>Our Mission</h6>
            <p>
                To nurture, raise and support orphaned and vulnerable children through a family
                centred approach
            </p>
            <p><a href="{{ url('/about') }}" class="btn btn-primary btn-lg">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>
@endsection