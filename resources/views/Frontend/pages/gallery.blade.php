@extends ('Frontend.master.master')
@section('title')
    <title>{{ $title.' - '.getConfiguration('site_title').'-'.getConfiguration('site_description')}}</title>

@endsection
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/gallery/japan_study.jpg">
    </section>
    <!-- /page title -->

    <!-- about -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Page Content -->
                <div class="container">

                    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Check our Gallery</h1>

                    <hr class="mt-2 mb-5">

                    <div class="row text-center text-lg-left">
                        @foreach($gallery as $value)
                            <div class="col-lg-3 col-md-4 col-6">
                                <a href="{{asset('images/gallery/'.$value->gallery)}}" class="d-block mb-4 h-100">
                                    <img class="img-fluid img-thumbnail"
                                         src="{{asset('images/gallery/'.$value->gallery)}}" alt="">
                                </a>
                            </div>
                        @endforeach

                    </div>

                </div>
                <!-- /.container -->

            </div>
        </div>
    </div>
    <!-- /about -->


@endsection