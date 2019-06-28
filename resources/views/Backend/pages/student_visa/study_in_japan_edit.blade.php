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

                        <form method="POST" action="{{route('study-japan-edit')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            <input type="hidden" value="{{$details->id}}" name="id">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Points</label>
                                                <input value="{{$details->points}}" class="form-control" name="points" type="text" id="name">
                                            </div>
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Description</label>
                                                <textarea id="visa"
                                                          name="description"
                                                          class="form-control">{{$details->answer}}</textarea>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{route('study-japan-back')}}" class="btn btn-dark"><i class="fa fa-backward"></i> </a>
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

@endsection
@push('scripts')
    <script>

        CKEDITOR.replace('visa');
    </script>

@endpush
