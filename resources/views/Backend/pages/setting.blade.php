@extends('Backend.master.master')
@section('content')
    <form action="{{route('setting-page')}}" method="post" enctype="multipart/form-data">
        @csrf
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Configurations</h5>

                            <div class="card-tools">

                                <div class="btn-group">
                                    <button type="submit" class="btn btn-primary btn-sm pull-right">Update</button>
                                </div>
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
                            <div id="navbar-example">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link " data-toggle="tab" href="#profile" role="tab">Site
                                            Setting</a>
                                    </li>
                                    {{--<li class="nav-item">--}}
                                        {{--<a class="nav-link" data-toggle="tab" href="#home"--}}
                                           {{--role="tab">Home</a>--}}
                                    {{--</li>--}}
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#about" role="tab">About us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#media" role="tab">Social
                                            Media
                                            Info</a>
                                    </li>


                                </ul>


                                <!-- Tab panes {Fade}  -->

                                <div class="tab-content">


                                    <div class="tab-pane fade" id="profile" role="tabpanel">
                                        <br>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="title" class="col-sm-2 control-label">Site Title
                                                </label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="site_title" class="form-control"

                                                           value="{{getConfiguration('site_title')}}" id="title">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label for="site_description" class="col-sm-2 control-label">Site
                                                    Description</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="site_description" class="form-control"

                                                           id="site_description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="home" name="home" role="tabpanel">

                                    </div>

                                    <div class="tab-pane fade" id="about" name="About us" role="tabpanel">
                                        <br>
                                        <div class="bs-callout bs-callout-danger">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="our_vision">About</label>
                                                    </div>
                                                    <div class="col-sm-8">
            <textarea name="about" class="form-control" id="about_sec"
            >{{getConfiguration('about')}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Current About Image</label>
                                                <div class="container">
                                                    <div class="round-img">
                                                        <a href="#"><img class="fa-times-rectangle"
                                                                         src="{{asset('images/about'.'/'.getConfiguration('about_image_1'))}}"
                                                                         width="400px"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="who_we_are">About Page Image</label></div>
                                                    <div class="col-sm-8">
                                                        <input type="file" class="form-control" name="about_image_1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="who_we_are">Success Story</label></div>
                                                    <div class="col-sm-8">
            <textarea name="mission" id="mission" class="form-control"
                      rows="5">{{getConfiguration('mission')}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="">Current Success Story Image</label>
                                                <div class="container">
                                                    <div class="round-img">
                                                        <a href="#"><img class="fa-times-rectangle"
                                                                         src="{{asset('images/about'.'/'.getConfiguration('success_image'))}}"
                                                                         width="400px"
                                                                         alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <label for="who_we_are">Success Story Image</label></div>
                                                    <div class="col-sm-8">
                                                        <input type="file" class="form-control" name="success_image">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                    <div class="tab-pane active" id="media" name="Media" role="tabpanel">
                                        <br>
                                        <div class="form-group">
                                            <div class="row">

                                                <label for="twitter_link" class="col-sm-2 control-label">Twitter
                                                    Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" value="{{getConfiguration('twitter_link')}}"
                                                           name="twitter_link" class="form-control"
                                                           id="twitter_link">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label for="googleplus_link" class="col-sm-2 control-label">Google Plus
                                                    Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="googleplus_link" class="form-control"
                                                           value="{{getConfiguration('googleplus_link')}}"
                                                           id="googleplus_link">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label for="instagram_link" class="col-sm-2 control-label">Instagram
                                                    Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="instagram_link" class="form-control"
                                                           value="{{getConfiguration('instagram_link')}}"
                                                           id="instagram_link">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label for="linkedin_link" class="col-sm-2 control-label">Facebook
                                                    Link</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="facebook_link" class="form-control"
                                                           value="{{getConfiguration('facebook_link')}}"
                                                           id="linkedin_link">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="contact_no" class="col-sm-2 control-label">Contact
                                                    No.</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="contact_no" class="form-control"
                                                           value="{{getConfiguration('contact_no')}}"
                                                           id="contact_no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="address" class="col-sm-2 control-label">Address</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="address" class="form-control"
                                                           value="{{getConfiguration('address')}}"
                                                           id="address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="website" class="col-sm-2 control-label">Website</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="website" class="form-control"
                                                           value="{{getConfiguration('website')}}"
                                                           id="address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label for="email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" class="form-control"
                                                           value="{{getConfiguration('email')}}"
                                                           id="email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="footer">

                                </div>


                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->

                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </form>
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