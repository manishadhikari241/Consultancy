<!-- footer -->
<footer>
    <!-- newsletter -->

    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
                    <!-- logo -->
                    <a class="logo-footer" href="index.html"><img class="img-fluid mb-4"
                                                                  src="{{asset('images/gallery/logo-1.png')}}"
                                                                  alt="logo"></a>
                    <ul class="list-unstyled">
                        <li class="mb-2">{{getConfiguration('address')}}</li>
                        <li class="mb-2">{{getConfiguration('contact_no')}}</li>
                        <li class="mb-2">{{getConfiguration('website')}}</li>
                        <li class="mb-2">{{getConfiguration('email')}}</li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                </div>
                <!-- company -->
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
                    <h4 class="text-white mb-5">INFORMATION</h4>
                    <ul class="list-unstyled">
                        <li class="mb-3"><a class="text-color" href="{{route('about')}}">About Us</a></li>
                        <li class="mb-3"><a class="text-color" href="{{route('courses')}}">Courses</a></li>
                        <li class="mb-3"><a class="text-color" href="{{route('gallery')}}">Gallery</a></li>
                        <li class="mb-3"><a class="text-color" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <!-- links -->

                <!-- support -->

            </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-sm-left text-center">
                    <p class="mb-0">Copyright
                        <script>
                            var CurrentYear = new Date().getFullYear()
                            document.write(CurrentYear)
                        </script>
                        © Developed By B&M Group
                    </p>
                    All Rights Reserved.
                </div>
                <div class="col-sm-5 text-sm-right text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" target="_blank"
                                                             href="{{getConfiguration('facebook_link')}}"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" target="_blank"
                                                             href="{{getConfiguration('twitter_link')}}"><i
                                        class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" target="_blank"
                                                             href="{{getConfiguration('googleplus_link')}}"><i
                                        class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" target="_blank"
                                                             href="{{getConfiguration('instagram_link')}}"><i
                                        class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->