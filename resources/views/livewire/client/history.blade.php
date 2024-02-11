<div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-4 pt-2">
                    <ul class="nav nav-pills nav-justified flex-column rounded shadow p-3 mb-0 sticky-bar"
                        id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded active" id="webdeveloping" data-bs-toggle="pill"
                                href="#developing" role="tab" aria-controls="developing" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Transaction</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->

                        <li class="nav-item mt-2">
                            <a class="nav-link rounded" id="database" data-bs-toggle="pill" href="#data-analise"
                                role="tab" aria-controls="data-analise" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Loan</h6>
                                </div>
                            </a>
                            <!--end nav link-->
                        </li>
                        <!--end nav item-->
                    </ul>
                    <!--end nav pills-->
                </div>
                <!--end col-->

                <div class="col-md-9 col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active p-4 rounded shadow" id="developing" role="tabpanel"
                            aria-labelledby="webdeveloping">
                            <div class="col-12">
                                <div class=" ">
                                    <div class="p-4 border-bottom d-flex gap-2">
                                        <div class="col-3">
                                            <label class="description">Start Date <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" wire:model.live.debounce.300ms='startTs'
                                                class="form-control">
                                        </div>
                                        <div class="col-3">
                                            <label class="description">End Date <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" wire:model.live.debounce.300ms='endTs'
                                                class="form-control">
                                        </div>
                                    </div>

                                    <div class="p-4">
                                        <div class="table-responsive bg-gray shadow rounded">
                                            <table class="table mb-0 table-center">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-bottom">No</th>
                                                        <th scope="col" class="border-bottom">Title Book</th>
                                                        <th scope="col" class="border-bottom">Date Submission</th>
                                                        <th scope="col" class="border-bottom">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($transactions as $key => $item)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $item->book_item->book->title}}</td>
                                                        <td>{{ $item->created_at }}</td>
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
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="d-flex justify-content-between mt-3 px-3">
                                                <p>Showing {{ $transactions->firstItem() }} to {{
                                                    $transactions->lastItem() }} of {{
                                                    $transactions->total() }} entries</p>
                                                {{ $transactions->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end teb pane-->

                        <div class="tab-pane fade p-4 rounded shadow" id="data-analise" role="tabpanel"
                            aria-labelledby="database">
                            <div class="col-12">
                                <div class=" ">
                                    <div class="p-4 border-bottom d-flex gap-2">
                                        <div class="col-3">
                                            <label class="description">Start Date <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" wire:model.live.debounce.300ms='startDate'
                                                class="form-control" placeholder="Search ....">
                                        </div>
                                        <div class="col-3">
                                            <label class="description">End Date <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" wire:model.live.debounce.300ms='endDate'
                                                class="form-control" placeholder="Search ....">
                                        </div>
                                    </div>

                                    <div class="p-4">
                                        <div class="table-responsive bg-gray shadow rounded">
                                            <table class="table mb-0 table-center">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="border-bottom">No</th>
                                                        <th scope="col" class="border-bottom">Title Book</th>
                                                        <th scope="col" class="border-bottom">Date Loan</th>
                                                        <th scope="col" class="border-bottom">Date Return</th>
                                                        <th scope="col" class="border-bottom">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($loans as $key => $item )
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $item->transaction->book_item->book->title }}</td>
                                                            <td>{{ $item->created_at }}</td>
                                                            <td>{{ $item->date_return }}</td>
                                                            <td>
                                                                @php
                                                                    switch ($item->status) {
                                                                    case 'NOTRETURNED':
                                                                        $badgeClass = 'badge bg-danger bg-glow';
                                                                        $statusLabel = 'Notreturned';
                                                                    break;
                                                                    case 'RETURNED':
                                                                        $badgeClass = 'badge bg-success bg-glow';
                                                                        $statusLabel = 'Returned';
                                                                    break;
                                                                    }
                                                                @endphp
                                                                <span class="{{ $badgeClass }}">{{ $statusLabel }}</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div class="d-flex justify-content-between mt-3 px-3">
                                                <p>Showing {{ $loans->firstItem() }} to {{ $loans->lastItem() }} of
                                                    {{
                                                    $loans->total() }} entries</p>
                                                {{ $loans->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end teb pane-->
                    </div>
                    <!--end tab content-->
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
</div>