<div>
    @include('sweetalert::alert')
    <div class="d-md-flex justify-content-between align-items-center pb-4">
        <h5 class="mb-0">Fines List</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Fines</li>
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
                                    <th scope="col" class="border-bottom">Date Loan</th>
                                    <th scope="col" class="border-bottom">Amount</th>
                                    <th scope="col" class="border-bottom">Status</th>
                                    <th scope="col" class="border-bottom">Deadline</th>
                                    <th scope="col" class="border-bottom">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fines as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        @php
                                                $date_return = new DateTime($item->loan->created_at);
                                                echo $date_return->format('Y-m-d H:i:s');
                                        @endphp
                                    </td>
                                    <td>Rp {{ number_format($item->amount, 0, ',', '.') }}</td>
                                    <td>
                                        @php
                                            switch ($item->status) {
                                                case 'UNPAID':
                                                    $badgeClass = 'badge bg-danger bg-glow';
                                                    $statusLabel = 'Unpaid';
                                                    break;
                                                case 'PAID':
                                                    $badgeClass = 'badge bg-success bg-glow';
                                                    $statusLabel = 'Paid';
                                                    break;
                                            }
                                            @endphp
                                            <span class="{{ $badgeClass }}">{{ $statusLabel }}</span>
                                    </td>
                                    <td>
                                        @php
                                                $date_return = new DateTime($item->deadline);
                                                echo $date_return->format('Y-m-d H:i:s');
                                        @endphp
                                    </td>
                                    <td>
                                        @if($item->status == 'UNPAID')
                                            <button wire:click='paid({{ $item->id }})' class="btn btn-sm btn-success">Paid</button>
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
                            <p>Showing {{ $fines->firstItem() }} to {{ $fines->lastItem() }} of {{
                                $fines->total() }} entries</p>
                            {{ $fines->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCategory" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title" id="LoginForm-title">Add Category</h5>
                    <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i
                            class="uil uil-times fs-4 text-dark"></i></button>
                </div>
                <div class="modal-body">
                    <div class="p-4">
                        <label class="name">Category Name <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Enter category" class="form-control @error('description')
                        border border-danger
                    @enderror" wire:model='name'>
                        @error('name')
                        <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"
                        id="close-modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" wire:click='store'>Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="p-4">
                        <label class="name">Category Name <span class="text-danger">*</span></label>
                        <input type="text" placeholder="Enter category" class="form-control @error('description')
                        border border-danger
                    @enderror" wire:model='name'>
                        @error('name')
                        <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-sm btn-primary" wire:click='update'>Update</button>
                </div>
            </div>
        </div>
    </div>
</div>