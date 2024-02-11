@php
    $transactions = App\Models\Transaction::where('status', 'WAITING')->get();
    use Carbon\Carbon;
@endphp

<div class="top-header">
    <div class="header-bar d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <a href="#" class="logo-icon me-3">
                <img src="assets/logo.svg" height="30" class="small" alt="">
                <span class="big">
                    <img src="assets/logo.svg" height="24" class="logo-light-mode" alt="">
                    <img src="assets/logo.svg" height="24" class="logo-dark-mode" alt="">
                </span>
            </a>
            <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
            </a>
            <div class="search-bar p-0 d-none d-md-block ms-2">
                <div id="search" class="menu-search mb-0">
                    <form role="search" method="get" id="searchform" class="searchform">
                        <div>
                            <input type="text" class="form-control border rounded" name="s" id="s" placeholder="Search Keywords...">
                            <input type="submit" id="searchsubmit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <ul class="list-unstyled mb-0">
            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-icon btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-bell"></i></button>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                        <span class="visually-hidden">New alerts</span>
                    </span>
    
                    <div class="dropdown-menu dd-menu shadow rounded border-0 mt-3 p-0" data-simplebar style="height: 320px; width: 290px;">
                        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                            <h6 class="mb-0 text-dark">Notifications</h6>
                            @if($transactions->count() != 0)
                                <span class="badge bg-soft-danger rounded-pill">{{ $transactions->count() }}</span>
                            @endif
                        </div>
                        <div class="p-3">
                            @foreach ($transactions as $item)
                                <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-circle me-2">
                                            <i class="ti ti-printer"></i>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 text-dark title">{{ $item->book_item->book->title }}</h6>
                                            <small class="text-muted">{{ Carbon::parse($item->created_at)->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </li>

            <li class="list-inline-item mb-0 ms-1">
                <div class="dropdown dropdown-primary">
                    <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/user.jpg') }}" class="avatar avatar-ex-small rounded" alt=""></button>
                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                        <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                            <img src="{{ asset('assets/user.jpg') }}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                            <div class="flex-1 ms-2">
                                <span class="d-block">{{ Auth::user()->name }}</span>
                                <small class="text-muted">{{ Auth::user()->role }}</small>
                            </div>
                        </a>
                        <a class="dropdown-item text-dark" href="{{ route('profile.page') }}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                        <a class="dropdown-item text-dark" href="{{ route('home') }}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-browser"></i></span> Landing Page</a>
                        <div class="dropdown-divider border-top"></div>
                        <a class="dropdown-item text-dark" href="{{ route('logout') }}"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>