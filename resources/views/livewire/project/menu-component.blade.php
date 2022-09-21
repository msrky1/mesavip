<header class="header-section">
    <div class="header-top">
        <div class="container">
            <div class="header-top-area">
                <ul class="lab-ul left">
                    <li>
                        <i class="icofont-ui-call"></i> <span> 0344 211 01 46 / 344 211 01 47  </span>
                    </li>
                    <li>
                        <i class="icofont-location-pin"></i> Onikişubat/Kahramanmaraş
                    </li>
                </ul>
                <ul class="lab-ul social-icons d-flex align-items-center">
                    <li><p>Sosyal Medya </p></li>
                    <li><a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a></li>
                    <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                    <li><a href="#" class="vimeo"><i class="icofont-vimeo"></i></a></li>
                    <li><a href="#" class="skype"><i class="icofont-skype"></i></a></li>
                    <li><a href="#" class="rss"><i class="icofont-rss-feed"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="/"><img width="370px" src="{{asset('assets')}}/logo.png" alt="logo"></a>
                </div>
                <div class="menu-area">
                    <div class="menu">
                        <ul class="lab-ul">
                            <li>
                                <a href="/">Anasayfa</a>
                                {{-- <ul class="lab-ul">
                                    <li><a href="/" class="active">Home One</a></li>
                                  
                                </ul> --}}
                            </li>
                            
                            <li>
                                <a href="#0">Kurumsal</a>
                                <ul class="lab-ul">
                                    <li><a href="/ekibimiz">Kadromuz</a></li>
                                    <li><a href="/hakkimizda">Misyon ve Vizyonumuz</a></li>
                                    <li><a href="/">İnsan Kaynakları</a></li>
                                    <li><a href="/">Belge ve Sertifikalarımız</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#0">Eğitim Birimleri</a>
                                <ul class="lab-ul">
                                    @foreach ($unit as $u)
                                        
                                    
                                    <li><a href="{{$u->slug}}">{{$u->title}}</a></li>
                                    
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Eğitim Sistemleri</a>
                                <ul class="lab-ul">
                                    @foreach ($system as $item)
                                        
                                   
                                    <li><a href="{{$item->slug}}">{{$item->title}}</a></li>
                                    

                                    @endforeach
                                    {{-- <li>
                                        <a href="#0">Shop Pages</a>
                                        <ul class="lab-ul">
                                            <li><a href="shop.html">Shop Page</a></li>
                                            <li><a href="shop-single.html">Shop Details Page</a></li>
                                            <li><a href="cart-page.html">Shop Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="search-page.html">Search Page</a></li>
                                    <li><a href="search-none.html">Search None</a></li>
                                    <li><a href="404.html">404</a></li> --}}
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Duyurular</a>
                                <ul class="lab-ul">
                                    <li><a href="about.html">Bizden Haberler</a></li>
                                    <li><a href="team.html">Basında Biz</a></li>
                                    <li><a href="instructor.html">Deneme Sınavları</a></li>
                                    <li><a href="instructor.html">Sınav Takvimi</a></li>
                                    {{-- <li>
                                        <a href="#0">Shop Pages</a>
                                        <ul class="lab-ul">
                                            <li><a href="shop.html">Shop Page</a></li>
                                            <li><a href="shop-single.html">Shop Details Page</a></li>
                                            <li><a href="cart-page.html">Shop Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="search-page.html">Search Page</a></li>
                                    <li><a href="search-none.html">Search None</a></li>
                                    <li><a href="404.html">404</a></li> --}}
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Sosyal Etkinlikler</a>
                                <ul class="lab-ul">
                                    @foreach ($category as $item)
                                        
                                    <li><a href="about.html">{{$item->name}}</a></li>
                                    @endforeach

                                    {{-- <li>
                                        <a href="#0">Shop Pages</a>
                                        <ul class="lab-ul">
                                            <li><a href="shop.html">Shop Page</a></li>
                                            <li><a href="shop-single.html">Shop Details Page</a></li>
                                            <li><a href="cart-page.html">Shop Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="search-page.html">Search Page</a></li>
                                    <li><a href="search-none.html">Search None</a></li>
                                    <li><a href="404.html">404</a></li> --}}
                                </ul>
                            </li>
                            <li><a href="/galeri">Galeri</a></li>
                            <li><a href="/iletisim">İletişim</a></li>
                        </ul>
                    </div>
                    
                    <a href="/" class="login"><i class="icofont-phone"></i> <span>Ara</span> </a>
                    <a href="/" class="signup"><i class="icofont-map"></i> <span>Harita</span> </a>

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="ellepsis-bar d-lg-none">
                        <i class="icofont-info-square"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>