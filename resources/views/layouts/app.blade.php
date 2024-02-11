

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>{{ $title ?? 'LibraSync' }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/logo.svg">
        <!-- Css -->
        <link href="{{ asset('assets/admin/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/admin/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/admin/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="{{ asset('assets/admin/css/style.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        

    </head>

    <body>
        
        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            @include('layouts.partials.sidebar')
            <!-- sidebar-wrapper  -->   

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                <!-- Top Header -->
                @include('layouts.partials.header')
                <!-- Top Header -->

                <div class="container-fluid">
                    <div class="layout-specing">
                        {{ $slot }}
                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
                @include('layouts.partials.footer')
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->
        
        <!-- javascript -->
        @livewireScripts
        @stack('js')
        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/admin/libs/apexcharts/apexcharts.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ asset('assets/admin/js/plugins.init.js') }}"></script>
        <script src="{{ asset('assets/admin/js/app.js') }}"></script>

        <!-- Include jQuery from CDN -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
        <script>
            @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'warning':
    
                toastr.options.timeOut = 10000;
                toastr.warning("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();
    
                break;
                case 'error':
    
                toastr.options.timeOut = 10000;
                toastr.error("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();
    
                break;
                case 'success':
    
                toastr.options.timeOut = 10000;
                toastr.success("{{ Session::get('message') }}");
    
                break;
            }
            @endif
        </script>
    
        <script>
            window.addEventListener('show-delete-confirmation', event => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                }).then((result) => {
            if (result.isConfirmed) {
                        Livewire.dispatch('delete')
                    }
                });
            })
        
        </script>
    </body>

</html>