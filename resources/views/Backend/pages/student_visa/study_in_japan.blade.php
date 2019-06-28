@extends('Backend.master.master')
@section('content')
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Points and Description</h5>

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

                        <form method="POST" action="{{route('study-japan-back')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Points</label>
                                                <input class="form-control" name="points" type="text" id="name">
                                            </div>
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Description</label>
                                                <textarea id="visa"
                                                          name="description"
                                                          class="form-control"></textarea>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Points</button>
                        </form>


                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>

                <!-- ./card-body -->

                <!-- /.card-footer -->
            </div>
        </div>


    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Page Description</h5>

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
                                <th>Points</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($details as $key=> $value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$value->points}}</td>
                                    <td style="word-break: break-all">{{$value->answer}}</td>

                                    <td>
                                        <a href="{{route('study-japan-delete',$value->id)}}"
                                           class="btn btn-danger btn btn-sm"
                                           onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> </a>
                                        <a href="{{route('study-japan-edit',$value->id)}}"
                                           class="btn btn-primary btn btn-sm"
                                        ><i class="fa fa-edit"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sn</th>
                                <th>Points</th>
                                <th>Description</th>
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

        CKEDITOR.replace('visa');
    </script>

@endpush
