<div>
    <div class="d-flex align-items-center justify-content-between">
        <div>
            <h6 class="text-muted mb-1">Welcome back, {{ Auth::user()->name }}</h6>
            <h5 class="mb-0">Dashboard</h5>
        </div>

        <div class="mb-0 position-relative">
            <select class="form-select form-control" id="dailychart" wire:model.live.debounce.300ms='date'>
                <option value="today">Today</option>
                <option value="month">This Month</option>
                <option value="year">This Year</option>
            </select>
        </div>
    </div>
    <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1">
        <div class="col mt-4">
            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-user-circle fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Register</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">{{ $todayRegistrations }}</p>
                    </div>
                </div>
            </a>
        </div><!--end col-->
        
        <div class="col mt-4">
            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-usd-circle fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Borrow</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">{{ $borrows }}</p>
                    </div>
                </div>
            </a>
        </div><!--end col-->
        
        <div class="col mt-4">
            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-shopping-bag fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Returned</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">{{ $returned }}</p>
                    </div>
                </div>
            </a>
        </div><!--end col-->
        
        <div class="col mt-4">
            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-store fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Books</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">{{ $totalBooks }}</p>
                    </div>
                </div>
            </a>
        </div><!--end col-->
        
        <div class="col mt-4">
            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                <div class="d-flex align-items-center">
                    <div class="icon text-center rounded-pill">
                        <i class="uil uil-users-alt fs-4 mb-0"></i>
                    </div>
                    <div class="flex-1 ms-3">
                        <h6 class="mb-0 text-muted">Users</h6>
                        <p class="fs-5 text-dark fw-bold mb-0">{{ $totalUser }}</p>
                    </div>
                </div>
            </a>
        </div><!--end col-->
    </div><!--end row-->
    <div class="row">
        <div class="col-xl-8 col-lg-7 mt-4">
            <div class="card shadow border-0 p-4 pb-0 rounded">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-0 fw-bold">Analytics</h6>
                </div>
                <livewire:component.line-chart />
            </div>
        </div><!--end col-->

        <div class="col-xl-4 col-lg-5 mt-4 rounded">
            <div class="card shadow border-0">
                <div class="p-4 border-bottom">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-0 fw-bold">Late Return Book</h6>
                        
                        <a href="#!" class="text-primary">See More <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>

                <div class="p-4" data-simplebar style="height: 365px;">
                    @foreach ($lateReturn as $item)   
                        <a href="javascript:void(0)" class="features feature-primary key-feature d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="icon text-center rounded-circle me-3">
                                    <i class="ti ti-users"></i>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mb-0 text-dark">{{ $item->user->name }}</h6>
                                    <small class="text-muted">{{ $item->date_return }}</small>
                                </div>
                            </div>
                            <i class="ti ti-arrow-up text-warning"></i>
                        </a>
                    @endforeach
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>