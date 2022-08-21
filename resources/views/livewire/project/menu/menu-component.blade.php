
        <header class="site-header" id="header">
            <nav class="navbar navbar-expand-lg transparent-bg static-nav">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <img src="{{asset('assets')}}/kids/images/logo-white.png" alt="logo" class="logo-default">
                    <img src="{{asset('assets')}}/kids/images/logo-white.png" alt="logo" class="logo-scrolled">
                    </a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Anasayfa</a>
                            </li>
                            @foreach ($lock as $item)
                                
                           @if ($item->lock == 'Kapalı')
                               
                        
                            <li class="nav-item">
                                <a class="nav-link" href="/basvurular">Sınav Giriş Belgesi</a>
                            </li>
                          @else
                          <li class="nav-item">
                            <a class="nav-link" href="/">Sınav Başvurusu</a>
                        </li>
                            @endif
                            @endforeach
                            <li class="nav-item">
                                <a class="nav-link" href="/duyurular">Duyurular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeri">Galeri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/hakkimizda">Hakkımızda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/iletisim">İletişim</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--side menu open button-->
                <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
                    <span></span> <span></span> <span></span>
                </a>
            </nav>
            <!-- side menu -->
            <div class="side-menu opacity-0 bg-yellow">
                <div class="overlay"></div>
                <div class="inner-wrapper">
                    <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                    <nav class="side-nav w-100">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Anasayfa</a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link" href="/hakkimizda">Hakkımızda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/duyurular">Duyurular</a>
                            </li>
                          
                            <li class="nav-item">
                                <a class="nav-link collapsePagesSideMenu" data-toggle="collapse" href="#sideNavPages2">
                                    Site <i class="fas fa-chevron-down"></i>
                                </a>
                                <div id="sideNavPages2" class="collapse sideNavPages">
                                    <ul class="navbar-nav">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="/haberler">Haberler</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/galeri">Galeri</a>
                            </li>
                          

                            <li class="nav-item">
                                <a class="nav-link" href="/iletisim">İletişim</a>
                            </li>
                          
                          
                        </ul>
                    </nav>
                    <div class="side-footer w-100">
                        <ul class="social-icons-simple white top40">
                            <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                            <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                        </ul>
                        <p class="whitecolor">&copy; Akil Treni Koleji</p>
                    </div>
                </div>
            </div>
            <div id="close_side_menu" class="tooltip"></div>
            <!-- End side menu -->
        </header>