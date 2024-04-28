@extends('layouts.app')
@section('content')
<main>
<div class="container-fluid px-4">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-4" style="font-size: 1.5rem;">Edit Climate</h1>
        <form class="form-inline">
            <div class="input-group">
                <input class="form-control" type="text" style="width: 300px;" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                <button class="btn btn-success ms-2" type="button"><i class="fas fa-plus"></i> Create New Page</button>
            </div>
        </form>
    </div>
    <div class="mt-4">
        <form>
            <div class="row">
                <div class="col">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="col">
                    <label for="subtitle">Sub-Title</label>
                    <input type="text" class="form-control" id="subtitle" name="subtitle">
                </div>
            </div>
            <div class="container-fluid py-4">
                <label for="upload">Upload Background Image/Video</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="upload" name="upload">
                        <label class="custom-file-label" for="upload"></label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-upload"></i></span>
                    </div>
                </div>
                <div class="mt-2">
                    <button type="button" class="btn btn-danger" id="clearUpload"><i class="fas fa-times"></i></button>
                </div>
                
            </div>
        
        </form>
        <div class="container-fluid py-4 ml-5">
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            <button type="cancel" class="btn btn-primary mt-4">Cancel</button>
        </div>
    </div>
</div>
</main>

<script>
    // JavaScript to clear file input field
    document.getElementById('clearUpload').addEventListener('click', function() {
        var uploadInput = document.getElementById('upload');
        uploadInput.value = ''; // Clear the input value
        uploadInput.nextElementSibling.innerText = 'Choose file'; // Reset the label text
    });
</script>
@endsection
