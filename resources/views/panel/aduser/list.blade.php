@extends('panel.layouts.app')

@section('content')

<div class="pagetitle d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Admin</h1>

    <div class="search-bar mr-2">
        <form class="search-form position-relative" method="POST" action="#">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Search..."
                    title="Enter search keyword" style="width: 600px;">
                <button type="submit" title="Search" class="btn btn-primary-custom position-absolute end-0"
                    style="top: 50%; transform: translateY(-50%);"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div>

    <div>
        <a href="{{ url('panel/aduser/add') }}" class="btn btn-primary">
            <i class="bi bi-person-plus"></i> Add Admin
        </a>
    </div>

</div>



<section class="section">
    <div class="row">


        <div class="col-lg-12">
            @include('_message')

            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">Role List</h5> -->

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->role_name }}</td>
                                <td>
                                    <a href="{{ url('panel/aduser/edit/' .$value->id) }}" class="btn btn-primary btn-sm">
                                        Edit </a>
                                    <a href="{{ url('panel/aduser/delete/' .$value->id) }}" class="btn btn-danger btn-sm">
                                        Delete </a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>




        </div>
    </div>
</section>




@endsection