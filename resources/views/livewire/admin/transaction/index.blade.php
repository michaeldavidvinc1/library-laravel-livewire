<div>
    @include('sweetalert::alert')
    <div class="d-md-flex justify-content-between align-items-center pb-4">
        <h5 class="mb-0">Transaction List</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Transaction</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="component-wrapper rounded shadow">
                <div class="p-4 border-bottom d-flex gap-2">
                    <div class="col-3">
                        <label class="description">Start Date <span class="text-danger">*</span></label>
                        <input type="date" wire:model.live.debounce.300ms='startDate' class="form-control"
                            placeholder="Search ....">
                    </div>
                    <div class="col-3">
                        <label class="description">End Date <span class="text-danger">*</span></label>
                        <input type="date" wire:model.live.debounce.300ms='endDate' class="form-control"
                            placeholder="Search ....">
                    </div>
                </div>

                <div class="p-4">
                    <div class="table-responsive bg-gray shadow rounded">
                        <table class="table mb-0 table-center">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-bottom">No</th>
                                    <th scope="col" class="border-bottom">Title Book</th>
                                    <th scope="col" class="border-bottom">User</th>
                                    <th scope="col" class="border-bottom">Status</th>
                                    <th scope="col" class="border-bottom">Date Borrow</th>
                                    <th scope="col" class="border-bottom">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transactions as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->book_item->book->title }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>
                                        @php
                                            switch ($item->status) {
                                                case 'DECLINE':
                                                    $badgeClass = 'badge bg-danger bg-glow';
                                                    $statusLabel = 'Decline';
                                                    break;
                                                case 'APPROVE':
                                                    $badgeClass = 'badge bg-success bg-glow';
                                                    $statusLabel = 'Approve';
                                                    break;
                                                case 'WAITING':
                                                    $badgeClass = 'badge bg-secondary bg-glow';
                                                    $statusLabel = 'Waiting';
                                                    break;
                                            }
                                            @endphp
                                            <span class="{{ $badgeClass }}">{{ $statusLabel }}</span>
                                    </td>
                                    <td>@php
                                        $created_at = new DateTime($item->created_at);
                                        echo $created_at->format('Y-m-d H:i:s');
                                    @endphp</td>
                                    <td>
                                        @if($item->status == 'WAITING')
                                            <button wire:click='approve({{ $item->id }})' class="btn btn-sm btn-success">Approve</button>
                                            <button wire:click='decline({{ $item->id }})' class="btn btn-sm btn-danger">Decline</button>
                                        @else
                                            @php
                                                $created_at = new DateTime($item->updated_at);
                                                echo $created_at->format('Y-m-d H:i:s');
                                            @endphp
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mt-3 px-3">
                            <p>Showing {{ $transactions->firstItem() }} to {{ $transactions->lastItem() }} of {{
                                $transactions->total() }} entries</p>
                            {{ $transactions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>