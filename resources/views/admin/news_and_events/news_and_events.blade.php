@extends('layouts.admin')

@section('content')

<div class="row">
    <div class='col-md-12'>
        <div class="card" style="background-color: #D3D3D3">
            <div class="card-header" style="background-color: #D3D3D3">
                <h3> Edit Gallery 1
                    <a href="{{ url('admin/edit_home') }}" class="btn btn-primary btn-sm text-white float-end" class="btn btn-primary" style="background-color: #194B46; color: white">back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/news_and_events') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label>Title</label>
                            <textarea type="text" name="news_title" class="form-control"></textarea>
                            @error('news_title') <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea name="news_description" class="form-control " rows="3"></textarea>
                            @error('news_description') <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="news_image">Upload Background Image</label>
                            <div class="upload-box d-flex justify-content-center align-items-center">
                              <input type="file" id="news_image" name="news_image" class="form-control d-none" accept=".jpg,.jpeg,.png">
                              <div class="text-center">
                                <div class="file-icon mb-2"><img src="{{ asset('assets/img/icon_add.png') }}" style="width: 30px; height: 30px"></div>
                                <p>Upload Image</p>
                                <input type="file" name="news_image" class="form-control" required/>
                              </div>
                            </div>
                          </div>
                          {{-- <div class="col-md-6 mb-3">
                            <label ></label>
                            <div class="upload-box d-flex justify-content-center align-items-center" >
                              <div class="text-center">
                                <p>Click here to edit the gallery</p>
                                <a href="{{ url('admin/news_and_events/gallery/gallery') }}" class="btn btn-primary" style="background-color: #194B46; color: white">Edit</a>
                            </div>
                            </div>
                          </div> --}}
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary" style="background-color: #194B46; color: white">Save</button>
                                <a href="{{ url('admin/edit_home') }}" class="btn btn-primary mx-2" style="background-color: #194B46; color: white">Cancel</a>
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
{{-- @section('scripts')
<script type="text/javascript">

    var maxFilesizeVal = 12;
    var maxFilesVal = 2;

    // Note that the name "myDragAndDropUploader" is the camelized id of the form.
    Dropzone.options.myDragAndDropUploader = {

        paramName:"file",
        maxFilesize: maxFilesizeVal, // MB
        maxFiles: maxFilesVal,
        resizeQuality: 1.0,
        acceptedFiles: ".jpeg,.jpg,.png,.webp",
        addRemoveLinks: false,
        timeout: 60000,
        dictDefaultMessage: "Drop your files here or click to upload",
        dictFallbackMessage: "Your browser doesn't support drag and drop file uploads.",
        dictFileTooBig: "File is too big. Max filesize: "+maxFilesizeVal+"MB.",
        dictInvalidFileType: "Invalid file type. Only JPG, JPEG, PNG are allowed.",
        dictMaxFilesExceeded: "You can only upload up to "+maxFilesVal+" files.",
        maxfilesexceeded: function(file) {
            this.removeFile(file);
            // this.removeAllFiles();
        },
        sending: function (file, xhr, formData) {
            $('#message').text('Image Uploading...');
        },
        success: function (file, response) {
            $('#message').text(response.success);
            console.log(response.success);
            console.log(response);
        },
        error: function (file, response) {
            $('#message').text('Something Went Wrong! '+response);
            console.log(response);
            return false;
        }
    };
</script>
@endsection --}}
