@extends('Backend.master.master')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Slides</h5>

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

                        <form method="POST" action="{{route('slide-front')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Heading</label>
                                                <input class="form-control" name="heading" type="text" id="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="short_description" class="control-label">Short
                                                    Description</label>
                                                <textarea name="short_description" class="form-control"
                                                          id="short_description"></textarea></div>
                                        </div>


                                        <div class="col-sm-3">
                                            <div class="form-group ">
                                                <label for="status" class="control-label">Status</label>
                                                <select class="form-control" id="status" name="status">
                                                    <option value="1">Enabled</option>
                                                    <option value="0">Disabled</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">


                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Slide</button>


                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </form>

                    </div>

                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>

            <div class="col-md-12">


                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Slides</h5>

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

                        <!-- /.row -->
                        <table id="user" class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th>Main Header</th>
                                <th>Description</th>
                                <th>Status <br>
                                    <small>(Click to Unpublish)</small>
                                </th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($slides as $key => $value)
                                <tr>
                                    <td>{{++$key}}</td>

                                    <td>{{$value->header}}</td>
                                    <td>{{$value->short_description}}</td>
                                    <td>
                                        <form method="post" action="{{route('slide-status')}}">
                                            <input type="hidden" name="status" value="{{$value->id}}">
                                            {{csrf_field()}}
                                            @if(($value->status)==0)
                                                <button class="btn btn-danger btn btn-sm" name="inactive"><i
                                                            class="fa fa-times"></i>
                                                </button>
                                            @else
                                                <button class="btn btn-success btn btn-sm" name="active"><i
                                                            class="fa fa-check"></i>
                                                </button>
                                            @endif

                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{route('slide-delete',$value->id)}}"
                                           onclick="return confirm('Are you sure??')" class="btn btn-sm btn btn-danger"><i
                                                    class="fa fa-trash"></i> </a>
                                        <a href="{{route('slide-front-edit',$value->id)}}" class="btn btn-sm btn btn-primary"><i
                                                    class="fa fa-edit"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sn</th>
                                <th>Main Header</th>
                                <th>Description</th>
                                <th>Status <br>
                                    <small>(Click to Unpublish)</small>
                                </th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
    <div class="modal" id="myModal">

    </div>
@endsection
