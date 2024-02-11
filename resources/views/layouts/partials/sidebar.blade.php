<nav id="sidebar" class="sidebar-wrapper sidebar-dark">
    <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
        <div class="sidebar-brand">
            <a href="index.html" class="d-flex justify-content-center align-items-center">
                <h5 class="text-white">LibraSync</h5>
            </a>
        </div>

        <ul class="sidebar-menu">
            <li class="sidebar">
                <a href="{{ route('dashboard.page') }}"><i class="ti ti-home me-2"></i>Dashboard</a>
            </li>
            <li class="sidebar-dropdown">
                <a href="javascript:void(0)"><i class="ti ti-browser me-2"></i>Book</a>
                <div class="sidebar-submenu">
                    <ul>
                        <li><a href="{{ route('category.page') }}">Category List</a></li>
                        <li><a href="{{ route('book.page') }}">Book List</a></li>
                    </ul>
                </div>
            </li>
            <li class="sidebar">
                <a href="{{ route('transaction.page') }}"><i class="ti ti-printer me-2"></i>Transaction</a>
            </li>
            <li class="sidebar">
                <a href="{{ route('loan.page') }}"><i class="ti ti-archive me-2"></i>Loan</a>
            </li>
            <li class="sidebar">
                <a href="{{ route('fines.page') }}"><i class="ti ti-cash me-2"></i>Fines</a>
            </li>
            <li class="sidebar">
                <a href="{{ route('users.page') }}"><i class="ti ti-user me-2"></i>Users</a>
            </li>
        </ul>
        <!-- sidebar-menu  -->
    </div>
</nav>