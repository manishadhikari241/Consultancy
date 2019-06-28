@extends('Backend.master.master')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Manage Contact Page</h5>

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
                        <form class="form-group" action="{{route('manage-contact')}}" method="post">
                            @csrf
                            <div class="col-md-6">
                                <label for="short_description">Short Description</label>
                                <textarea id="short_description" id="short_description" name="short_description"
                                          class="form-control">{{getConfiguration('short_description')}}</textarea>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group ">
                                    <label for="name" class="control-label">Long Description</label>
                                    <textarea class="form-control" name="long_description"
                                              id="long_description">{{getConfiguration('long_description')}}</textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>

                        </form>

                        <!-- /.row -->
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
@push('scripts')

    <script>
        CKEDITOR.replace('long_description');
        CKEDITOR.replace('short_description');

    </script>
@endpush