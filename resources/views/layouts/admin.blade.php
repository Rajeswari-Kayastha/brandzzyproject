<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="">

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
        <!-- Icons Css -->
        <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

        <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">

        <link href="{{ asset('admin/css/main.css') }}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{ asset('admin/css/jquery.dataTables.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://unpkg.com/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body data-sidebar="dark">


        <div id="layout-wrapper">
            @include('layouts.admin.header')
            @include('layouts.admin.sidebar')
            <div class="main-content">
                @yield('content')
            </div>
            @include('layouts.admin.footer')
        </div>




        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
        <script src="https://unpkg.com/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
        <script>
            $('#smartwizard').smartWizard({
              transition: {
                animation: 'slideHorizontal', // Effect on navigation, none|fade|slideHorizontal|slideVertical|slideSwing|css(Animation CSS class also need to specify)
              }
            });
           
          </script>
          <script>
            $(document).ready(function () {
            
              $(".productsub").click(function () {
                $(".productsubshow").show();
              });
              $(".packagesub").click(function () {
                $(".packagesubshow").show();
              });
              
            });
          </script>
          <script>
                        $(document).ready(function () {

            $("#pills-profile-tab").click(function () {

            $("#package-table").show();

            $("#service-table").hide();
              });

            $("#pills-home-tab").click(function () {

            $("#package-table").hide();

            $("#service-table").show();

            });

            });
          </script>
        <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

        <!-- apexcharts -->
        <script src="{{ asset('admin/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- dashboard init -->
        <script src="{{ asset('admin/js/pages/dashboard.init.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('admin/js/app.js') }}"></script>

        <script src="{{ asset('admin/js/script.js') }}"></script>

        <script src="{{ asset('toastr/toastr.min.js') }}"></script>

        <script src="{{ asset('js/main.js') }}"></script>

        <script>

            if ("{{ !empty(session('success')) }}") {
        
                successMsg("{{ session('success') }}")
        
            }
        
            if ("{{ !empty(session('error')) }}") {
        
                errorMsg("{{ session('error') }}")
        
            }
        
        </script>
        
        {{-- jquery data tables --}}
        <script src="{{ asset('admin/js/jquery.dataTables.js') }}"></script>

        <script src="https://cdn.tiny.cloud/1/ss76cxjygcq5qya3dy8czrwnbr0muwgm5bl7q10wx9lnkqrp/tinymce/5-stable/tinymce.min.js"></script>
        <script>     
            tinymce.init({
            selector: 'textarea#tiny-editor',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });
        </script>

    </body>
</html>
        