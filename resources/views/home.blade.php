@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Brewin Foundation</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-sm-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <h5 class="info-box-text">Header Images</h5>
                <form action="{{ url('/settings/header') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <select class="form-control" name="title" id="" >
                      <option value="home">home header</option>
                      <option value="contact">Contact Us header</option>
                      <option value="blogs">News | blogs header</option>
                      <option value="events">gallery header</option>
                      <option value="about">about us header</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="file" class="form-control-file" name="image">
                  </div>

                  <div class="form-group">
                    <input type="submit" class="btn btn-sm btn-primary" value="update">
                  </div>
                </form>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-color"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">System Colors</span>
                <span class="info-box-number"><code>under development</code></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>

        </div>
      </div>
    </section>
    

    
@endsection