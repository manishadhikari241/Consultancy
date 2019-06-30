
@extends('Backend.master.master')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Edit Course</h5>

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

            <form method="POST" action="{{route('edit-course')}}"
                  accept-charset="UTF-8" class=""
                  enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$course->id}}">
                @csrf

                <div class="box box-default">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label for="name" class="control-label">Course Name *</label>
                                    <input class="form-control" value="{{$course->name}}" name="name" type="text" id="name">
                                </div>
                            </div>
                            <div class="col-sm-4">

                                <div class="form-group ">
                                    <label for="caption" class="control-label">Current Image</label>
                                    <img src="{{url('images/courses/'.$course->image)}}" width="60px"
                                    id="caption">
                                    <label for="caption" class="control-label">Image</label>
                                    <input class="form-control" name="image" type="file"
                                           id="caption">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <label for="name" class="control-label">Current Date</label>
                                    <input class="form-control" name="date" value="{{$course->date}}" type="text" id="name">
                                    <label for="name" class="control-label">Course Date</label>
                                    <input class="form-control" name="date" type="date" id="name">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <label for="name" class="control-label">Course Description *</label>
                                    <textarea id="desc"
                                              name="description"
                                              class="form-control">{{$course->description}}</textarea></div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Course</button>


                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </form>

        </div>

        <!-- ./card-body -->

        <!-- /.card-footer -->
    </div>
</div>

    @stop
