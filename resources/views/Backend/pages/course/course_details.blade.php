@extends('Backend.master.master')
@section('content')
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> Course Details</h5>

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

                        <form method="POST" action="{{route('course-details')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-3">

                                            <div class="form-group ">
                                                <label for="name" class="control-label">Course Begin</label>
                                                <input class="form-control" name="begin" type="text" id="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Course Duration</label>
                                                <input class="form-control" name="duration" type="text" id="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">

                                            <div class="form-group ">
                                                <label for="name" class="control-label">Course Book</label>
                                                <input class="form-control" name="book" type="text" id="name">
                                            </div>
                                        </div>


                                        <div class="col-sm-3">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Course Fee</label>
                                                <input class="form-control" name="fee" type="text" id="name">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Select Course Type*</label>
                                                <select type="text" name="course" class="form-control"  >
                                                    <option selected>--Please select any course--</option>
                                                    @foreach($course as $value)
                                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Other Fee</label>
                                                <input class="form-control" name="other_fee" type="text" id="name">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">About Course*</label>
                                                <textarea id="desc"
                                                          name="about"
                                                          class="form-control"></textarea></div>
                                        </div>
                                    </div>



                                <button type="submit" class="btn btn-primary">Add Course</button>


                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </form>

                    </div>

                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>

        {{--<div class="col-md-12">--}}


        {{--<div class="card">--}}
        {{--<div class="card-header">--}}
        {{--<h5 class="card-title">All Slides</h5>--}}

        {{--<div class="card-tools">--}}

        {{--<button type="button" class="btn btn-tool" data-widget="collapse">--}}
        {{--<i class="fa fa-minus"></i>--}}
        {{--</button>--}}
        {{--<button type="button" class="btn btn-tool" data-widget="remove">--}}
        {{--<i class="fa fa-times"></i>--}}
        {{--</button>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- /.card-header -->--}}
        {{--<div class="card-body">--}}

        {{--<!-- /.row -->--}}
        {{--<table id="user" class="table table-bordered table-sm">--}}
        {{--<thead>--}}
        {{--<tr>--}}
        {{--<th>Sn</th>--}}
        {{--<th><i class="fa fa-image"></i></th>--}}
        {{--<th>Slide Name</th>--}}
        {{--<th>Section</th>--}}
        {{--<th>Status <br>--}}
        {{--<small>(Click to change status)</small>--}}
        {{--</th>--}}
        {{--<th>Action</th>--}}
        {{--</tr>--}}
        {{--</thead>--}}
        {{--<tbody>--}}

        {{--@foreach($slides as $key => $value)--}}
        {{--<tr>--}}
        {{--<td>{{++$key}}</td>--}}
        {{--<td><img src="{{asset('images/slides/'.$value->image)}}" width="80px"></td>--}}
        {{--<td>{{$value->name}}</td>--}}
        {{--<td>{{$value->section}}</td>--}}
        {{--<td>--}}
        {{--<form method="post" action="{{route('slide-status')}}">--}}
        {{--<input type="hidden" name="status" value="{{$value->id}}">--}}
        {{--@csrf--}}
        {{--@if(($value->status)==0)--}}
        {{--<button class="btn btn-danger btn btn-sm" name="inactive"><i--}}
        {{--class="fa fa-times"></i>--}}
        {{--</button>--}}
        {{--@else--}}
        {{--<button class="btn btn-success btn btn-sm" name="active"><i--}}
        {{--class="fa fa-check"></i>--}}
        {{--</button>--}}
        {{--@endif--}}

        {{--</form>--}}
        {{--</td>--}}
        {{--<td>--}}
        {{--<a href="{{route('delete-slide',$value->id)}}"--}}
        {{--class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i> </a>--}}
        {{--<a href="{{route('edit-slide',$value->id)}}" class="btn btn-sm btn btn-primary"><i--}}
        {{--class="fa fa-edit"></i> </a>--}}
        {{--</td>--}}
        {{--</tr>--}}
        {{--@endforeach--}}
        {{--</tbody>--}}
        {{--</table>--}}
        {{--</div>--}}

        {{--<!-- ./card-body -->--}}

        {{--<!-- /.card-footer -->--}}
        {{--</div>--}}
        {{--</div>--}}
        <!-- /.col -->
        </div>
    </div>

@endsection
