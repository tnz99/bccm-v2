@extends('layouts.admin')

@section('content')

@if (session('message'))
<div class="alert alert-success">{{ session('message') }}</div>
@endif

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add new page</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <form id="NewPageFormRequest" action="edit_home" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="page_title" class="col-form-label">title</label>
                        <input type="text" name="page_title" class="form-control" id="title">
                        {{-- @error('title') <small class="text-danger">{{ $message }}</small>
                        @enderror --}}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #194B46; color: white">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class='col-md-20' style="background-color: #D3D3D3; padding: 20px; border-radius: 10px">
    <div class="card">
        <div class="card-header" style="background-color: #D3D3D3">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" style="color: black; margin-left:5px" href="#">Content</a>


                <form class="form-inline my-2 my-lg-0 d-flex justify-content-between w-75" method="GET" action="{{ route('edit_home') }}">
                    <div class="input-group input-group-search mx-auto">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search" aria-describedby="search-button-addon" name="search" value="{{ $search ?? '' }}">
                        <span class="input-group-append">
                            <button type="submit" class="btn btn-light" id="search-button-addon">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </span>
                    </div>
                </form>

                <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 20px; margin-right: 10px; background-color: #194B46; color: white">Create new page</button>
                </div>
            </nav>
        </div>

    @if (@session('status'))
        <div class="alert alert-success" role='alert'>
            {{ session('status') }}
        </div>
    @endif
    @if (@session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
        <div class="card-body" style="background-color: #D3D3D3">
            <table class="table table-bordered table-striped" style="background-color: white; border-spacing: 10px; border-radius: 30px;">
                <thead style="background-color: #194B46; color: white">
                    <tr>
                        <th scope="col " style="width: 70%">Title</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($new_page as $key => $data)

                    <tr>
                        <td><strong>{{ $data->page_title }}</strong></td>
                        <td style="display: flex; align-items: center;">
                            @if($key < 6)
                                @if($key == 0)
                                    <a href="{{ url('admin/edit_home/home_create') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 5%">Edit</a>
                                @elseif($key == 1)
                                    <a href="{{ url('admin/about_us/about_create') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 5%">Edit</a>
                                @elseif($key == 2)
                                    <a href="{{ url('admin/news_and_events/gallery/gallery') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 5%">Edit</a>
                                @elseif($key == 3)
                                    <a href="{{ url('admin/contact/contact') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 5%">Edit</a>
                                @elseif($key == 4)
                                    <a href="{{ url('admin/story/stories') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 5%">Edit</a>
                                @elseif($key == 5)
                                    <a href="{{ url('#') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 5%">Edit</a>
                                @endif
                            @else
                                <a href="" class="btn btn-sm btn-success" style="background-color: #194B46; color: white">Edit</a>
                                @if ($key >= 6)
                                    <form action="{{ route('admin.edit_home.home_create', $data->page_title_id) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this story?');">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm btn-danger" style="margin-left: 5px;">Delete</button>
                                    </form>
                                @endif
                            @endif
                        </td>
                    </tr>
                @endforeach


                    {{-- <tr>
                        <td><strong>Home</strong></td>
                        <td>
                            <a href="{{ url('admin/edit_home/home_create') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 15%">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>About Us</strong></td>
                        <td>
                            <a href="{{ url('admin/about_us/about_create') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 15%">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>News and Events</strong></td>
                        <td>
                            <a href="{{ url('admin/news_and_events/news_and_events') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 15%">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Contact</strong></td>
                        <td>
                            <a href="{{ url('admin/contact/contact') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 15%">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Story</strong></td>
                        <td>
                            <a href="{{ url('admin/story/stories') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 15%">Edit</a>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Donate</strong></td>
                        <td>
                            <a href="#" class="btn btn-sm btn-success" style="background-color: #194B46; color: white; margin-left: 15%">Edit</a>
                        </td>
                    </tr> --}}

                    {{-- @foreach ($new_page as $data)
                        <tr>
                            <td><strong>{{ $data->page_title }}</strong></td>
                            <td>
                                <div style="display: flex; align-items: center;">
                                    <a href="{{ url('admin/edit_home/home_create') }}" class="btn btn-sm btn-success" style="background-color: #194B46; color: white">Edit</a>
                                    <form action="{{ url('/admin/edit_home', ['id' => $data->id]) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-sm btn-danger" style="margin-left: 5px;">Delete</button>
                                    </form>

                                </div>
                            </td>


                        </tr>
                    @endforeach --}}
                    @if (!empty($searchMessage))
                        <p>{{ $searchMessage }}</p>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

