@extends('frontend.app')

@section('content')

<section class="home-banner">
    <div class="position-absolute home-banner-background">
        @include('svgs.home-background')
    </div>
    <div class="home-text">
        <div class="container">
            <h2 class="text-center">
                Discover guides, tutorials, and tips to enhance your <span class="home-primary">Laravel</span> skills.
            </h2>
            <div class="position-absolute cube-svg">
                @include('svgs.cube')
            </div>
        </div>
    </div>
</section>

<section class="section bg-light">
    <div class="container">
        {{-- filter --}}
        <div class="row">
            <div class="col-12">
                <div class="home-filter text-center">
                    <a href="javascript:0" class="home-filter-nav active" data-type="popular">{{ __('Popular') }}</a>
                    <a href="javascript:0" class="home-filter-nav" data-type="latest">{{ __('Latest') }}</a>
                    <a href="javascript:0" class="home-filter-nav" data-type="most_rate">{{ __('Most Rate') }}</a>
                </div>
            </div>
        </div>
        <div>
            <div class="row blog-div">
                @for($i = 0; $i < 6; $i++)
                    <div class="col-12 col-sm-6 col-md-4 popular-col">
                        <div class="article-box">
                            <a href="{{ route('detail') }}">
                                <div class="article-img">
                                    <img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/featured-images/whatsnewphp84.png" alt="" srcset="">
                                </div>
                                <div class="article-text text-capitalize">
                                    <h5>A Look at What's Coming to PHP 8.4</h5>
                                    <p>People keep asking me about "best practices" in Laravel. However, there are clear BAD practices. So, in this article, I will list the most common ones.</p>
                                </div>
                            </a>
                        </div>

                    </div>
                @endfor

                @for($i = 0; $i < 6; $i++)
                    <div class="col-12 col-sm-6 col-md-4 latest-col d-none">
                        <div class="article-box">
                            <a href="#">
                                <div class="article-img">
                                    <img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/featured-images/laravel11.jpg" alt="" srcset="">
                                </div>
                                <div class="article-text text-capitalize">
                                    <h5>A New Validation Rule and the Ability to Manually Fail a Command in Laravel 11.8</h5>
                                    <p>People keep asking me about "best practices" in Laravel. However, there are clear BAD practices. So, in this article, I will list the most common ones.</p>
                                </div>
                            </a>
                        </div>

                    </div>
                @endfor

                @for($i = 0; $i < 6; $i++)
                    <div class="col-12 col-sm-6 col-md-4 most_rate-col d-none">
                        <div class="article-box">
                            <a href="#">
                                <div class="article-img">
                                    <img src="https://picperf.io/https://laravelnews.s3.amazonaws.com/featured-images/laravel-top-featured.jpg" alt="" srcset="">
                                </div>
                                <div class="article-text text-capitalize">
                                    <h5>Real Time Command Line Monitoring With Laravel Top</h5>
                                    <p>Laravel Top provides real-time monitoring directly from the command line for Laravel applications. It helps you track critical metrics and see the bus...</p>
                                </div>
                            </a>
                        </div>

                    </div>
                @endfor

            </div>
            <div class="row">
                <div class="col-12 text-center position-relative mt-3">
                    <a href="javascript:0" class="btn-flat btn-flat-outline-primary">{{ __('View More') }} <i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
    <script>
        $(document).on('click', '.home-filter-nav', function (e) {
            var filter = $(this).data('type');
            console.log(filter);
            $('.blog-div > .col-12').addClass('d-none');
            $(`.blog-div > .${filter}-col`).removeClass('d-none');
            $(this).closest('.home-filter').find('a').removeClass('active');
            $(this).addClass('active');

            // $('.masonry-grid').masonry({
            //     // options
            //     itemSelector: '.masonry-column',
            //     columnWidth: 50
            // });
        });
    </script>
@endpush
