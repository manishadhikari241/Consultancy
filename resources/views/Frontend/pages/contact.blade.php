@extends ('Frontend.master.master')
@section('title')
    <title>{{ $title.' - '.getConfiguration('site_title').'-'.getConfiguration('site_description')}}</title>

@endsection
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact
                                Us</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">{!! getConfiguration('short_description') !!}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- contact -->
    <section class="section bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Contact Us</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="630" height="402" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=shine%20education%20services&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://www.crocothemes.net">crocothemes</a></div>
                        <style>.mapouter {
                                position: relative;
                                text-align: right;
                                height: 402px;
                                width: 630px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 402px;
                                width: 630px;
                            }</style>
                    </div>
                    <p class="mb-5">{!! getConfiguration('long_description') !!}</p>
                    <a href="tel:+{{getConfiguration('contact_no')}}" class="text-color h5 d-block">+{{getConfiguration('contact_no')}}</a>
                    <a href="mailto:yourmail@email.com"
                       class="mb-5 text-color h5 d-block">{{getConfiguration('email')}}</a>
                    <p>{{getConfiguration('address')}}</p>
                </div>
                <br>

                <div class="col-lg-5 ">
                    <form action="{{route('contact')}}" method="post">
                        @csrf
                        <input value="{{old('name')}}" type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
                        <input value="{{old('mail')}}" type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
                        <input value="{{old('subject')}}" type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
                        <textarea name="message" id="message" class="form-control mb-3"
                                  placeholder="Your Message">{{old('message')}}</textarea>
                        <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /contact -->


@endsection