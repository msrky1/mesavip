<main>
    <!--Page Header-->
    <section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax"
    
    
    >
        
        <div class="container">
            
            <div class="row" style="background-image: url({{asset('assets/image/0012.jpg')}});" >
                <div class="col-lg-6 offset-lg-3">
                    <div class="page-titles whitecolor text-center padding" >
                       
                    </div>
                </div>
            </div>
            <div class="gradient-bg title-wrap mt-n5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 whitecolor">
                        <h3 class="float-left">Başvuru</h3>
                        <ul class="breadcrumb top10 bottom10 float-right">
                            <li class="breadcrumb-item hover-light"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item hover-light">Başvurular</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header ends -->
    <!-- Contact US -->
    <section id="stayconnect1" class="bglight position-relative padding_top padding_bottom_half noshadow">
        <div class="container whitebox">
            <div class="widget py-5">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                        <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span
                                class="font-normal">Başvuru</span> Formu
                            <span class="divider-center"></span>
                        </h2>
                        <div class="col-md-8 offset-md-2 bottom35">
                            <p>Lütfen Başvuru Formunu Eksiksiz Doldurunuz. </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 order-sm-2">
                        <div class="contact-meta px-2 text-center text-md-left">
                            <div class="heading-title heading_small">
                                <h2 span class="defaultcolor mb-3">{{ $class->classroom }}</h2>
                                @if (Session::has('message'))
                                    <div class="alert alert-success">
                                        <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                            href="/"></a>
                                    </div>
                                @endif
                                <h3 class="darkcolor font-normal mb-4">Bursluluk Sınavı Başvurusu</h3>
                            </div>

                            <ul class="social-icons mt-4 mb-4 mb-sm-0 wow fadeInUp no-border darkcolor"
                                data-wow-delay="300ms">
                                <li><a href="javascript:void(0)" class="facebook"><i
                                            class="fab fa-facebook-f"></i> </a> </li>
                                <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i>
                                    </a> </li>
                                <li><a href="javascript:void(0)" class="linkedin"><i
                                            class="fab fa-linkedin-in"></i> </a> </li>
                                <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i>
                                    </a> </li>
                                <li><a href="javascript:void(0)" class="whatsapp"><i class="fab fa-whatsapp"></i>
                                    </a> </li>
                                <li><a href="javascript:void(0)"><i class="far fa-envelope"></i> </a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="heading-title  wow fadeInUp" data-wow-delay="300ms">
                            <form class="getin_form wow fadeInUp" data-wow-delay="400ms" id="contact-form-data"
                                enctype="multipart/form-data" action="{{route('add.basvuru')}}" method="POST">
                                @csrf
                                <div class="row px-2">
                                    <div class="col-md-12 col-sm-12" id="result"></div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="name1" class="d-none">Adınız Soyadınız</label>
                                            <input class="form-control" id="name1" name="name" type="text"
                                                placeholder="Adınız Soyadınız:" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="email1" class="d-none">Email Adresiniz</label>
                                            <input class="form-control" type="email" id="email1" name="email"
                                                placeholder="Email Adresiniz:" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="email1" class="d-none">TC Kimlik Numarası</label>
                                            <input class="form-control" type="number" id="email1"
                                                placeholder="TC Kimlik Numaranız:" name="tc" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                         Sınav Saatini Seçin
                                            <label for="email1" class="d-none">Sınav Saati</label>
                                             <select name="hour"> 
                                                 @foreach ($classtime as $item)
                                                     
                                                 
                                                 <option value="{{$item->hour}}">{{$item->hour}} </option>

                                                 @endforeach
                                             </select>
                                        </div>
                                    </div>

                                    <input class="form-control" type="hidden" id="email1" name="classroom_id"
                                        value="{{ $class->classroom_id }}">
                                    <input class="form-control" type="hidden" id="email1" name="classroom"
                                        value="{{ $class->classroom }}">

                                    {{-- <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="message1" class="d-none"></label>
                                            <textarea class="form-control" id="message1" placeholder="Message:" wire:model= "name" required  name="userMessage"></textarea>
                                        </div>
                                    </div> --}}
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" id="submit_btn1"
                                            class="contact_btn button gradient-btn w-100">Başvur</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($setting as $s)
                    <div class="col-lg-3 col-md-3">
                        <div class="widget text-center top60 w-100 p-0">
                            <div class="contact-box">
                                <span class="icon-contact bluecolor"><i class="fas fa-mobile-alt"></i></span>
                                <p class="bottom0"><a href="tel:+14046000396">{{ $s->contact }}</a></p>
                                <p class="bottom0"><a href="tel:+14046000396">{{ $s->whatsapp }}</a></p>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="widget text-center top60 w-100 p-0">
                            <div class="contact-box">
                                <span class="icon-contact bluecolor"><i class="fas fa-map-marker-alt"></i></span>
                                <p class="bottom0">{{ $s->address }}</p>
                                <p class="d-block">Kahramanmaraş</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="widget text-center top60 w-100 p-0">
                            <div class="contact-box">
                                <span class="icon-contact bluecolor"><i class="far fa-envelope"></i></span>
                                <p class="bottom0"><a href="mailto:admin@website.com">{{ $s->email }}</a></p>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-3">
                    <div class="widget text-center top60 w-100 p-0">
                        <div class="contact-box">
                            <span class="icon-contact bluecolor"><i class="far fa-clock"></i></span>
                            <p class="bottom15">UTC−05:00 <span class="d-block">UTC+01:00</span></p>
                        </div>
                    </div>
                </div> --}}
                @endforeach
            </div>
        </div>
    </section>
</main>
