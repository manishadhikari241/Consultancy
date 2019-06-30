@extends('Backend.master.master')
@section('content')
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Add Testimonial</h5>

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

                        <form method="POST" action="{{route('testimonial')}}"
                              accept-charset="UTF-8" class=""
                              enctype="multipart/form-data">
                            @csrf

                            <div class="box box-default">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Customer Name *</label>
                                                <input class="form-control" name="name" type="text" id="name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">

                                            <div class="form-group ">
                                                <label for="caption" class="control-label">Image</label>
                                                <input class="form-control" name="image" type="file"
                                                       id="caption">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Review</label>
                                                <textarea id="desc"
                                                          name="review"
                                                          class="form-control"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group ">
                                                <label for="name" class="control-label">Rating</label>
                                                <select type="text" name="rating" class="form-control">
                                                    <option selected>--Please select rating--</option>
                                                    <option value="1">1 star</option>
                                                    <option value="2">2 star</option>
                                                    <option value="3">3 star</option>
                                                    <option value="4">4 star</option>
                                                    <option value="5">5 star</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Add Testimonial</button>


                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

