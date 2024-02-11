<div>

    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0"> All Books </h4>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="card border-0 sidebar sticky-bar">
                        <div class="card-body p-0">
                            <!-- SEARCH -->
                            <div class="widget">
                                <form role="search" method="get">
                                    <div class="input-group mb-3 border rounded">
                                        <input type="search" id="search" name="search" wire:model.live.debounce.300ms='search' class="form-control border-0" placeholder="Search Keywords...">
                                    </div>
                                </form>
                            </div>
                            <!-- SEARCH -->

                            <!-- Categories -->
                            <div class="widget mt-4 pt-2">
                                <h5 class="widget-title">Categories</h5>
                                <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                    <li><a href="#" wire:click='updateCategory()'>All</a></li>
                                    @foreach ($categories as $item)
                                        <li><a href="#" wire:click='updateCategory({{ $item->id }})'>{{ $item->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-9 col-md-8 col-12 mt-5 pt-2 mt-sm-0 pt-sm-0">
                    <div class="row d-flex justify-content-end">
                        <div class="col-lg-8 col-md-7">
                            <div class="section-title">
                                <h5 class="mb-0">Showing {{ $books->firstItem() }}–{{ $books->lastItem() }} of {{ $books->total() }} results</h5>
                            </div>
                        </div>
                    </div><!--end row-->

                    <div class="row">
                        @foreach ($books as $item)    
                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card shop-list border-0 position-relative">
                                    {{-- <ul class="label list-unstyled mb-0">
                                        <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">Featured</a></li>
                                    </ul> --}}
                                    <div class="shop-image position-relative overflow-hidden rounded shadow">
                                        <a href="{{ route('detail.book', $item->id) }}"><img src="{{ Storage::url($item->image) }}" class="img-fluid" alt=""></a>
                                    </div>
                                    <div class="card-body content pt-4 p-2">
                                        <a href="{{ route('detail.book', $item->id) }}" class="text-dark product-name h6">{{ $item->title }}</a>
                                        <div class="d-flex justify-content-between mt-1">
                                            <h6 class="text-dark small fst-italic mb-0 mt-1">{{ $item->category->name }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- PAGINATION START -->
                        <div class="col-12 mt-4 pt-2">
                            <div class="d-flex align-items-center justify-content-center">
                                {{ $books->links() }}
                            </div>
                        </div><!--end col-->
                        <!-- PAGINATION END -->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>

</div>
