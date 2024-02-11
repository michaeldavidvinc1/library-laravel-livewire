<div>
    @include('sweetalert::alert')
    <div class="d-md-flex justify-content-between align-items-center pb-4">
        <h5 class="mb-0">Category List</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Category</li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="component-wrapper rounded shadow">
                <div class="p-4 border-bottom d-flex justify-content-between">
                    <div class="col-4">
                        <input type="search" wire:model.live.debounce.300ms='search' class="form-control"
                            placeholder="Search ....">
                    </div>
                    <div>
                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCategory">
                            <i class="mdi mdi-plus"></i>
                            Add</button>
                    </div>
                </div>

                <div class="p-4">
                    <div class="table-responsive bg-gray shadow rounded">
                        <table class="table mb-0 table-center">
                            <thead>
                                <tr>
                                    <th scope="col" class="border-bottom">No</th>
                                    <th scope="col" class="border-bottom">Name Category</th>
                                    <th scope="col" class="border-bottom">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <button class="btn btn-icon btn-sm btn-outline-warning mr-2"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal"
                                            wire:click='edit({{ $item->id }})'>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                        <a wire:click.prevent="delete({{ $item->id }})" class="btn btn-icon btn-sm btn-outline-danger"
                                            data-confirm-delete="true"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-between mt-3 px-3">
                            <p>Showing {{ $categories->firstItem() }} to {{ $categories->lastItem() }} of {{
                                $categories->total() }} entries</p>
                            {{ $categories->links() }}
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