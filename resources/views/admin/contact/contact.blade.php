@extends('layouts.admin')

@section('content')

<div class="row">
    <div class='col-md-12'>
        <div class="card" style="background-color: #D3D3D3">
            <div class="card-header" style="background-color: #D3D3D3">
                <h3> Edit Contact Page
                    <a href="{{ url('/admin/edit_home') }}" class="btn btn-primary btn-sm text-white float-end" class="btn btn-primary" style="background-color: #194B46; color: white">back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/contact') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label>Title</label>
                            <textarea type="text" name="contact_title" class="form-control"></textarea>
                            @error('contact_title') <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label>Description</label>
                            <textarea name="contact_description" class="form-control" rows="3"></textarea>
                            @error('contact_description') <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contact_image">Upload Background Image</label>
                            <div class="upload-box d-flex justify-content-center align-items-center">
                              <input type="file" id="contact_image" name="contact_image" class="form-control d-none" accept=".jpg,.jpeg,.png">
                              <div class="text-center">
                                <div class="file-icon mb-2"><img src="{{ asset('assets/img/icon_add.png') }}" style="width: 30px; height: 30px"></div>
                                <p>Upload Image</p>
                                <input type="file" name="contact_image" class="form-control" required/>
                              </div>
                            </div>
                          </div>
                        {{-- <div class="col-md-6 mb-3">
                            <label>Upload Background Image</label>

                            <div class="bg-white p-5 rounded shadow-sm border">
                                <div class="dropzone d-block">
                                <label for="files" class="dropzone-container d-flex flex-column align-items-center">
                                    <div class="file-icon mb-2"><img src="{{ asset('assets/img/icon_add.png') }}" style="width: 30px; height: 30px"></div>

                                    <div class="text-center">
                                    <p class="w-100 h5 text-dark fw-bold mb-3">Drag and drop to upload</p>
                                    <div class="hr-sect mb-3">or</div>

                                    <div class="text-center">
                                        <input type="file" id="files" name="image" class="form-control d-none" accept=".jpg,.jpeg,.png">
                                        <label for="files" class="btn btn-primary">Browse Files</label>
                                    </div>
                                    </div>
                                </label>
                                </div>
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
