@extends('Backend.master.master')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Manage Gallery</h5>

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
                        <form method="POST" enctype="multipart/form-data" action="{{route('gallery-manage')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf
                            <div class="box box-default">
                                <div class="box-body">

                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Choose Image</label>
                                                <input value="" class="form-control" multiple name="image_upload[]"
                                                       type="file" id="name">
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <button type="submit" class="btn btn-primary">Upload Images</button>


                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </form>

                    </div>
                    <!-- ./card-body -->

                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Images</h5>

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
                        <table id="example" class="table table-bordered table-sm">
                            <thead>
                            <tr>
                                <th>Sn</th>
                                <th><i class="fa fa-image"></i></th>

                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $key=> $value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td><img src="{{asset('images/gallery/'.$value->gallery)}}" width="50px"></td>
                                    <td>{{$value->created_at}}</td>
                                    <td>
                                        <a href="{{route('gallery-delete',$value->id)}}"
                                           class="btn btn-danger btn btn-sm"
                                           onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> </a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sn</th>
                                <th><i class="fa fa-image"></i></th>

                                <th>Date</th>
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
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            $("[rel='tooltip']").tooltip();
        });
    </script>
    <script>
        CKEDITOR.replace('about_sec');
        CKEDITOR.replace('mission');

    </script>
@endpush