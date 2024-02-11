<div>
    @include('sweetalert::alert')
    <div class="d-md-flex justify-content-between align-items-center pb-4">
        <h5 class="mb-0">Users List</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Users</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="component-wrapper rounded shadow">
                <div class="p-4 border-bottom d-flex justify-content-between">
                    <div class="col-4">
                        <input type="search" wire:model.live.debounce.300ms='search' class="form-control" placeholder="Search ....">
                    </div>
                    <div>
                        <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"> <i class="mdi mdi-plus"></i>
                            Add</a>
                    </div>
                </div>

                <div class="p-4">
                    <div class="table-responsive bg-gray shadow rounded">
                        <table class="table mb-0 table-center">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-bottom">No</th>
                                    <th scope="col" class="border-bottom">Name</th>
                                    <th scope="col" class="border-bottom">Email</th>
                                    <th scope="col" class="border-bottom">Role</th>
                                    <th scope="col" class="border-bottom">Status</th>
                                    <th scope="col" class="border-bottom">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as  $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->role }}</td>
                                        <td>
                                            @php
                                                switch ($item->status) {
                                                    case 'NONACTIVE':
                                                        $badgeClass = 'badge bg-danger bg-glow';
                                                        $statusLabel = 'Nonactive';
                                                        break;
                                                    case 'ACTIVE':
                                                        $badgeClass = 'badge bg-success bg-glow';
                                                        $statusLabel = 'Active';
                                                        break;
                                                }
                                            @endphp
                                            <span class="{{ $badgeClass }}">{{ $statusLabel }}</span>
                                        </td>
                                        <td style="white-space: nowrap;">
                                            <a href="{{ route('users.edit', $item->id) }}"
                                                class="btn btn-icon btn-sm btn-outline-warning"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a wire:click.prevent="delete({{ $item->id }})"
                                                class="btn btn-icon btn-sm btn-outline-danger" data-confirm-delete="true"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mt-3 px-3">
                            <p>Showing {{ $users->firstItem() }} to {{ $users->lastItem() }} of {{
                                $users->total() }} entries</p>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>