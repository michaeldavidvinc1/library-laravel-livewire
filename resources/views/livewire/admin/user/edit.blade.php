<div>
    <div class="d-md-flex justify-content-between align-items-center pb-4">
        <h5 class="mb-0">User Edit</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('users.page') }}">Users</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Edit</li>
            </ul>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit='edit'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="title">Name <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <input name="name" id="name" type="text" class="form-control @error('name')
                                    border border-danger
                                @enderror" placeholder="Enter name" wire:model='name'>
                                @error('name')
                                <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="author">Email <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <input name="email" id="email" type="email" class="form-control @error('email')
                                border border-danger
                            @enderror"
                                    placeholder="Enter author" wire:model='email'>
                                @error('email')
                                <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="publisher">Phone</label>
                            <div class="form-icon position-relative">
                                <input name="phone" id="phone" type="text" class="form-control @error('phone')
                                border border-danger
                            @enderror"
                                    placeholder="Enter publisher" wire:model='phone'>
                                @error('phone')
                                <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Role <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <select class="form-select form-control @error('role')
                                border border-danger
                            @enderror" wire:model='role'>
                                    <option selected>-- Select Role --</option>
                                    <option value="ADMIN">Admin</option>
                                    <option value="USER">User</option>
                                </select>
                                @error('role')
                                <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="quantity">Status <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <select class="form-select form-control @error('status')
                                border border-danger
                            @enderror" wire:model='status'>
                                    <option selected>-- Select Status --</option>
                                    <option value="ACTIVE">Active</option>
                                    <option value="NONACTIVE">Nonactive</option>
                                </select>
                                @error('status')
                                    <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="address">Address</label>
                            <div class="form-icon position-relative">
                                <textarea name="address" id="address" rows="3" wire:model='address'
                                    class="form-control @error('address')
                                    border border-danger
                                @enderror" placeholder="Enter address"></textarea>
                                @error('address')
                                    <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        <div class="col-1">
                            <button class="btn btn-primary d-grid w-100" type="submit">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


</div>