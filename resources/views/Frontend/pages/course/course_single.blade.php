@extends ('Frontend.master.master')
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{asset('images/courses/book.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="#">Our
                                Courses</a></li>
                    </ul>
                    <p class="text-lighten">This course is for those who want to acquire basic Japanese language skills in daily tasks and business
                        environments. With this course student can be able to make basic daily conversation.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->
    <!-- section -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-2 mb-4">
                    <!-- course thumb -->
                    <img class="card-img-top rounded-0" src="{{url('images/courses/'.$image)}}" alt="course thumb">
                </div>
            </div>
            <!-- course info -->
            <div class="row align-items-center mb-5">
                <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
                    <h2>{{$course->first()}}</h2>
                </div>
                <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-book text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">Begin:</h6>
                                    <p class="mb-0">{{$begin->first()}}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-alarm-clock text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">Duration:</h6>
                                    <p class="mb-0">{{$duration->first()}}</p>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">Fee:</h6>
                                    <p class="mb-0">{{$fee->first()}}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">Other Fees:</h6>
                                    <p class="mb-0">{{$other->first()}}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
                    <a data-id="{{$id}}" class="display btn btn-primary">Apply now</a>
                </div>
                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>
            <!-- course details -->
            <div class="row">
                <div class="col-12 mb-4">
                    <h3>About Course</h3>
                    <p>{!! $about->first() !!}</p>
                </div>
                <div class="col-12 mb-4">
                    <h3 class="mb-3">Useful Educational Links</h3>
                    <div class="col-12 px-0">
                        <div class="row">
                            <div class="col-md-6">
                                @foreach($edu as $value)
                                    <ul class="list-styled">
                                        <li>{{$value->title}} <span>(<a target="_blank"
                                                                        href="{{$value->reference}}">{{$value->reference}}</a>)</span>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <h3 class="mb-3">Useful Other Links</h3>
                    @foreach($use as $value)
                        <ul class="list-styled">
                            <li>{{$value->title}}</li>
                            <span>(<a href="{{$value->reference}}">{{$value->reference}}</a>)</span>
                        </ul>
                    @endforeach
                </div>
                <!-- teacher -->
            </div>
        </div>
    </section>
    <!-- /section -->

    <!-- related course -->
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="section-title">Related Course</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- course item -->
                @foreach($related as $value)

                    <div class="col-lg-3 col-sm-6 mb-5">
                        <div class="card p-0 border-primary rounded-0 hover-shadow">
                            <img class="card-img-top rounded-0" src="{{url('images/courses/'.$value->image)}}" width="20px" height="200px" alt="course thumb">
                            <div class="card-body">
                                <a href="course_single.blade.php">
                                    <h4 class="card-title">{{$value->name}}</h4>
                                </a>
                                <p class="card-text mb-4">{!! $value->description !!}</p>
                                <a href="course_single.blade.php" class="btn btn-primary btn-sm">Apply now</a>
                            </div>

                        </div>
                    </div>
            @endforeach

            <!-- course item -->
            </div>
        </div>
    </section>
    <!-- /related course -->
    <div class="clearfix">

    </div>
    <div class="modal" id="myModal">

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('.display').click(function (e) {
                e.preventDefault();
                var $modal = $('#myModal');
                var id = $(this).attr('data-id');
                var tempEditUrl = "{{route('apply',':id')}}";
                tempEditUrl = tempEditUrl.replace(':id', id);
                $modal.load(tempEditUrl, function (response) {
                    $modal.modal({show: true});
                });
            });
        });
    </script>
@endpush
