@extends('Backend.master.master')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{count($course)}}</h3>

                            <p>Total Courses</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('course')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{count($student)}}</h3>

                            <p>Applicants</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{route('students')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{count($message)}}</h3>

                            <p>Messages</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="{{route('contact-message')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{count($image)}}</h3>

                            <p>Images</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="{{route('gallery-manage')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <!-- /.card -->

                    <!-- DIRECT CHAT -->
                    <!--/.direct-chat -->

                    <!-- TO DO List -->
                    <form action="{{route('dashboard')}}" method="post">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="ion ion-clipboard mr-1"></i>
                                    Advertisement Sections(Use Less than 500 character)
                                </h3>

                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">

                                        <label for="twitter_link" class="col-sm-2 control-label">Section 1</label>

                                        <div class="col-sm-3">
                                            <input type="text" value="{{getAdvertisement('heading_1')}}"
                                                   name="heading_1" class="form-control"
                                                   id="twitter_link">
                                        </div>
                                        <div class="col-sm-7">
                                            <textarea name="description_1"
                                                      id="section_1">{{getAdvertisement('description_1')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">

                                        <label for="twitter_link" class="col-sm-2 control-label">Section 2</label>
                                        <div class="col-sm-3">
                                            <input type="text" value="{{getAdvertisement('heading_2')}}"
                                                   name="heading_2" class="form-control"
                                                   id="twitter_link">
                                        </div>
                                        <div class="col-sm-7">
                                            <textarea name="description_2"
                                                      id="section_2">{{getAdvertisement('description_2')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">

                                        <label for="twitter_link" class="col-sm-2 control-label">Section 3</label>
                                        <div class="col-sm-3">
                                            <input type="text" value="{{getAdvertisement('heading_3')}}"
                                                   name="heading_3" class="form-control"
                                                   id="twitter_link">
                                        </div>
                                        <div class="col-sm-7">
                                            <textarea name="description_3"
                                                      id="section_3">{{getAdvertisement('description_3')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">

                                        <label for="twitter_link" class="col-sm-2 control-label">Section 4</label>
                                        <div class="col-sm-3">
                                            <input type="text" value="{{getAdvertisement('heading_4')}}"
                                                   name="heading_4" class="form-control"
                                                   id="twitter_link">
                                        </div>
                                        <div class="col-sm-7">
                                            <textarea name="description_4"
                                                      id="section_4">{{getAdvertisement('description_4')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <button type="submit" class="btn btn-info float-right"><i class="fa fa-plus"></i> Update
                                    Advertisements
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                    <!-- Map card -->
                    <!-- /.card -->

                    <!-- solid sales graph -->

                    <!-- /.card -->
                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@push('scripts')
    <script>
        CKEDITOR.replace('section_1');
        CKEDITOR.replace('section_2');
        CKEDITOR.replace('section_3');
        CKEDITOR.replace('section_4');

    </script>

@endpush