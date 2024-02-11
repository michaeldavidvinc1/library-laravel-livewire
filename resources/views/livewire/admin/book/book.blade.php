<div>
    @include('sweetalert::alert')
    <div class="d-md-flex justify-content-between align-items-center pb-4">
        <h5 class="mb-0">Book List</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Book</li>
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
                        <a href="{{ route('book.create') }}" class="btn btn-primary btn-sm"> <i class="mdi mdi-plus"></i>
                            Add</a>
                    </div>
                </div>

                <div class="p-4">
                    <div class="table-responsive bg-gray shadow rounded">
                        <table class="table mb-0 table-center">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-bottom">No</th>
                                    <th scope="col" class="border-bottom">Title</th>
                                    <th scope="col" class="border-bottom">Author</th>
                                    <th scope="col" class="border-bottom">Category</th>
                                    <th scope="col" class="border-bottom">Publisher</th>
                                    <th scope="col" class="border-bottom">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $key => $book)
                                @php
                                    $currentBookId = $book->id;
                                @endphp
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td data-bs-toggle="modal" data-bs-target="#login-popup" wire:click='loadBookData({{ $book->id }})'><a href="#">{{ $book->title
                                            }}</a></td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->publisher }}</td>
                                    <td style="white-space: nowrap;">
                                        <a href="{{ route('book.edit', $book->id) }}"
                                            class="btn btn-icon btn-sm btn-outline-warning"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <a wire:click.prevent="delete({{ $book->id }})"
                                            class="btn btn-icon btn-sm btn-outline-danger" data-confirm-delete="true"><i
                                                class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mt-3 px-3">
                            <p>Showing {{ $books->firstItem() }} to {{ $books->lastItem() }} of {{ $books->total() }} entries</p>
                            {{ $books->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div wire:ignore.self class="modal fade" id="login-popup" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content rounded shadow border-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Book Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                    <div class="p-4">
                        <div class="table-responsive bg-gray shadow rounded">
                            <table class="table mb-0 table-center">
                                <thead>
                                    <tr>
                                        <th scope="col" class="border-bottom">No</th>
                                        <th scope="col" class="border-bottom">Title</th>
                                        <th scope="col" class="border-bottom">Last Loan</th>
                                        <th scope="col" class="border-bottom">Status</th>
                                        <th scope="col" class="border-bottom">Last Action</th>
                                        <th scope="col" class="border-bottom">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookItem as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key+1 }}</th>
                                        <td>{{ $item->book->title }}</td>
                                        <td>{{ $item->user->name ?? 'Not Borrowed' }}</td>
                                        <td>
                                            @php
                                            switch ($item->status) {
                                                case 'BROKEN':
                                                    $badgeClass = 'badge bg-danger bg-glow';
                                                    $statusLabel = 'Broken';
                                                    break;
                                                case 'AVAILABLE':
                                                    $badgeClass = 'badge bg-success bg-glow';
                                                    $statusLabel = 'Available';
                                                    break;
                                                case 'NONAVAILABLE':
                                                    $badgeClass = 'badge bg-warning bg-glow';
                                                    $statusLabel = 'Nonavailable';
                                                    break;
                                                default:
                                                    $badgeClass = 'badge bg-secondary bg-glow';
                                                    $statusLabel = $item->status;
                                            }
                                            @endphp
                                            <span class="{{ $badgeClass }}">{{ $statusLabel }}</span>
                                        </td>
                                        <td>
                                            @php
                                                $updatedAt = new DateTime($item->updated_at);
                                                echo $updatedAt->format('Y-m-d H:i:s');
                                            @endphp
                                        </td>
                                        <td>
                                            <a wire:click="deleteBookItem({{ $item->id }})"
                                                class="btn btn-icon btn-sm btn-outline-danger" data-confirm-delete="true"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>