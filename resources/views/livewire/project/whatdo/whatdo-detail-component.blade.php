<section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
    <div class="container">

               
        <div class="row" style="background-image: url({{asset('assets/image/0012.jpg')}});">
            <div class="col-lg-8 offset-lg-2">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">

                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 col-md-12 whitecolor">
                    <h3 class="float-left">Duyurular</h3>
                    <ul class="breadcrumb top10 bottom10 float-right">
                        <li class="breadcrumb-item hover-light"><a href="/">Anasayfa</a></li>
                        <li class="breadcrumb-item hover-light">Haberler</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="our-whatdos" class="bglight padding_top padding_bottom_half">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="news_item shadow-equal">
                    <div class="image">
                        <img src="{{ asset('storage/whatdoing') }}/{{ $whatdos->image }}" alt="{{ $whatdos->title }}" class="img-responsive">
                    </div>
                    <div class="news_desc text-center text-md-left">
                        <h3 class="text-capitalize font-normal darkcolor"><a href="news-detail.html">{{ $whatdos->title }}</a></h3>
                        <ul class="meta-tags top20 bottom20">
                            <li><a href="#."><i class="fas fa-calendar-alt"></i>{{$whatdos->created_at->diffForHumans()}}</a></li>
                            <li><a href="#."> <i class="far fa-user"></i> Admin </a></li>
                            {{-- <li><a href="#."><i class="far fa-comment-dots"></i>5</a></li> --}}
                        </ul>
                    
                     {!! $whatdos->description !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <aside class="sidebar whitebox mt-5 mt-md-0">
                    <div class="widget shadow-equal heading_space_half text-center text-md-left">
                        <h4 class="text-capitalize darkcolor bottom20">Haber Ara</h4>
                        <form class="widget_search">
                            <div class="input-group">
                                <label for="searchInput" class="d-none"></label>
                                <input type="search" class="form-control" placeholder="ara.." required id="searchInput">
                                <button type="submit" class="input-group-addon"><i class="fa fa-search"></i> </button>
                            </div>
                        </form>
                    </div>
                    <div class="widget heading_space_half shadow-equal wow fadeIn" data-wow-delay="350ms">
                        <h4 class="text-capitalize darkcolor bottom20 text-center text-md-left">Son Gönderiler</h4>

                        {{-- @foreach ($whatdos as $item)
                            
                      
                        <div class="single_post d-table bottom15">
                            <a href="#." class="post"><img src="{{ asset('storage/whatdos') }}/{{ $item->image }}" alt="{{ $item->title }}" alt="post image"></a>
                            <div class="text">
                                <a href="#.">{{$item->title}}</a>
                                <span>{{$item->created_at->diffForHumans()}}</span>
                            </div>
                        </div>
                         @endforeach --}}
                    {{-- </div>
                    <div class="widget shadow-equal heading_space_half text-center text-md-left">
                        <h4 class="text-capitalize darkcolor bottom20">Kategoriler</h4>
                        <ul class="webcats">
                            @foreach ($category as $cat)
                            <li>
                                <a href="{{route('whatdos.category' , ['category_slug'  => $cat->slug ])}}">{{$cat->name}}</a>
                            </li>
                           
                            @endforeach
                            
                            {{-- <li><a href="#.">web design <span>(20)</span></a></li> --}}
                        
                        {{-- </ul>
                    </div> --}}
                    {{-- <div class="widget shadow-equal heading_space_half text-center text-md-left">
                        <h4 class="text-capitalize darkcolor bottom20">Tags</h4>
                        <ul class="webtags">
                            <li><a href="#.">web design</a></li>
                            <li><a href="#.">network</a></li>
                            <li><a href="#.">marketing</a></li>
                            <li><a href="#.">posts</a></li>
                            <li><a href="#.">event</a></li>
                            <li><a href="#.">website</a></li>
                            <li><a href="#.">social</a></li>
                            <li><a href="#.">themeforest</a></li>
                            <li><a href="#.">creative</a></li>
                            <li><a href="#.">best solutions</a></li>
                        </ul>
                    </div> --}} 
                </aside>
            </div>
        </div>
    </div>
</section>
<!--Our whatdos Ends-->
<!-- Contact US -->
