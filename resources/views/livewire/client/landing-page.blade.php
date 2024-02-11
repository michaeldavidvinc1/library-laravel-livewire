<div>
    
    <section class="home-slider position-relative">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('assets/hero.jpg')">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-7">
                                    <div class="title-heading position-relative mt-4" style="z-index: 1;">
                                        <h1 class="heading mb-3">Enjoy Better Holidays With Landrick Resort</h1>
                                        <p class="para-desc">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap v5 html page.</p>
                                        <div class="mt-4 pt-2">
                                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="btn btn-icon btn-pills btn-primary lightbox"><i data-feather="video" class="icons"></i></a><span class="fw-bold text-uppercase small align-middle ms-2">Watch Now</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">New's Book</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Explore the latest additions to our collection and embark on a journey with our newest books.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach ($latest as $item)    
                    <div class="col-lg-4 col-md-6 mt-4 pt-2">
                        <div class="card work-container work-primary work-modern rounded border-0 overflow-hidden">
                            <div class="card-body p-0">
                                <a href="{{ route('detail.book', $item->id) }}"><img src="{{ Storage::url($item->image) }}" class="img-fluid rounded" alt="work-image" loading="lazy"></a>
                                <div class="content">
                                    <a href="{{ route('detail.book', $item->id) }}" class="title text-white title-dark pb-2 border-bottom">{{ $item->title }}</a>
                                    <ul class="post-meta mb-0 mt-2 text-white title-dark list-unstyled">
                                        <li class="list-inline-item me-3">{{ $item->category->name }}</li>
                                    </ul>
                                    <p class="text-white title-dark d-block mb-0">Author : <span class="text-success">{{ $item->author }}</span></p>
                                </div>

                                <div class="position-absolute top-0 end-0 m-3 z-index-1">
                                    <a href="" class="btn btn-primary btn-pills btn-sm btn-icon"><i data-feather="chevron-right" class="fea icon-sm title-dark"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-12 text-center mt-4 pt-2">
                    <a href="{{ route('list.book') }}" class="btn btn-primary">See More <i class="uil uil-angle-right-b"></i></a>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section>


    
</div>