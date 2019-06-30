@extends('Backend.master.master')
@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All Messages</h5>

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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contact as $key=> $value)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->subject}}</td>
                                    <td>{{$value->message}}</td>
                                    <td>{{$value->created_at}}</td>
                                    <td>
                                        <a href="{{route('delete-contact',$value->id)}}"
                                           class="btn btn-danger btn btn-sm"
                                           onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i> </a>
                                        <a href="" class="display btn btn-primary btn btn-sm"
                                           data-id="{{$value->id}}"><i
                                                    class="fa fa-reply"></i> </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Sn</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
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
    <div class="modal" id="myModal">

    </div>

@endsection
@push('scripts')

    <script>
        $(document).ready(function () {
            $('.display').click(function (e) {
                e.preventDefault();
                var $modal = $('#myModal');
                console.log($modal);
                var id = $(this).attr('data-id');
                var tempEditUrl = "{{route('reply',':id')}}";
                tempEditUrl = tempEditUrl.replace(':id', id);
                $modal.load(tempEditUrl, function (response) {
                    $modal.modal({show: true});
                });
            });
        });
    </script>

@endpush