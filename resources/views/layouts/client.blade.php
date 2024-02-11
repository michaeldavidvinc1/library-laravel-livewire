<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'LibraSync' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/logo.svg">

    <!-- Css -->
    <link href="{{ asset('assets/client/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/client/css/bootstrap.min.css') }}" id="bootstrap-style" class="theme-opt"
        rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('assets/client/libs/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/client/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <!-- Style Css-->
    <link href="{{ asset('assets/client/css/style.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet"
        type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')
    <header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo d-flex align-items-center gap-2" href="{{ route('home') }}">
                <img src="{{ asset('assets/logo.svg') }}" height="24" class="logo-light-mode" alt="">
                LibraSync
            </a>
            <!-- Logo End -->

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-inline mb-0">

                <li class="list-inline-item mb-0">
                    <div class="dropdown dropdown-primary">
                        <button type="button" class="btn btn-icon btn-pills btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="user"
                                class="icons"></i></button>
                        <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow rounded border-0 mt-3 py-3"
                            style="width: 200px;">
                            <a class="dropdown-item text-dark" href="{{ route('profile') }}"><i class="uil uil-user align-middle me-1"></i>
                                Account</a>
                            <a class="dropdown-item text-dark" href="{{ route('history') }}"><i class="uil uil-clipboard-notes align-middle me-1"></i>
                                History</a>
                            @if(Auth::check() && Auth::user()->role == 'ADMIN')
                                <a class="dropdown-item text-dark" href="{{ route('dashboard.page') }}"><i
                                    class="uil uil-browser align-middle me-1"></i> Dashboard</a>
                            @endif
                            <div class="dropdown-divider my-3 border-top"></div>
                            <a class="dropdown-item text-dark" href="{{ route('logout') }}"><i
                                    class="uil uil-sign-out-alt align-middle me-1"></i> Logout</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--end container-->
    </header>

    {{ $slot }}

    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 py-lg-5">
                    <div class="footer-py-60 text-center">
                        <a href="#"
                            class="logo-footer d-flex align-items-center gap-2 justify-content-center text-white">
                            <img src="{{ asset('assets/logo.svg') }}" height="32" alt="">
                            LibraSync
                        </a>
                        <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                            <li class="list-inline-item mb-0"><a href="#" target="_blank"
                                    class="rounded"><i class="uil uil-shopping-cart align-middle"
                                        title="Buy Now"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="#" target="_blank"
                                    class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a>
                            </li>
                            <li class="list-inline-item mb-0"><a href="#"
                                    target="_blank" class="rounded"><i class="uil uil-behance align-middle"
                                        title="behance"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="#"
                                    target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle"
                                        title="facebook"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="#"
                                    target="_blank" class="rounded"><i class="uil uil-instagram align-middle"
                                        title="instagram"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="#" target="_blank"
                                    class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a>
                            </li>
                            <li class="list-inline-item mb-0"><a href="#" class="rounded"><i
                                        class="uil uil-envelope align-middle" title="email"></i></a></li>
                        </ul>
                        <!--end icon-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="footer-py-30 footer-bar bg-footer">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <p class="mb-0">© <script>
                                    document.write(new Date().getFullYear())
                                </script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://github.com/michaeldavidvinc1" target="_blank" class="text-reset">MixChell</a>.
                            </p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
    </footer>




    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up"
            class="fea icon-sm icons align-middle"></i></a>
    <!-- Back to top -->

    <!-- Javascript -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/client/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- SLIDER -->
    <script src="{{ asset('assets/client/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('assets/client/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/plugins.init.js') }}"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('assets/client/js/app.js') }}"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->

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
            text: "You wan't borrow this book",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes',
        }).then((result) => {
    if (result.isConfirmed) {
                Livewire.dispatch('loan')
            }
        });
    })

</script>
</body>

</html>