@extends ('Frontend.master.master')
@section('title')
    <title>{{ $title.' - '.getConfiguration('site_title').'-'.getConfiguration('site_description')}}</title>

@endsection
@section('content')
    <!-- page title -->
    <section class="page-title-section overlay" data-background="{{asset('images/gallery'.'/'.'japan_study.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Study
                                in Japan</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    {{--<p class="text-lighten">{!! str_limit(getConfiguration('about'),'100') !!}</p>--}}

                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->
    <!-- about -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h3>JAPAN FACTS & FIGURES</h3>
                    <p><p><strong>JAPAN FACTS &amp; FIGURES</strong></p>

                    <ul>
                        <li>
                            <p>Japan&rsquo;s major four Islands are Honshu, Hokkaido, Kyushu, and Shikoku.&nbsp;</p>
                        </li>
                        <li>
                            <p>Closest neighbors - Taiwan, China, Russia and North and South Korea.&nbsp;</p>
                        </li>
                        <li>
                            <p>&nbsp;Major Cities - Tokyo, Nagoya, Osaka, Fukuoka&nbsp;</p>
                        </li>
                        <li>
                            <p>GDP :- 3rd Largest economy in the world</p>
                        </li>
                        <li>
                            <p>Currency &ndash;&nbsp; Yen ( JPY)</p>
                        </li>
                        <li>
                            <p>Education &ndash; 100% Literacy</p>
                        </li>
                        <li>
                            <p>Universities &ndash; More than 700</p>
                        </li>
                        <li>
                            <p>Top Research and Innovation&nbsp;</p>
                        </li>
                        <li>
                            <p>Health &ndash; Universal Health Insurance System, Highest life expectancy in world</p>
                        </li>
                        <li>
                            <p>Time Zone &ndash; JST (UTC 9)</p>
                        </li>
                        <li>
                            <p>Country Code &ndash; JP</p>
                        </li>
                        <li>
                            <p>Calling Code - +81</p>
                        </li>
                        <li>
                            <p>Total Population :-&nbsp;</p>
                        </li>
                        <li>
                            <p>Total Area :- 377,971 Km2&nbsp;</p>
                        </li>
                        <li>
                            <p>Internet TLD :- -.jp</p>
                        </li>
                        <li>
                            <p>Language Used :- Japanese</p>
                        </li>
                        <li>
                            <p>Religion :- Shintoism and Buddhism</p>
                        </li>
                        <li>
                            <p>Culture and Art &ndash; Calligraphy, Painting, Ikebana, Kabuki, Manga</p>
                        </li>
                        <li>
                            <p>Government :- Unitary State, Constitutional monarchy, Parliamentary System</p>
                        </li>
                    </ul>

                    <p><strong>JAPAN EDUCATION SYSTEM</strong></p>

                    <ul>
                        <li>
                            <p>Elementary School &ndash; 6 Years</p>
                        </li>
                        <li>
                            <p>Juniors High School &ndash; 3 Years</p>
                        </li>
                        <li>
                            <p>High School &ndash; 3 Years</p>
                        </li>
                        <li>
                            <p>University &ndash; 2 or 4 Years</p>
                        </li>
                    </ul>

                    <p><strong>Food and Cuisine</strong></p>

                    <ul>
                        <li>
                            <p>Traditional Food &ndash; Rice with Miso soup with side dishes often consist of fishes, pickle, vegetables</p>
                        </li>
                        <li>
                            <p>Noodles such as Soba and Udon.</p>
                        </li>
                        <li>
                            <p>Sushi and Yakitori is one of popular food throughout the world.</p>
                        </li>
                        <li>
                            <p>Meat based dishes tonkatsu is common.</p>
                        </li>
                        <li>
                            <p>Foreign Foods &ndash;&nbsp;</p>

                            <ul>
                                <li>
                                    <ul>
                                        <li>
                                            <ul>
                                                <li>
                                                    <p>Particularly Chinese foods called Ramen, Gyoza, Fry Dumplings</p>
                                                </li>
                                                <li>
                                                    <p>Western Food &ndash; Curry and Hambuerger Steaks</p>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </section>
    <section class="section" data-background="{{asset('images/gallery'.'/'.'japan.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <?php $i = 1;?>

                        @foreach($details as $value)
                            <div class="card">
                                <div class="card-header" id="heading<?php echo $i; ?>">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link <?php if ($i > 1) echo "collapsed"; ?>"
                                                type="button" data-toggle="collapse"
                                                data-target="#collapse<?php echo $i; ?>"
                                                aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>"
                                                aria-controls="collapse<?php echo $i; ?>">
                                            {{$value->points}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse<?php echo $i; ?>" class="collapse <?php if ($i == 1) echo 'show'; ?>"
                                     aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
                                    <div class="card-body">
                                        {!! $value->answer !!}                                </div>
                                </div>
                                <?php  $i++;?>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- /about -->

@endsection