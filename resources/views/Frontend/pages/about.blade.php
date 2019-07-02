@extends ('Frontend.master.master')
@section('title')
    <title>{{ $title.' - '.getConfiguration('site_title').'-'.getConfiguration('site_description')}}</title>

@endsection
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/about/about.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">About
                                Us</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">{!! str_limit(getConfiguration('about'),'100') !!}</p>

                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid w-100 mb-4"
                         src="{{asset('images/about'.'/'.getConfiguration('about_image_1'))}}" alt="about image">
                    <h2 class="section-title">ABOUT OUR JOURNEY</h2>
                    <p>{!! getConfiguration('about') !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /about -->

    <!-- funfacts -->
    <!-- /funfacts -->

    <!-- success story -->
    <section class="section bg-cover" data-background="{{asset('images/about'.'/'.getConfiguration('success_image'))}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-4 position-relative success-video">

                </div>
                <div class="col-lg-6 col-sm-8">
                    <div class="bg-white p-5">
                        <h2 class="section-title">Our Services</h2>
                        <p>
                            {!! getConfiguration('mission') !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">

        <div class="col-12">
            <div class="d-flex align-items-center ">
                <h2 class="mb-0 text-nowrap mr-3">Message From Chairman</h2>
                <div class="border-top w-100 border-primary d-none d-sm-block"></div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-5">
                    <img class="img-fluid w-100" src="{{asset('images/about/'.getConfiguration('chairman_image'))}}" alt="teacher"
                         style="padding-right: 100px">
                </div>
                <div class="col-md-6 mb-5">
                    <h3>{{getConfiguration('chairman_name')}}</h3>
                    <p>{!! getConfiguration('chairman') !!}</p>
                </div>

            </div>
        </div>
    </section>

@endsection