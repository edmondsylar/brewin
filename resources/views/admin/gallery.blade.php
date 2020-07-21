@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gallery | Event Pictography</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header" style="background: #FFCB01; color: purple;">
                <h3 class="card-title">Create Gallery Content </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/gallery') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" class="form-control" id="name" placeholder="optional">
                  </div>

                    <div class="form-group">
                        <label>Event Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="optional"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Image </label>
                        <input type="file" required name="image" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Create Sponser</button>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-bullhorn"></i>
                  recently Created.
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <ul class="products-list product-list-in-card pl-2 pr-2">
                    @if (count($gallery) > 0)
                        @foreach ($gallery as $item)
                            <li class="item">
                              <div class="product-img">
                                  <img src="images/{{ $item->image }}" alt="Product Image" class="img-size-50">
                              </div>
                              <div class="product-info">
                                  <a href="javascript:void(0)" class="product-title">
                                      {{ $item->title }}
                                  </a>
                                  {{-- <span class="product-description">
                                      {{ $item->content }}
                                  </span> --}}
                              </div>
                              <div class="product-info">
                                <form action="{{ url('/gallery/'.$item->id) }}" method="post">
                                  @csrf
                                  {{ method_field('delete') }}
                                  <input type="submit" value="delete" class="btn btn-sm btn-danger">
                                </form>
                              </div>
                          </li>
                        @endforeach
                    @endif
                  </ul>
              </div>
              <!-- /.card-body -->
            </div>
          </div>



        </div>
      </div>
    </section>
@endsection