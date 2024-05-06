@extends('panel.layouts.app')

@section('content')


@php
use App\Models\PermissionRoleModel;
$userRole = auth()->user()->role_id;
$isRole = in_array($userRole, [1]); // Assuming role_id 1 is for admin and role_id 2 is for subadmin
@endphp

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

    @if($isRole) <!-- Check if the user is an admin -->
    <div>
        <a href="{{ url('panel/aduser/add') }}" class="btn btn-primary">
            <i class="bi bi-person-plus"></i> Add Admin
        </a>
    </div>
    @endif

</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('_message')

            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                @if($userRole == 1)
                                <!-- Check if the user is an admin -->
                                <th scope="col">Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->role_name }}</td>
                                @if($isRole)
                                <td>
                                    <a href="{{ url('panel/aduser/edit/' .$value->id) }}"
                                        class="btn btn-primary btn-sm">
                                        Edit
                                    </a>
                                    <a href="{{ url('panel/aduser/delete/' .$value->id) }}"
                                        class="btn btn-danger btn-sm">
                                        Delete
                                    </a>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
