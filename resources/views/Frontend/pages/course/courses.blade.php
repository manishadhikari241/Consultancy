@extends ('Frontend.master.master')
@section('title')
    <title>{{ $title.' - '.getConfiguration('site_title').'-'.getConfiguration('site_description')}}</title>

@endsection
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{asset('images/courses/course.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Test
                                Preparation Courses</a></li>
                        <li class="list-inline-item text-white h3 font-secondary "></li>
                    </ul>
                    <p class="text-lighten">Following courses are designed to those who want to pursue their career as student in Japan or for the
                        purposes.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->
<br>
<br>
    <div class="col-12">
        <div class="d-flex align-items-center ">
            <h2 class="mb-0 text-nowrap mr-3">All Courses</h2>
            <div class="border-top w-100 border-primary d-none d-sm-block"></div>

        </div>
    </div>
    <!-- courses -->
    <section class="section">

        <div class="container">
            <!-- course list -->
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach($course as $value)
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{url('images/courses/'.$value->image)}}" alt="course thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>{{$value->date}}</li>
                            </ul>
                            <a href="{{route('courses-single')}}">
                                <h4 class="card-title">{{$value->name}}</h4>
                            </a>
                            <p class="card-text mb-4"> {!! $value->description !!}
                              </p>
                            <a href="{{route('courses-single',$value->id)}}" class="btn btn-primary btn-sm">Apply now</a>
                        </div>
                    </div>
                </div>
                    @endforeach

            </div>

        </div>
    </section>
@endsection



