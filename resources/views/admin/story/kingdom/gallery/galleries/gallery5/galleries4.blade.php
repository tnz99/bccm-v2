@extends('layouts.admin')

@section('content')

<div class="row">
    <div class='col-md-12'>
        <div class="card" style="background-color: #D3D3D3">
            <div class="card-header" style="background-color: #D3D3D3">
                <h3> Edit Gallery5
                    <a href="{{ url('admin/story/kingdom/gallery/gallery') }}" class="btn btn-primary btn-sm text-white float-end" class="btn btn-primary" style="background-color: #194B46; color: white">back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/story/kingdom/gallery/galleries/gallery5') }}" method="POST" enctype="multipart/form-data">                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Title</label>
                            <textarea type="text" name="kingdom_galleries4_title" class="form-control"></textarea>
                            @error('kingdom_galleries4_title') <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Sub_title</label>
                            <textarea type="text" name="kingdom_galleries4_subtitle" class="form-control"></textarea>
                            @error('kingdom_galleries4_subtitle') <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea name="kingdom_galleries4_description" class="form-control" rows="3"></textarea>
                            @error('kingdom_galleries4_description') <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="kingdom_galleries4_image">Upload Background Image</label>
                            <div class="upload-box d-flex justify-content-center align-items-center" >
                              <input type="file" id="kingdom_galleries4_image" name="kingdom_galleries4_image" class="form-control d-none" accept=".jpg,.jpeg,.png">
                              <div class="text-center">
                                <div class="file-icon mb-2"><img src="{{ asset('assets/img/icon_add.png') }}" style="width: 30px; height: 30px"></div>
                                <p>Upload Image</p>
                                <input type="file" name="kingdom_galleries4_image" class="form-control" required/>
                              </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" style="background-color: #194B46; color: white">Save</button>
                                <a href="{{ url('admin/story/kingdom/gallery/gallery') }}" class="btn btn-primary mx-2" style="background-color: #194B46; color: white">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .upload-box {
        justify-content: center;
        align-items: center;
        height: 200px;
        background-color: white;
        border: 1px solid #ccc;
        padding: 10px;
    }
</style>