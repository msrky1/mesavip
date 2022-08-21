<main>
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-spinner"></div>
    </div>
    <!--PreLoader Ends-->

    

    <!--MAIN SLIDER START-->
    <div id="slider-section" class="slider-section">
        
        <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0">
            <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
            <div id="vertical-bullets" class="rev_slider fullwidthabanner white vertical-tpb" data-version="5.4.1">
                <ul>


                    <section id="header" class="padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-12">
                                    <div class="heading-title bottom30 wow fadeInLeft" data-wow-delay="200ms">
                                        <img src="{{asset('assets')}}/kids/images/logo-white.png" alt="logo" class="logo-img">
                                        
                                            
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-5 col-sm-12 wow fadeInRight" data-wow-delay="200ms">
                                    <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left"></p>
                                </div>
                            </div>
                            <div class="row d-flex align-items-center" id="app-feature">
                                <div class="col-lg-3 col-md-4 col-sm-12">
                                    <div class="text-center text-md-left">
                                        @foreach ($lock as $item)
                                            @if ($item->lock == 'Açık')
                                                <div class="feature-item mt-1 wow fadeInLeft" data-wow-delay="200ms">
                                                    <a href="#our-process">
                                                        <div class="icon"><i class="fas fa-puzzle-piece"></i>
                                                        </div>
                                                        <div class="text">
                                                            <h4 class="bottom15">
                                                                <span class="d-inline-block">Sınav Başvuruları</span>
                                                            </h4>
                                                            <p>Sınav Başvurularını bu bölümden yapabilirsiniz.</p>
                                                    </a>

                                                </div>
                                    </div>
                                    @endif
                                    @endforeach
                                    <div class="feature-item mt-5 wow fadeInLeft" data-wow-delay="250ms">
                                        <div class="icon"><i class="fas fa-newspaper"></i></div>
                                        <div class="text">
                                      <a href="/haberler" >    <h4 class="bottom15">
                                                <span class="d-inline-block">Haberler</span>
                                            </h4>
                                            <p>Bizden Haberler</p> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-12 text-center">
                                <div class="image feature-item d-inline-block wow fadeIn my-5 my-md-0"
                                    data-wow-delay="400ms">
                                    {{-- <img src="{{asset('assets')}}/image/01.jpg" alt="mobile phones"> --}}
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>

                                            @foreach ($slider as $item)
                                                <li data-target="#carouselExampleIndicators"
                                                    data-slide-to="{{ $item->id }}"></li>
                                            @endforeach
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" src="{{ asset('assets') }}/image/01.jpg"
                                                    alt="First slide">

                                                <div class="carousel-caption d-none d-md-block">

                                                </div>
                                            </div>
                                            @foreach ($slider as $item)
                                                <div class="carousel-item">
                                               <a href="{{$item->link}}" >   <img style="width: 400px"
                                                        src="{{ asset('storage') }}/image/{{ $item->image }}"
                                                        alt="Second slide"> </a>

                                                    <div class="carousel-caption d-none d-md-block">
                                                        {{-- <h5
                                                            style="background-color: black; border-radius:50px; padding:10;">
                                                            {{ $item->title }}
                                                            {!! $item->description !!}</h5>

                                                        <a href="{{ $item->description }}"> <button type="submit"
                                                                class="btn yellow-blue-btn rounded-pill  w-100"
                                                                id="submit_btn">Detay</button> </a> --}}

                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Geri</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">İleri</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="text-center text-md-right">
                                    <div class="feature-item mt-1 wow fadeInRight" data-wow-delay="200ms">
                                        <a href="/duyurular">
                                            <div class="icon"><i class="fas fa-book"></i></div>
                                            <div class="text">
                                                <h4 class="bottom15">
                                                    <span class="d-inline-block">Duyurular</span>
                                                </h4>
                                                <p>Akıl Treni Koleji Duyurular</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="feature-item mt-5 wow fadeInRight" data-wow-delay="250ms">
                                    <a href="/iletisim">
                                        <div class="icon"><i class="fas fa-address-book"></i></div>
                                        <div class="text">
                                            <h4 class="bottom15">
                                                <span class="d-inline-block">İletişim</span>
                                            </h4>
                                            <p>Bizimle İletişime Geçşin</p>
                                    </a>
                                </div>
                            </div>
                        </div>  
            </div>
            {{-- <video id="videoBG" poster="{{asset('assets')}}/video/akiltreni.jpg" autoplay muted loop > 
                <source src="{{asset('assets')}}/video/akiltreni.mp4" type="video/mp4">
           </video>  --}}
        </div>
    </div>
    
  
    </section>



    </ul>
    </div>

    </div>

    <div class="svg-slider-bottom-holder">
        <div class="svg-slider-bottom"></div>
    </div>

    <ul class="social-icons social-icons-simple revicon white d-none d-md-block d-lg-block">
        <li class="d-table"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a> </li>
        <li class="d-table"><a href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
    </ul>
    </div>
    <!--Main SLIDER END -->
 
    <!--Some Services-->
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div id="services-slider" class="owl-carousel">

                    @foreach ($whatdo as $wh)
                        <div class="item">

                          
                        <div class="service-box bg-{!! $wh->color !!}">
                            <img style="width: 400px" src="{{asset('storage')}}/whatdoing/{{$wh->image}}" alt="">
                                {{-- <span class="bottom25">{!! $wh->icon !!} </span>
                                <h4 class="bottom10 text-nowrap"><a href="{{ route('whatdo.detail', [$wh->slug]) }}"
                                        class="font-10">{!! $wh->title !!} </a></h4>
                                <p>{!! $wh->description = Str::limit($wh->description, 50) !!}</p>
                                <a href="{{ route('whatdo.detail', [$wh->slug]) }}" class="font-10"> <button
                                        class="btn btn-success">Detay</button></a> 
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div> 
    <div class="container">
        <div style=" text-align: center; ">

            <img width="50" style="transform:rotate(-90deg)" src="{{ asset('assets/icons') }}/arrow.gif"
                alt="Akıl Treni Koleji Duyurular">
            <h3> DUYURULAR </h3>

        </div>
    </div> --}}
    <!--Some Services ends-->
    <!--Some Feature -->
    <section id="about" class="single-feature padding mt-n5">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-lg-2 col-lg-8 wow fadeInUp" data-wow-delay="300ms">
                    <div class="about-image-holder">
                        <img src="{{ asset('assets') }}/kids/images/about-kids.png" alt="about image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Some Feature ends-->
    <!-- WOrk Process-->
    @foreach ($lock as $item)
        @if ($item->lock == 'Açık')
            <section id="our-process" class="padding bg-bluen-mat">
                <div class="svg-process-top-holder">
                    <div class="svg-process-top"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                                <span>Bursluluk Sınavı İçin Lütfen Sınıf Seçin ve Daha Sonra Formu Doldurun </span>
                                <h2 class="font-normal">Bursluluk Sınavı Başvurusu</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <ul class="process-wrapp">
                            @foreach ($class as $cla)
                                <li class="whitecolor wow fadeIn" data-wow-delay="300ms">
                                    <span class="pro-step bottom20"> {{ $cla->classroom_id }} </span>
                                    <a href="{{ route('class.detail', ['classroom_id' => $cla->classroom_id]) }}">
                                        <button class="basvuru-btn">Başvur</button>
                                    </a>
                                    <a href="{{ route('class.detail', ['classroom_id' => $cla->classroom_id]) }}">
                                        <p class="fontbold bottom20">{{ $cla->classroom }}</p>
                                    </a>
                                    <p class="mt-n2 mt-sm-0">Lütfen Sınıf Seçin</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="svg-process-bottom-holder">
                    <div class="svg-process-bottom"></div>
                </div>

            </section>
        @else
            <section id="our-process" class="padding bg-red">
                <div class="svg-process-top-holder">
                    <div class="svg-process-top"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <div class="heading-title whitecolor wow fadeInUp" data-wow-delay="300ms">
                                <span>Bursluluk Sınavı Sınav Giriş Belgenizi Alın </span>
                                <h2 class="font-normal">Bursluluk Sınavı Sınav Giriş Belgesi</h2>
                                <div class="container">
                                    <div class="row">
                                        <nav class="navbar navbar-expand-lg mx-auto">

                                            <a href="/basvurular"> <button type="submit"
                                                    class="btn yellow-blue-btn rounded-pill  w-100"
                                                    id="submit_btn">Sınav Giriş Belgesi</button> </a>
                                        </nav>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <ul class="process-wrapp">




                            </div>
                        </div>
                        <div class="svg-process-bottom-holder">
                            <div class="svg-process-bottom"></div>
                        </div>

            </section>
        @endif
    @endforeach


    <!--WOrk Process ends-->
    <!-- Mobile Apps -->
    {{-- <section id="our-apps" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <div class="heading-title bottom30 wow fadeInLeft" data-wow-delay="200ms">
                        <span class="defaultcolor text-center text-md-left">Quisque tellus risus, adipisci
                            viverra</span>
                        <h2 class="bottom30 darkcolor font-normal text-center text-md-left">Every Kid is Important</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-12 wow fadeInRight" data-wow-delay="200ms">
                    <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">Curabitur mollis bibendum luctus.
                        Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus
                        metus sollicitudin. Quisque vitae sodales lectus. </p>
                </div>
            </div>
            <div class="row d-flex align-items-center" id="app-feature">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="text-center text-md-left">
                        <div class="feature-item mt-1 wow fadeInLeft" data-wow-delay="200ms">
                            <div class="icon"><i class="fas fa-puzzle-piece"></i></div>
                            <div class="text">
                                <h4 class="bottom15">
                                    <span class="d-inline-block">Playing Activity</span>
                                </h4>
                                <p>This is Quisque tellus version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet</p>
                            </div>
                        </div>
                        <div class="feature-item mt-5 wow fadeInLeft" data-wow-delay="250ms">
                            <div class="icon"><i class="fas fa-swimmer"></i></div>
                            <div class="text">
                                <h4 class="bottom15">
                                    <span class="d-inline-block">Swimming</span>
                                </h4>
                                <p>This is Quisque tellus version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 text-center">
                    <div class="image feature-item d-inline-block wow fadeIn my-5 my-md-0" data-wow-delay="400ms">
                        <img src="{{ asset('assets') }}/kids/images/kids-activity.png" alt="mobile phones">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="text-center text-md-right">
                        <div class="feature-item mt-1 wow fadeInRight" data-wow-delay="200ms">
                            <div class="icon"><i class="fas fa-book"></i></div>
                            <div class="text">
                                <h4 class="bottom15">
                                    <span class="d-inline-block">Online Course</span>
                                </h4>
                                <p>This is Quisque tellus version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet</p>
                            </div>
                        </div>
                        <div class="feature-item mt-5 wow fadeInRight" data-wow-delay="250ms">
                            <div class="icon"><i class="fas fa-dumbbell"></i></div>
                            <div class="text">
                                <h4 class="bottom15">
                                    <span class="d-inline-block">Health / Fitness</span>
                                </h4>
                                <p>This is Quisque tellus version of Lorem Ipsum. Proin gravida nibh vel velit auctor
                                    aliquet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Mobile Apps ends-->
    <!-- Counters -->
    {{-- <section id="bg-counters" class="padding bg-counters bg-orange">
        <div class="svg-counter-top-holder">
            <div class="svg-counter-top"></div>
        </div>
        <div class="container">
            <div class="row align-items-center text-center">
                <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                    <div class="counters whitecolor  top10 bottom10">
                        <span class="count_nums font-light" data-to="1994" data-speed="2500"> </span>
                    </div>
                    <h3 class="font-light whitecolor top20">Since We Started</h3>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="kids-activity-holder">
                        <img src="{{ asset('assets') }}/kids/images/kids-paint.png" alt="my paints image">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 bottom10">
                    <div class="counters whitecolor top10 bottom10">
                        <span class="count_nums font-light" data-to="1395" data-speed="2500"> </span>
                    </div>
                    <h3 class="font-light whitecolor top20">Kids in Classes</h3>
                </div>
            </div>
        </div>
        <div class="svg-counter-bottom-holder">
            <div class="svg-counter-bottom"></div>
        </div>
    </section> --}}
    <!-- Counters ends-->
    <section id="our-apps" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <div class="heading-title bottom30 wow fadeInLeft" data-wow-delay="200ms">
                        <span class="defaultcolor text-center text-md-left">
                            @foreach ($about as $item)
                                {{ $item->title }}
                            @endforeach
                        </span>
                        <h2 class="bottom30 darkcolor font-normal text-center text-md-left">
                            @foreach ($about as $item)
                                {{ $item->title_one }}
                            @endforeach
                        </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-12 wow fadeInRight" data-wow-delay="200ms">
                    <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">

                        @foreach ($about as $item)
                            <p>{{ $item->description }}</p>
                        @endforeach

                </div>
            </div>

        </div>
    </section>

    <section id="our-questions" class="padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-12">
                    <div class="heading-title bottom30 wow fadeInLeft" data-wow-delay="200ms">
                        <span class="defaultcolor text-center text-md-left">Akıl Treni Koleji</span>
                        <h2 class="bottom30 darkcolor font-normal text-center text-md-left"> Sık Sorulan Sorular </h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-12 wow fadeInRight" data-wow-delay="200ms">
                    <p class="heading_space mt-n3 mt-sm-0 text-center text-md-left">

                        @foreach ($questions as $item)
                            <h3>{{ $item->title }}</h3>
                            <p>{{ $item->description }}</p>
                        @endforeach

                </div>
            </div>

        </div>
    </section>
    <!-- Our Team-->
    <section id="our-team" class="padding_top half-section-alt teams-border">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="heading-title wow fadeInLeft" data-wow-delay="200ms">
                        <span class="defaultcolor text-center text-md-left">Akıl Treni Koleji</span>
                        <h2 class="darkcolor font-normal bottom30 text-center text-md-left">Galeri</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="200ms">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="ourteam-slider" class="owl-carousel">
                        @foreach ($galery as $g)
                            <div class="item">
                                <div class="team-box wow fadeInUp" data-wow-delay="150ms">
                                    <div class="image">
                                        <a href="{{ asset('storage') }}/galery/{{ $g->image }}" data-fancybox>
                                            <img src="{{ asset('storage') }}/galery/{{ $g->image }}"
                                                alt="Akıl Treni Koleji">
                                        </a>
                                    </div>
                                    <div class="team-content">
                                        <h4 class="darkcolor">Akıl Treni Koleji</h4>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-team-bottom-holder">
            <div class="svg-team-bottom"></div>
        </div>
    </section>
    <!-- Our Team ends-->

    <!-- Partners-->
    {{-- <section id="our-partners" class="padding_top padding_bottom bglight">
        <div class="container">
            <div class="row">
                <h2 class="d-none">Partners Carousel</h2>
                <div class="col-md-12 col-sm-12">
                    <div id="partners-slider" class="owl-carousel">
                        <div class="item">
                            <div class="logo-item"> <img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-1.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-2.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-3.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-4.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-5.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-1.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-2.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-3.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-4.png"></div>
                        </div>
                        <div class="item">
                            <div class="logo-item"><img alt=""
                                    src="{{ asset('assets') }}/kids/images/logo-5.png"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Partners ends-->
    {{-- <!-- Testimonials -->
    <section id="our-testimonial" class="bglight padding_bottom">
        <div class="svg-testimonial-top-holder">
            <div class="svg-testimonial-top"></div>
        </div>
        <div class="parallax page-header testimonial-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 col-md-12 text-center">
                        <div class="heading-title wow fadeInUp padding_testi" data-wow-delay="300ms">
                            <span class="whitecolor">Quisque tellus risus, adipisci</span>
                            <h2 class="whitecolor font-normal">Some Happy Parents</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="owl-carousel" id="testimonial-slider">
                <!--item 1-->
                <div class="item testi-box">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <div class="testimonial-round d-inline-block">
                                <img src="{{ asset('assets') }}/kids/images/testimonial-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12  text-center">
                            <p class="bottom15 testimional-para top15 w-50 ml-auto mr-auto">We have a number of
                                different teams within our agency that specialise in different areas of business so you
                                can be sure that you won’t receive a generic service and although we boast a years and
                                years of service.</p>
                            <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h4 class="defaultcolor font-light top15"><a href="#.">John Smith</a></h4>
                            <p>New York,USA</p>
                        </div>
                    </div>
                </div>
                <!--item 2-->
                <div class="item testi-box">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 text-center">
                            <div class="testimonial-round d-inline-block">
                                <img src="{{ asset('assets') }}/kids/images/testimonial-6.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12  text-center">
                            <p class="bottom15 top15 testimional-para w-50 ml-auto mr-auto">We have a number of
                                different teams within our agency that specialise in different areas of business so you
                                can be sure that you won’t receive a generic service and although we boast a years and
                                years of service.</p>
                            <span class="d-inline-block test-star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <h4 class="defaultcolor font-light top15"><a href="#.">Kate Joan</a></h4>
                            <p>New York,USA</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="svg-testimonial-bottom-holder">
            <div class="svg-testimonial-bottom"></div>
        </div>
    </section>
    <!--testimonials end--> --}}
    <!-- Contact US -->
    {{-- <section id="stayconnect" class="bglight position-relative">
        <div class="container">
            <div class="contactus-wrapp">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="heading-title wow fadeInUp text-center text-md-left" data-wow-delay="300ms">
                            <h3 class="darkcolor bottom20 font-bold">Lets Get In Touch</h3>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
                            <div class="row">
                                <div class="col-md-12 col-sm-12" id="result"></div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="userName" class="d-none"></label>
                                        <input class="form-control" type="text" placeholder="Name" required
                                            id="userName" name="userName">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="companyName" class="d-none"></label>
                                        <input class="form-control" type="text" placeholder="Company"
                                            id="companyName" name="companyName">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        <label for="email" class="d-none"></label>
                                        <input class="form-control" type="email" placeholder="Email" required
                                            id="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <button type="submit" class="btn yellow-blue-btn rounded-pill  w-100"
                                        id="submit_btn">Call Back</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Contact US ends -->
    <!--Site Footer Here-->

</main>
