@extends('layouts.admin')
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fundraisers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
              <li class="breadcrumb-item active">Fundraisers</li>
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
                <h3 class="card-title">Create Fundraiser Record</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ url('/fundraisers') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Fundraises Title</label>
                    <input type="text" name="title" class="form-control" id="name" placeholder="Title">
                  </div>

                  {{-- <div class="form-group">
                    <label for="exampleInputEmail1">Amount Raised</label>
                    <input type="text" name="amount" class="form-control" id="name" placeholder="Amount collected">
                  </div> --}}

                    <div class="form-group">
                        <label>Details</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Details ..."></textarea>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Create Fundraiser</button>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Fundraisers</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  @if (count($funds) > 0)
                  @foreach ($funds as $item)
                          <tbody>
                              <tr>
                                <td>
                                No.{{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->title }}
                                </td>
                                <td>
                                    {{ $item->created_at }}
                                </td>
                            </tr>
                          @endforeach
                        </table>
                          {{ $funds->links() }}
                        @else
                      @endif
                  
              </div>
            </div>
          </div>



        </div>
      </div>
    </section>
@endsection