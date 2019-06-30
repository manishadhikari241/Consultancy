<!-- Main Sidebar Container -->

<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->

    <!-- Right navbar links -->
</nav>
<!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a target="_blank" href="{{route('index')}}" class="brand-link">

        <img src="{{asset('images/gallery/favicon.png')}}" class="brand-image img-circle elevation-3"
             style="background-color: white ">
        <span class="brand-text font-weight-light">Shine Education</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('images/user.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('dashboard')}}" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>


                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Courses
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('course')}}" class="nav-link">
                                <i class="nav-icon fa fa-address-card-o"></i>
                                <p>
                                    Add Course
                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('course-details')}}" class="nav-link">
                                <i class="fa fa-bookmark"></i>
                                <p>Course Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('links')}}" class="nav-link">
                                <i class="fa fa-link"></i>
                                <p>Links</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-address-book"></i>
                        <p>
                            Contact
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('manage-contact')}}" class="nav-link">
                                <i class="nav-icon fa fa-paragraph"></i>
                                <p>
                                    Manage Contact Page
                                </p></a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('contact-message')}}" class="nav-link">
                                <i class="nav-icon fa fa-paper-plane"></i>
                                <p>
                                    Message from Contact Us
                                </p></a>

                        </li>


                    </ul>
                </li>



                <li class="nav-header">Applicants</li>
                <li class="nav-item">
                    <a href="{{route('students')}}" class="nav-link">
                        <i class="nav-icon fa fa-user-secret"></i>
                        <p>View Applicants</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-bookmark"></i>
                        <p>
                            Student Visa
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('study-japan-back')}}" class="nav-link">
                                <i class="fa fa-plane"></i>
                                <p>
                                    Study in Japan
                                </p></a>

                        </li>


                    </ul>
                </li>
                <li class="nav-header">Image Section</li>

                <li class="nav-item">
                    <a href="{{route('gallery-manage')}}" class="nav-link">
                        <i class="fa fa-image"></i>
                        <p>
                            Gallery
                        </p></a>


                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fa fa-image"></i>
                        <p>
                            Slides
                            <i class="fa fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('slide-front')}}" class="nav-link">
                                <i class="fa fa-file-image-o"></i>
                                <p>
                                    Frontpage Slides
                                </p></a>

                        </li>
                        <li class="nav-item">
                            <a href="{{route('image-sections')}}" class="nav-link">
                                <i class="fa fa-clone"></i>
                                <p>
                                    Manage Image Sections </p></a>

                        </li>


                    </ul>
                </li>
                <li class="nav-header">Miscellaneous</li>

                <li class="nav-item">
                    <a href="{{route('testimonial')}}" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>
                            Testimonials
                        </p></a>

                </li>


                <li class="nav-item">
                    <a href="{{route('setting-page')}}" class="nav-link">
                        <i class="nav-icon fa fa-wrench"></i>
                        <p>
                            Setting
                        </p></a>

                </li>

                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="fa fa-power-off"></i>
                        <p>Logout</p>
                    </a>
                </li>


            </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
