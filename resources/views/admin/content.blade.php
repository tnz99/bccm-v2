@extends('layouts.admin')

@section('content')
@if (session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif
{{-- <nav class="navbar navbar-expand-lg navbar-dark"> --}}
    <div class='col-md-20' style="background-color: #D3D3D3">
        <div class="card">
            <div class="card-header" style="background-color: #D3D3D3">
                <nav class="navbar navbar-expand-lg navbar-dark" >
                    <a class="navbar-brand" style="color: black; margin-left:5px" href="#">Content</a>
                    <form class="form-inline my-2 my-lg-0 d-flex justify-content-between w-75" >
                        <div class="input-group input-group-search mx-auto">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="search-button-addon" >
                            <span class="input-group-append">
                              <button type="button" class="btn btn-light" id="search-button-addon">
                                <i class="mdi mdi-magnify"></i> </button>
                            </span>
                          </div>
                    </form>
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="{{ url('admin/edit_home/home_create') }}" class="btn btn-primary" style="margin-left: 20px; margin-right: 10px; background-color: #194B46; color: white">Create new page</a>

                    </div>
                    </div>
                </form>
                </span>
                 </nav>
                {{-- <h3> Content
                    <form class="form-inline my-2 my-lg-0 d-flex justify-content-between w-75" style="margin-left:11%; margin-top:-10px">
                            <input type="search" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="search-button-addon" >
                            <span class="input-group-append">
                              <button type="button" class="btn btn-light" id="search-button-addon">
                                <i class="mdi mdi-magnify"></i> </button>
                            </span>
                    </form>
                    <a href="{{ url('admin/edit_home/create') }}" class="btn btn-primary btn-sm float-end">Add Category</a>
                </h3> --}}
            </div>
            <div class="card-body">

            </div>
        </div>

    </div>
</div>
{{-- </nav> --}}
@endsection
