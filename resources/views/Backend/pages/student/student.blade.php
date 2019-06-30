@extends('Backend.master.master')
@section('content')

    <div class="col-md-12">


        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Applicants</h5>

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
                        <th>Course Name</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($student as $key => $value)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$value->courses->name}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->contact}}</td>
                            <td>{{$value->address}}</td>
                            <td>
                                <a href="{{route('delete-student',$value->id)}}" onclick="return confirm('Confirm Delete?')"
                                   class="btn btn-sm btn btn-danger"><i class="fa fa-trash"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

            <!-- ./card-body -->

            <!-- /.card-footer -->
        </div>
    </div>

@stop