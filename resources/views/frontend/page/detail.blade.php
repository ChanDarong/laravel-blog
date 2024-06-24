@extends('frontend.app')

@section('content')
<section class="detail-section">
    {{-- <div class="detail-banner-img">
        @include('svgs.laravel')
    </div> --}}
    <div class="position-absolute cube-svg">
        @include('svgs.cube')
    </div>
    {{-- <img src="https://laravel.com/img/logomark.min.svg" class="detail-banner-img" alt="detail-banner-image"> --}}
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>
                    A Look at What's Coming to PHP 8.4
                </h1>
                <p>
                    <small class="text-mute">
                        Last updated on May 28th, 2024 — CHAN Darong
                    </small>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="detail-thumbnail">
                    <img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/featured-images/whatsnewphp84.png" alt="">
                </div>
            </div>
        </div>
        <div class="detail-content my-5">
            <div class="row description my-3">
                <div class="col-12">
                    <p>PHP 8.4 is coming soon and in this post let's look at what has been announced so far, and what new features you might expect.</p>
                </div>
            </div>
            <div class="row content">
                <div class="col-12">
                    <h3>#When is PHP 8.4 scheduled to be released?</h3>
                    <p>PHP 8.4 is scheduled to be released on November 21, 2024. Before the release it will feature 6 months of pre-release phases going from Alphas, to Betas, to Release Candidates, and then the official release.</p>
                    <h3>#When is PHP 8.4 scheduled to be released?</h3>
                    <p>PHP 8.4 is scheduled to be released on November 21, 2024. Before the release it will feature 6 months of pre-release phases going from Alphas, to Betas, to Release Candidates, and then the official release.</p>
                </div>
            </div>
        </div>
        <div class="detail-footer my-5">
            <div class="author">
                <div class="row">
                    <div class="col author-img">
                        <img src="{{ asset('frontend/assets/image/darong.jpg') }}" alt="">
                    </div>
                    <div class="col">
                        <div class="h4">CHAN Darong</div>
                        <p>Staff writer at Laravel News. Full stack web developer and author.</p>
                        <div class="author-social">
                            <a href="#" class="text-decoration-none">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#" class="text-decoration-none">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="comment-section">
                <div class="line-text">
                    <span class="bg-white pe-2 position-relative">
                        Comment
                    </span>
                </div>

                <div class="comment">
                    {{-- <script src="https://giscus.app/client.js"
                            data-repo="ChanDarong/laravel-blog"
                            data-repo-id="R_kgDOMLbyJQ"
                            data-category="Ideas"
                            data-category-id="DIC_kwDOMLbyJc4CgMnZ"
                            data-mapping="pathname"
                            data-strict="1"
                            data-reactions-enabled="1"
                            data-emit-metadata="1"
                            data-input-position="top"
                            data-theme="preferred_color_scheme"
                            data-lang="en"
                            data-loading="lazy"
                            crossorigin="anonymous"
                            async>
                    </script> --}}
                    <script defer src="https://thecommenthub.com/js/thcommenthub.js"></script>
                    <div id="thecommenthub-comment"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
