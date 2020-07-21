@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blogs | News Posts</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">blogs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Blogs</span>
                <span class="info-box-number">
                  {{ count($articles) }}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number"><code>!Developing</code></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <div class="clearfix hidden-md-up"></div>

        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" style="background: #FFCB01; color: purple;">
                <h5 class="card-title">Create A blog Post </h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">development</a>
                      
                      {{-- <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a> --}}

                    </div>
                  </div>
                  {{-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button> --}}
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <form action="{{ url('/blogs') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Blog Title</label>
                                <input required type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter blog title">
                            </div>

                            <div class="form-group">
                                <label>Enter Article details</label>
                                <textarea required name="details" class="form-control" rows="5" placeholder="Article Details"></textarea>
                            </div>
                            
                            <div class="custom-file">
                                <input required type="file" name="image" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">Create article</button>
                            </div>
                        </div>
                    </form>

                    <div class="col-md-4">
                       <h5>Recent Articles</h5>
                        <div class="card-body p-0">
                            <ul class="products-list product-list-in-card pl-2 pr-2">

                                @if (count($articles) > 0)
                                    @foreach ($articles as $item)
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
                                              <form action="{{ url('/blogs/'.$item->id) }}" method="post">
                                                @csrf
                                               {{ method_field('delete') }}
                                                <input type="submit" value="delete" class="btn btn-sm btn-danger">
                                              </form>
                                            </div>
                                        </li>
                                    @endforeach
                                    {{ $articles->links() }}
                                @else
                                        <small>Recently created BLog posts will appear here</small>
                                
                                @endif
                               
                               
                            </ul>
                        </div>
                    </div>

                </div>


              </div>
              <!-- ./card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

      </div>
    </section>
@endsection