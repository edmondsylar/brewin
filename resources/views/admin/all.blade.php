@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">Create a Blog Post</h4>
                <p class="card-category">Add blog posts to presented in the news section</p>
            </div>
            <div class="card-body table-responsive">
                
                <form action="{{ url('/blog') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Blog Title</label>
                            <input type="text" name="title" required class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Blog Image Url</label>
                            <input type="text" name="image" required class="form-control">
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Blog Content</label>
                            <textarea required name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn  pull-right">Post Blog</button>
                    <div class="clearfix"></div>
                </form>

                </div>
            </div>
        </div>
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">Add Fund raiser</h4>
                <p class="card-category">Add Fund raiser History</p>
            </div>
            <div class="card-body table-responsive">
                
                <form action="{{ url('/fund') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Fundraiser Title</label>
                            <input type="text" name="title" required class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Funds Collected</label>
                            <input type="text" name="donation" required class="form-control">
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Simple Fundraiser details</label>
                            <textarea required name="desctiption" id="" cols="auto" rows="10" class="form-control"></textarea>
                        </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn  pull-right">Submit Data</button>
                    <div class="clearfix"></div>
                </form>

                </div>
            </div>
        </div>
    
        <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title">Add Sponser</h4>
                <p class="card-category">Add the Different Brewin foundation sponsers below</p>
            </div>
            <div class="card-body table-responsive">
                
                <form action="{{ url('/sponser') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Fundraiser Title</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Simple Fundraiser details</label>
                            <textarea required name="description" id="" cols="auto" rows="10" class="form-control"></textarea>
                        </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn  pull-right">Create Sponser</button>
                    <div class="clearfix"></div>
                </form>

                </div>
            </div>
        </div>

    </div>
    
@endsection

