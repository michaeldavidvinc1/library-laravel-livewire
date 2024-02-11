<div>
    <div class="d-md-flex justify-content-between align-items-center pb-4">
        <h5 class="mb-0">Book Edit</h5>

        <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('dashboard.page') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="{{ route('book.page') }}">Book</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">Edit</li>
            </ul>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <form wire:submit='update'>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="title">Title <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <input name="title" id="title" type="text" class="form-control @error('title')
                                    border border-danger
                                @enderror" placeholder="Enter title" wire:model='title'>
                                @error('title')
                                    <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="author">Author <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <input name="author" id="author" type="text" class="form-control @error('author')
                                border border-danger
                            @enderror"
                                    placeholder="Enter author" wire:model='author'>
                                @error('author')
                                <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="publisher">Publisher <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <input name="publisher" id="publisher" type="text" class="form-control @error('publisher')
                                border border-danger
                            @enderror"
                                    placeholder="Enter publisher" wire:model='publisher'>
                                @error('publisher')
                                <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Category <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <select class="form-select form-control @error('category_id')
                                border border-danger
                            @enderror" wire:model='category_id'>
                                    <option selected>-- Select Category --</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="quantity">Quantity <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <input name="quantity" id="quantity" type="number" class="form-control @error('quantity')
                                border border-danger
                            @enderror"
                                    placeholder="Enter quantity" wire:model='quantity'>
                                @error('quantity')
                                    <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="description">Description <span class="text-danger">*</span></label>
                            <div class="form-icon position-relative">
                                <textarea name="description" id="description" rows="3" wire:model='description'
                                    class="form-control @error('description')
                                    border border-danger
                                @enderror" placeholder="Enter description"></textarea>
                                @error('description')
                                    <p style="font-size: 12px" class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <div class="form-icon position-relative">
                                <input name="image" id="image" type="file" class="form-control" wire:model='image'>
                                @error('image')
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