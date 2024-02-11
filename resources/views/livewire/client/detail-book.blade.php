

<div>
    
    <section class="bg-half-170 bg-light d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0"> {{ $books->title }} </h4>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <section class="section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="tiny-single-item">
                        <div class="tiny-slide"><img src="{{ Storage::url($books->image) }}" class="img-fluid rounded"
                                alt=""></div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-md-4">
                        <h4 class="title">{{ $books->title }}</h4>
                        <h5 class="text-muted">{{ $books->category->name }}</h5>
                        <h5 class="mt-4 py-2">Description :</h5>
                        <p class="text-muted">{{ $books->description }}</p>

                        <ul class="list-unstyled text-muted">
                            <li class="mb-1">Author : <span class="text-primary h6 me-2">{{ $books->author }}</span>
                            </li>
                            <li class="mb-1">Publisher : <span class="text-primary h6 me-2">{{ $books->publisher
                                    }}</span></li>
                        </ul>

                        <div class="mt-4 pt-2">
                            @if($buttonLoan == true)
                                <button wire:click.prevent="loan({{ $books->id }})" class="btn btn-primary">Loan</button>
                            @else
                                <button class="btn btn-primary" disabled>Nonavailable</button>
                            @endif
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mt-60 mb-5">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-0">Related Products</h5>
                </div>
                <!--end col-->

                <div class="col-12 mt-4">
                    <div class="tiny-four-item">
                        @foreach ($related as $item)
                        <div class="tiny-slide">
                            <div class="card shop-list border-0 position-relative m-2">
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="{{ route('detail.book', $item->id) }}"><img
                                            src="{{ Storage::url($item->image) }}" class="img-fluid" alt=""></a>
                                    <a href="{{ route('detail.book', $item->id) }}" class="overlay-work">
                                        <img src="{{ Storage::url($item->image) }}" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="{{ route('detail.book', $item->id) }}" class="text-dark product-name h6">{{
                                        $item->title }}</a>
                                    <div class="d-flex justify-content-between mt-1">
                                        <h6 class="text-dark small fst-italic mb-0 mt-1">{{ $item->publisher }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    
</div>