@extends('layouts.admin')
@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="float-left">Programs &nbsp;</h1>
             <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                Add Program
             </button>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Programs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
            @if (count($programs) > 0)
                @foreach ($programs as $item)            
                <div class="col-md-6">
            <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header" style="background: #FFCB01; color: purple;">
                            <h3 class="card-title float-left">{{ $item->name }} &nbsp; </h3>
                            @if ($item->status == 'Active')
                                <form class="float-left" style="margin-right: 5px;" action="{{ url('/progs/'.$item->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <input type="submit" value="deactivate" class="btn btn-sm btn-danger">
                                </form>
                            @else
                                <form class="float-left" style="margin-right: 5px;" action="{{ url('/progs/'.$item->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <input type="submit" value="activate" class="btn btn-sm btn-primary">
                                </form>
                            @endif
                                
                                                                
                                <form class="float-left" style="margin-right: 5px;" action="{{ url('/progs/'.$item->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <input type="submit" value="Edit" disabled class="btn btn-sm btn-success">
                                </form>

                                <form class="float-left" style="margin-right: 5px;" action="{{ url('/progs/'.$item->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <input type="submit" value="delete" disabled class="btn btn-sm btn-danger">
                                </form>
                                                                
                        </div>
                        <p style="padding: 10px">
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
                @endforeach
            @else
                
            @endif
         
          
        </div>
      </div>
    </section>   

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add A new Program</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ url('/progs') }}" method="POST" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Program Name</label>
                    <input type="text" name="name" class="form-control" id="name" required placeholder="......">
                  </div>

                    <div class="form-group">
                        <label>Program Description</label>
                        <textarea name="description" class="form-control" rows="3" required placeholder="......"></textarea>
                    </div>
                <!-- /.card-body -->
              
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
    </div>

@endsection