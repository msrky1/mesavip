<header class="site-header" id="header" lang="tr">
    <nav class="navbar navbar-expand-lg transparent-bg static-nav ">
        <div class="color-lines d-block">

            <div class="row no-gutters top-color-bar height-30">
                <div class="col-4 bg-red"></div>
                <div class="col-4 bg-orange"></div>
                <div class="col-4 bg-blue"></div>
            </div>

            <div class="svg-div-zig-outer">
                <div class="svg-div-zig"></div>
            </div>


        </div>

        <div class="container navbar-design">


            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link active pagescroll" href="#header"> Anasayfa </a>
                    </li>

                    @foreach ($lock as $item)
                        @if ($item->lock == 'Açık')
                            <li class="nav-item">
                                <a class="nav-link pagescroll" href="#our-process">Bursluluk Başvurusu</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link pagescroll" href="#our-process">Sınav Giriş Belgesi</a>
                            </li>
                        @endif
                    @endforeach
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link pagescroll" href="#our-apps"> Hakkımızda </a>
                    </li>
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link pagescroll" href="#our-questions"> Sık Sorulan Sorular </a>
                    </li>
                    {{-- <li class="nav-item dropdown static">
                            <a class="nav-link pagescroll" href="#our-apps"> Şubelerimiz </a>
                        </li> --}}
                    <li class="nav-item dropdown position-relative">
                        <a class="nav-link pagescroll" href="#our-team"> Galeri </a>
                    </li>

                    {{-- <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-testimonial">Gözden Geçirin</a>
                        </li> --}}
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#stayconnect">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--side menu open button-->
        <a href="javascript:void(0)" class="d-inline-block sidemenu_btn" id="sidemenu_toggle">
            <span></span> <span></span> <span></span>
        </a>
        <div class="sticky-nav-bottom-holder-svg">
            <div class="svg-bottom"></div>
        </div>
    </nav>
    <!-- side menu -->
    <div class="side-menu opacity-0 bg-yellow">
        <div class="overlay"></div>
        <div class="inner-wrapper">
            <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
            <nav class="side-nav w-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#header">
                            Anasayfa
                        </a>
                    </li>
                    @foreach ($lock as $item)
                        @if ($item->lock == 'Açık')
                            <li class="nav-item">
                                <a class="nav-link pagescroll" href="#our-process">Bursluluk Başvurusu</a>
                            </li>
                        @endif
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-apps">Hakkımızda</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link pagescroll" href="/haberler">Bizden Haberler</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-team">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pagescroll" href="#our-questions">SSS</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link pagescroll" href="#stayconnect">İletişim</a>
                    </li> --}}
                </ul>
            </nav>
            <div class="side-footer w-100">
                <ul class="social-icons-simple white top40">
                    <li><a href="javascript:void(0)" class="facebook"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="twitter"><i class="fab fa-twitter"></i> </a> </li>
                    <li><a href="javascript:void(0)" class="insta"><i class="fab fa-instagram"></i> </a> </li>
                </ul>
                <p class="whitecolor">&copy; Akıl Treni Koleji</p>
            </div>
        </div>
    </div>
    <div id="close_side_menu" class="tooltip"></div>
    <!-- End side menu -->
</header>
