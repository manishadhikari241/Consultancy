<!-- header -->
@php
    $route= Illuminate\Support\Facades\Route::currentRouteName();
@endphp
<header class="fixed-top header">
    <!-- top header -->
    <div class="top-header py-2 bg-white">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-lg-8 text-center text-lg-left">
                    <ul class="list-inline">

                        <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="{{route('about')}}">About</a></li>
                        <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="{{route('contact')}}">contact</a></li>
                        <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="{{route('gallery')}}">Gallery</a></li>
                        <li class="list-inline-item"><a
                                    class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block"
                                    href="{{route('login')}}"
                            >login</a></li>

                    </ul>
                </div>
                <div class="col-lg-4 text-center text-lg-right">

                    <a class="text-color mr-3"
                       href="callto:+{{getConfiguration('contact_no')}}"><strong>CONTACT</strong>
                        : {{getConfiguration('contact_no')}}</a>
                    <ul class="list-inline d-inline">
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
    <!-- navbar -->
    <div class="navigation w-100">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('images/gallery/logo-1.png')}}" height="68px" width="200px"></a>
                {{--alt="logo"></a>--}}
                <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item @if($route=='index') active @endif ">
                            <a class="nav-link" href="{{route('index')}}">Home</a>
                        </li>
                        <li class="nav-item @if($route=='about') active @endif  @@about">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item @if($route=='courses') active @endif @@courses">
                            <a class="nav-link" href="{{route('courses')}}">COURSES</a>
                        </li>
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Student Visa
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('study-japan')}}">Study in Japan</a>
                                {{--<a class="dropdown-item" href="teacher-single.html">Working Visa</a>--}}
                                {{--<a class="dropdown-item" href="notice.html">Notice</a>--}}

                            </div>
                        </li>
                        <li class="nav-item dropdown view">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                Working Visa
                            </a>
                            {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                                {{--<a class="dropdown-item" href="{{route('study-japan')}}">Study in Japan</a>--}}
                                {{--<a class="dropdown-item" href="teacher-single.html">Working Visa</a>--}}
                                {{--<a class="dropdown-item" href="notice.html">Notice</a>--}}

                            {{--</div>--}}
                        </li>


                        {{--<li class="nav-item @if($route=='contact') active @endif @@contact">--}}
                            {{--<a class="nav-link" href="{{route('contact')}}">CONTACT</a>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- /header -->