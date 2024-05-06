<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset("admin/vendors/mdi/css/materialdesignicons.min.css") }}">
    <link rel="stylesheet" href="{{ asset("admin/vendors/base/vendor.bundle.base.css") }}">

    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset("admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css") }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset("admin/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("resources/css/app.css") }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset("admin/images/favicon.png") }}" />

</head>
<body>
    <div class="container-scroller">
        @include('layouts.inc.admin.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.inc.admin.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset("admin/vendors/base/vendor.bundle.base.js") }}"></script>
    <script src="{{ asset("admin/vendors/datatables.net/jquery.dataTables.js") }}"></script>
    <script src="{{ asset("admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js") }}"></script>

    <script src="{{ asset("admin/js/off-canvas.js") }}"></script>
    <script src="{{ asset("admin/js/hoverable-collapse.js") }}"></script>
    <script src="{{ asset("admin/js/template.js") }}"></script>

    <!-- Custom js for this page-->
    <script src="{{ asset("admin/js/dashboard.js") }}"></script>
    <script src="{{ asset("admin/js/data-table.js") }}"></script>
    <script src="{{ asset("admin/js/jquery.dataTables.js") }}"></script>
    <script src="{{ asset("admin/js/dataTables.bootstrap4.js") }}"></script>
    <script src="{{ asset('admin/js/tinymce.min.js') }}" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: ".textarea",  // Use a more specific selector if needed
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
          $(".mySummernote").summernote({
            height: 250,
            toolbar: [
              // Font Styles
              [ 'style', [ 'style' ] ],
              [ 'font', [ 'bold', 'italic', 'underline', 'clear' ] ],
              // Font Size & Family (optional)
              [ 'fontsize', [ 'fontsize' ] ],
              [ 'fontname', [ 'fontname' ] ],
              // Paragraph Formatting
              [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
              // Text Color
              [ 'color', [ 'color' ] ],

            ]
          });
          $('.dropdown-toggle').dropdown();
        });
      </script>
      <script>
        $(document).ready(function() {
          $(".titleSummernote").summernote({
            height: 60,
            toolbar: [
              // Font Styles
              [ 'style', [ 'style' ] ],
              [ 'font', [ 'bold', 'italic', 'underline' ] ],
              // Font Size & Family (optional)
              [ 'fontsize', [ 'fontsize' ] ],
              [ 'fontname', [ 'fontname' ] ],
              [ 'color', [ 'color' ] ],

            ]
          });
          $('.dropdown-toggle').dropdown();
          $('.mySummernote').summernote('codeview', false);
        });
      </script>

    <!-- End custom js for this page-->

</body>
</html>

