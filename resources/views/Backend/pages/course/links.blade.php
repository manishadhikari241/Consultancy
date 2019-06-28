@extends('Backend.master.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> Links</h5>

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

                        <form method="POST" action="{{route('links')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Title</label>
                                                <input type="text" class="form-control" name="title">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Reference</label>
                                                <input type="text" class="form-control" name="reference">
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Link Type:</label>
                                                <select type="text" name="link" class="form-control">
                                                    <option selected>Select link type</option>
                                                    <option value="1">Educational</option>
                                                    <option value="2">Useful</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>


                                    <button type="submit" class="btn btn-primary">Add Links</button>


                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                        </form>
                    </div>

                </div>

                <!-- ./card-body -->

                <!-- /.card-footer -->
            </div>
        </div>

    </div>
    </div>

@endsection