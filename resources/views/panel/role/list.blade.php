@extends('panel.layouts.app')

@section('content')
<!-- <style>
th {
   
    padding: 8px;
    text-align: left;
}

/* Style the table data cells */
td {
    border-left: 1px solid black;
    border-right: 1px solid black;
    padding: 8px;
    text-align: left;
}
</style> -->
<div class="pagetitle d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Role</h1>

    <!-- <div class="search-bar mr-2">
        <form class="search-form position-relative" method="POST" action="#">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Search..."
                    title="Enter search keyword" style="width: 600px;">
                <button type="submit" title="Search" class="btn btn-primary-custom position-absolute end-0"
                    style="top: 50%; transform: translateY(-50%);"><i class="bi bi-search"></i></button>
            </div>
        </form>
    </div> -->

    <div>
        <a href="{{ url('panel/role/add') }}" class="btn btn-primary">
            <i class="bi bi-person-plus"></i> Add Role
        </a>
    </div>

</div>



<section class="section">
    <div class="row">


        <div class="col-lg-10">
            @include('_message')

            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">Role List</h5> -->

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getRecord as $value)
                            <tr>
                                <th scope="row">{{ $value->id }}</th>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->created_at }}</td>
                                <td>
                                    <a href="{{ url('panel/role/edit/' .$value->id) }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i>

                                    </a>
                                    <a href="{{ url('panel/role/delete/' .$value->id) }}" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </a>
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