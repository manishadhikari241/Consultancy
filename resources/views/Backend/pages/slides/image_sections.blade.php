@extends('Backend.master.master')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Manage Images</h5>

                        <div class="card-tools">

                            <button type="button" class="btn btn-tool" data-widget="collapse">
                                <i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-widget="remove">
                                <i class="fa fa-times"></i>
                            </button>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form method="POST" enctype="multipart/form-data" action="{{route('image-sections')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box box-default">
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Section 1</label>
                                                <input value="" class="form-control" name="section_1"
                                                       type="file" id="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="short_description" class="control-label">Section 2</label>
                                                <input value="" class="form-control" name="section_2"
                                                       type="file" id="name">
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="short_description" class="control-label">Section 3</label>
                                                <input value="" class="form-control" name="section_3"
                                                       type="file" id="name">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="">Current Section 1 Image</label>
                                                <div class="container">
                                                    <div class="round-img">
                                                        <a href="#"><img class="fa-times-rectangle"
                                                                         src="{{asset('images/frontpage'.'/'.getFrontImage('section_1'))}}"
                                                                         width="200px"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="">Current Section 2 Image</label>
                                                <div class="container">
                                                    <div class="round-img">
                                                        <a href="#"><img class="fa-times-rectangle"
                                                                         src="{{asset('images/frontpage'.'/'.getFrontImage('section_2'))}}"
                                                                         width="200px"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="">Current Section 3 Image</label>
                                                <div class="container">
                                                    <div class="round-img">
                                                        <a href="#"><img class="fa-times-rectangle"
                                                                         src="{{asset('images/frontpage'.'/'.getFrontImage('section_3'))}}"
                                                                         width="200px"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Section 4</label>
                                                <input value="" class="form-control" name="section_4"
                                                       type="file" id="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label class="">Current Section 4 Image</label>
                                                <div class="container">
                                                    <div class="round-img">
                                                        <a href="#"><img class="fa-times-rectangle"
                                                                         src="{{asset('images/frontpage'.'/'.getFrontImage('section_1'))}}"
                                                                         width="200px"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary">Update Images</button>


                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </form>

                    </div>

                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>

            <!-- /.col -->
        </div>
    </div>

@endsection
