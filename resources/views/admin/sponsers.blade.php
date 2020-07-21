@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sponsers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Sponsers</li>
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
                <h3 class="card-title">Create Sponser</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/sponser') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Partner</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Partner Name">
                  </div>

                    <div class="custom-file">
                        <input required type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                    <div class="form-group">
                        <label>Simple Partner Description</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Enter ..."></textarea>
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
                <h3 class="card-title" >
                  <i class="fas fa-bullhorn"></i>
                  Sponsers 
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                @if (count($sponsers) > 0)
                    @foreach ($sponsers as $item)
                        <div class="callout callout-success">
                            <h5>{{ $item->name }} @if ($item->main == 'Yes')
                                | <small>Main Sponsor</small>
                            @endif </h5>
                            <form class="float-right" style="margin: 10px" method="post" action="{{ url('/sponsers/'.$item->id) }}">
                              @csrf
                              {{ method_field('delete') }}
                              <small><input type="submit" value="delete" class="btn btn-sm btn-danger"></small>
                            </form> &nbsp;
                            @if ($item->main == 'Yes')
                                <form class="float-right" style="margin: 10px" method="post" action="{{ url('/sponsers/'.$item->id) }}">
                                  @csrf
                                  {{ method_field('put') }}
                                  <small><input type="submit" value="Change" class="btn btn-sm btn-warning"></small>
                                </form>
                            @else
                                <form class="float-right" style="margin: 10px" method="post" action="{{ url('/sponsers/'.$item->id) }}">
                                  @csrf
                                  {{ method_field('put') }}
                                  <small><input type="submit" value="Main" class="btn btn-sm btn-primary"></small>
                                </form>
                            @endif
                            
                            <p>
                                {{ $item->description }}
                            </p>
                            
                        </div>
                    @endforeach
                    {{ $sponsers->links() }}
                @endif
              </div>
              <!-- /.card-body -->
            </div>
          </div>



        </div>
      </div>
    </section>
@endsection