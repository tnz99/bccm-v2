@extends('panel.layouts.app')

@section('content')
<!-- <div class="pagetitle">
    <h1>Add New Admin </h1>
</div> -->

<section class="section">
    <div class="row">
        <div class="col-lg-10" style="margin: 0 auto;">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> Edit Admin</h5>

                    <!-- General Form Elements -->
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label"> Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ $getRecord->name }}" required class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ $getRecord->email }}" readonly class="form-control">
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text"  name="password"  class="form-control">
                                (Do you want to  change password please add)
                            </div>
                        </div>

                        <!-- <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="confirmpassword" required class="form-control">
                            </div>
                        </div> -->

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="role_id" requird>
                                    <option value="">Select</option>
                                    @foreach($getRole as $value)
                                    <option {{ ($getRecord->role_id == $value->id) ? 'selected' : ''}} value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <div class="col-sm-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>


                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>


    </div>
</section>

@endsection