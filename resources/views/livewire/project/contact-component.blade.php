<main> 
    <!--Page Header-->
    <section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
            <div class="container">
                <div class="row" style="background-image: url({{asset('assets/image/0012.jpg')}});">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="page-titles whitecolor text-center padding">
                          
                        </div>
                    </div>
                </div>
                <div class="gradient-bg title-wrap mt-n5">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 whitecolor">
                            <h3 class="float-left">İletişim</h3>
                            <ul class="breadcrumb top10 bottom10 float-right">
                                <li class="breadcrumb-item "><a href="/">Anasayfa</a></li>
                                <li class="breadcrumb-item ">İletişim</li>
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
                            <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span class="font-normal">İletişim</span> Adresleri
                                <span class="divider-center"></span>
                            </h2>
                       
                        </div>
                      
                        <div class="col-md-6 col-sm-6 order-sm-2">
                            <div class="contact-meta px-2 text-center text-md-left">
                                <div class="heading-title heading_small">
                       
                                  @foreach ($setting as $item)
                                      
                                
                                    <h2 class="darkcolor font-normal mb-4">{{$item->name}}</h2>
                                    <h3 class="darkcolor font-normal mb-4">{{$item->contact}}</h3>
                                    <h3 class="darkcolor font-normal mb-4">Whatsapp: {{$item->whatsapp}}</h3>
                                    <h3 class="darkcolor font-normal mb-4">Adres: {{$item->address}}</h3>
                                    @endforeach
                                </div>
                                
                                <ul class="social-icons mt-4 mb-4 mb-sm-0 wow fadeInUp no-border darkcolor" data-wow-delay="300ms">
                                    <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                                    <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                                    <li><a href="javascript:void(0)" class="linkedin"><i class="fab fa-linkedin-in"></i> </a> </li>
                                    <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                                    <li><a href="javascript:void(0)" class="whatsapp"><i class="fab fa-whatsapp"></i> </a> </li>
                                    <li><a href="javascript:void(0)"><i class="far fa-envelope"></i> </a> </li>
                                </ul>
                            </div><br>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12646.29086129616!2d36.89052468567331!3d37.588678076698244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1652520187241!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                       
                    </div>
                </div>
                <div class="row">
                    @foreach ($setting as $s)
                        
                 
                    <div class="col-lg-3 col-md-3">
                        <div class="widget text-center top60 w-100 p-0">
                            <div class="contact-box">
                                <span class="icon-contact bluecolor"><i class="fas fa-mobile-alt"></i></span>
                                <p class="bottom0"><a href="tel:+14046000396">{{$s->contact}}</a></p>
                                <p class="bottom0"><a href="tel:+14046000396">{{$s->whatsapp}}</a></p>
                         
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="widget text-center top60 w-100 p-0">
                            <div class="contact-box">
                                <span class="icon-contact bluecolor"><i class="fas fa-map-marker-alt"></i></span>
                                <p class="bottom0">{{$s->address}}</p>
                                <p class="d-block">Kahramanmaraş</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="widget text-center top60 w-100 p-0">
                            <div class="contact-box">
                                <span class="icon-contact bluecolor"><i class="far fa-envelope"></i></span>
                                <p class="bottom0"><a href="mailto:admin@website.com">{{$s->email}}</a></p>
                               
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