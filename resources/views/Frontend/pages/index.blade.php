@extends ('Frontend.master.master')
@section('title')
    <title>{{getConfiguration('site_title').'-'.getConfiguration('site_description')}}</title>

@endsection
@section('content')
    <!-- hero slider -->
    <section class="hero-section overlay bg-cover"
             data-background="{{asset('images/frontpage/'.getFrontImage('section_1'))}}">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                @foreach($slides as $value)
                    <div class="hero-slider-item">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5"
                                    data-duration-in=".3" data-animation-in="fadeInLeft"
                                    data-delay-in=".1">{{$value->header}}</h1>
                                <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5"
                                   data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
                                    {{$value->short_description}}</p>
                                <a href="{{route('courses')}}" class="btn btn-primary" data-animation-out="fadeOutRight"
                                   data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft"
                                   data-delay-in=".7">Apply
                                    now</a>
                            </div>
                        </div>
                    </div>
                    <!-- slider item -->
                @endforeach

            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <!-- banner-feature -->
    <section class="bg-gray">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-5 align-self-end">
                    <img class="img-fluid w-100" src="{{asset('images/frontpage/'.getFrontImage('section_2'))}}"
                         alt="banner-feature">
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="row feature-blocks bg-gray justify-content-between">
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">{{getAdvertisement('heading_1')}}</h3>
                            <p>{!! getAdvertisement('description_1') !!}</p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">{{getAdvertisement('heading_2')}}</h3>
                            <p>{!! getAdvertisement('description_2') !!}</p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">{{getAdvertisement('heading_3')}}</h3>
                            <p>{!! getAdvertisement('description_3') !!}</p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">{{getAdvertisement('heading_4')}}</h3>
                            <p>{!! getAdvertisement('description_4') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /banner-feature -->

    <!-- about us -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="section-title">About Shine Education Services</h2>
                    <p>{!! str_limit(getConfiguration('about'),'600')!!}</p>
                    <a href="{{route('about')}}" class="btn btn-primary-outline">Learn more</a>
                </div>
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{asset('images/frontpage/'.getFrontImage('section_3'))}}"
                         alt="about image">
                </div>
            </div>
        </div>
    </section>
    <!-- /about us -->

    <!-- courses -->
    <section class="section-sm">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="courses.blade.php"
                               class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see
                                all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach($course as $value)
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{url('images/courses/'.$value->image)}}"
                                 alt="course thumb">
                            <div class="card-body">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item"><i
                                                class="ti-calendar mr-1 text-color"></i>{{$value->date}}</li>
                                </ul>
                                <a href="course_single.blade.php">
                                    <h4 class="card-title">{{$value->name}}</h4>
                                </a>
                                <p class="card-text mb-4">{!! $value->description !!}</p>
                                <a href="{{route('courses-single',$value->id)}}" class="btn btn-primary btn-sm">Apply
                                    now</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- /course list -->
            <!-- mobile see all button -->
            <div class="row">
                <div class="col-12 text-center">
                    <a href="courses.blade.php" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell
                        all</a>
                </div>
            </div>
        </div>
    </section>
    <!-- /courses -->


    <!-- success story -->
    <section class="section bg-cover" data-background="{{asset('images/about'.'/'.getConfiguration('success_image'))}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4 position-relative success-video">

                </div>
                <div class="col-lg-6 col-sm-8">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Success Stories</h2>
                        <p>
                            {!! getConfiguration('mission') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- /success story -->



    <!-- teachers -->
    <section class="section-sm">
        <div class="col-12">
            <div class="d-flex align-items-center section-title justify-content-between">
                <h2 class="mb-0 text-nowrap mr-3">Testimonials</h2>
                <div class="border-top w-100 border-primary d-none d-sm-block"></div>

            </div>
        </div>
        <div class="customer-feedback">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-offset-2 col-sm-12   ">
                        <div>
                            <h2 class="section-title">What Clients Say</h2>
                        </div>
                    </div><!-- /End col -->
                </div><!-- /End row -->

                <div class="row">
                    <div class="col-md-3">

                    </div>

                    <div class="col-md-6">
                        <div class="owl-carousel feedback-slider">

                        @foreach($testimonial as $value)
                            <!-- slider item -->
                                <div class="feedback-slider-item">
                                    <img src="{{asset('images/testimonials/'.$value->image)}}" width="80px"
                                         class="img-circle" alt="Customer Feedback">
                                    <h3 class="customer-name">{{$value->name}}</h3>
                                    <p>{!! $value->review !!}</p>
                                    <span class="light-bg customer-rating" data-rating="{{$value->rating}}">
								{{$value->rating}}
                                        <i class="fa fa-star"></i>
							</span>
                                </div>
                                <!-- /slider item -->
                        @endforeach
                        <!-- slider item -->
                            <!-- /slider item -->

                            <!-- slider item -->
                            <!-- /slider item -->

                        </div><!-- /End feedback-slider -->

                        <!-- side thumbnail -->
                        <div class="feedback-slider-thumb hidden-xs">
                            @foreach($testimonial as $value)
                                <div class="thumb-prev">
							<span>
								<img src="{{asset('images/testimonials/'.$value->image)}}" width="60px"
                                     alt="Customer Feedback">
							</span>
                                    <span class="light-bg customer-rating">
								{{$value->rating}}
                                        <i class="fa fa-star"></i>
							</span>
                                </div>
                            @endforeach

                            @foreach($testimonial as $value)
                                <div class="thumb-next">
							<span>
								<img src="{{asset('images/testimonials/'.$value->image)}}" width="60px"
                                     alt="Customer Feedback">
							</span>
                                    <span class="light-bg customer-rating">
								{{$value->rating}}
                                        <i class="fa fa-star"></i>
							</span>
                                </div>
                            @endforeach
                        </div>
                        <!-- /side thumbnail -->

                    </div><!-- /End col -->
                </div><!-- /End row -->
            </div><!-- /End container -->
        </div><!-- /End customer-feedback -->
    </section>   <!--================Testimonial section End =================-->

    <!-- /teachers -->

    <!-- blog -->

    <!-- /blog -->

@endsection
@push('scripts')

    <script>
        jQuery(document).ready(function ($) {

            var feedbackSlider = jQuery('.feedback-slider');
            feedbackSlider.owlCarousel({
                items: 1,
                nav: true,
                dots: true,
                autoplay: true,
                loop: true,
                mouseDrag: true,
                touchDrag: true,
                navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right'></i>"],
                responsive: {

                    // breakpoint from 767 up
                    767: {
                        nav: true,
                        dots: false
                    }
                }
            });

            feedbackSlider.on("translate.owl.carousel", function () {
                $(".feedback-slider-item h3").removeClass("animated fadeIn").css("opacity", "0");
                $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").removeClass("animated zoomIn").css("opacity", "0");
            });

            feedbackSlider.on("translated.owl.carousel", function () {
                $(".feedback-slider-item h3").addClass("animated fadeIn").css("opacity", "1");
                $(".feedback-slider-item img, .feedback-slider-thumb img, .customer-rating").addClass("animated zoomIn").css("opacity", "1");
            });
            feedbackSlider.on('changed.owl.carousel', function (property) {
                var current = property.item.index;
                var prevThumb = $(property.target).find(".owl-item").eq(current).prev().find("img").attr('src');
                var nextThumb = $(property.target).find(".owl-item").eq(current).next().find("img").attr('src');
                var prevRating = $(property.target).find(".owl-item").eq(current).prev().find('span').attr('data-rating');
                var nextRating = $(property.target).find(".owl-item").eq(current).next().find('span').attr('data-rating');
                $('.thumb-prev').find('img').attr('src', prevThumb);
                $('.thumb-next').find('img').attr('src', nextThumb);
                $('.thumb-prev').find('span').next().html(prevRating + '<i class="fa fa-star"></i>');
                $('.thumb-next').find('span').next().html(nextRating + '<i class="fa fa-star"></i>');
            });
            $('.thumb-next').on('click', function () {
                feedbackSlider.trigger('next.owl.carousel', [300]);
                return false;
            });
            $('.thumb-prev').on('click', function () {
                feedbackSlider.trigger('prev.owl.carousel', [300]);
                return false;
            });

        }); //end ready
    </script>
@endpush
