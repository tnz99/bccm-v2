@extends('layouts.app')
@section('content')
<main>
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4" style="font-size: 1.5rem;">Stories</h1>
        <form class="form-inline">
            <div class="input-group">
                <input class="form-control" type="text" style="width: 300px;" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                <button class="btn btn-success ms-2" type="button"><i class="fas fa-plus"></i> Create New Page</button>
            </div>
        </form>
    </div>
    
    <!-- Table -->
    <div class="row mt-4">
        <div class="col">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <div class = " d-flex justify-content-between align-items-center"style="background: #cdcdcd">
                            <th>Title</th>
                            <th>Action</th>
                        </div>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kingdom</td>
                            <td>
                                <button class="btn btn-sm btn-primary" type="button"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>Flora</td>
                            <td>
                                <button class="btn btn-sm btn-primary" type="button"><i class="fas fa-edit"></i> </button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Fauna</td>
                            <td>
                                <button class="btn btn-sm btn-primary" type="button"><i class="fas fa-edit"></i> </button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Climate</td>
                            <td>
                                <a href="{{ url('/climate') }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Change</td>
                            <td>
                                <button class="btn btn-sm btn-primary" type="button"><i class="fas fa-edit"></i></button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Law</td>
                            <td>
                                <button class="btn btn-sm btn-primary" type="button"><i class="fas fa-edit"></i> </button>
                                <button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i> </button>
                            </td>
                        </tr>
                    </td>
                </tr>
                <tr>
                    <td>People</td>
                    <td>
                        <button class="btn btn-sm btn-primary" type="button"><i class="fas fa-edit"></i> </button>
                        <button class="btn btn-sm btn-danger" type="button"><i class="fas fa-trash-alt"></i> </button>
                    </td>
                </tr>
                
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</main>

@endsection