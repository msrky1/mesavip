<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
    <div class="container">
        <div class="row" style="background-image: url({{asset('assets/image/0012.jpg')}});">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding">
                    {{-- <h2 class="font-bold"> Galeri</h2>
                    <h3 class="font-light py-2">Galeri</h3> --}}
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap mt-n5">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Akıl Treni Koleji</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Anasayfa</a></li>
                        <li class="breadcrumb-item hover-light">Galeri</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="gallery" class="bglight position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center wow fadeIn top15" data-wow-delay="300ms">
                <h2 class="heading bottom45 darkcolor font-light2">Akıl Treni Koleji  <span class="font-normal">Galeri</span>
                    <span class="divider-center"></span>
                </h2>
                <div class="col-md-6 offset-md-3 bottom40">
                    <p>Akıl Treni Koleji Galeri Sayfasına Hoş Geldiniz.</p>
                </div>
            </div>
           
            <div class="col-lg-12">
                <div id="grid-mosaic" class="cbp cbp-l-grid-mosaic-flat">
                    <!--Item 1-->

                    @foreach ($galery as $g)
                        
    
                    <div class="cbp-item brand graphics">
                        <img src="{{ asset('storage') }}/galery/{{$g->image}}" alt="">
                        <div class="gallery-hvr whitecolor">
                            <div class="center-box">
                                <a href="{{ asset('storage') }}/galery/{{$g->image}}" class="opens" data-fancybox="gallery" title="Zoom In"> <i class="fa fa-search-plus"></i></a>
                                <h4 class="w-100">Akıl Treni Koleji</h4>
                            </div>
                        </div>
                    </div>
                    <!--Item 2-->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>