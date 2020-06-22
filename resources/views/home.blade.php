@extends('layouts.admin')
@section('content')
   <div class="row">

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
            <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Articles</p>
            <h3 class="card-title"> {{ count($blogs) }}
            <small></small>
            </h3>
        </div>
        <div class="card-footer">
            <div class="stats">
            <i class="material-icons text-success">add</i>
            <a href="{{ url('/all') }}">Create Article</a>
            </div>
        </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
            <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Fund raisers</p>
            <h3 class="card-title">{{ count($fundraiser) }}
            <small></small>
            </h3>
        </div>
        <div class="card-footer">
            <div class="stats">
            <i class="material-icons text-success">add</i>
            <a href="{{ url('/all') }}">Add Fund Raiser</a>
            </div>
        </div>
        </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon">
            <i class="material-icons">content_copy</i>
            </div>
            <p class="card-category">Partners</p>
            <h3 class="card-title">{{ count($sponser) }}
            <small></small>
            </h3>
        </div>
        <div class="card-footer">
            <div class="stats">
            <i class="material-icons text-success">add</i>
            <a href="{{ url('/all') }}">Add Fund Raiser</a>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">Partners</h4>
                <p class="card-category">Brewin Foundation Patners</p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                <thead class="text-warning">
                    <th>ID</th>
                    <th>Sponser</th>
                    <th>Registered</th>
                </thead>
                <tbody>
                    @if (count($sponser) > 0)
                        @foreach ($sponser as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->created_at }}</td>
                            </tr>
                        @endforeach
                    {{ $sponser->links() }}
                    @endif
                </tbody>
                </table>
            </div>
            </div>
        </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">Fund Raisers</h4>
                <p class="card-category">All Fund raisers registered in the system</p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover">
                <thead class="text-warning">
                    <th>ID</th>
                    <th>Fundraiser</th>
                    <th>Amount Collected</th>
                    <th>Registered</th>
                </thead>
                <tbody>
                    @if (count($fundraiser) > 0)
                        @foreach ($fundraiser as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->donation }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                        @endforeach
                        
                    @endif
                        {{ $fundraiser->links() }}
                </tbody>
                </table>
            </div>
            </div>
        </div>


</div>
    
@endsection