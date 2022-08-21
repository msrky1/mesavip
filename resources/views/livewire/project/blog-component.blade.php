<main>
     <!--Page Header-->
     <section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
        <div class="container">
            <div class="row" style="background-image: url({{asset('assets/image/0012.jpg')}});">
                      
                <div class="col-lg-8 offset-lg-2">
                    <div class="page-titles whitecolor text-center padding_top padding_bottom">
                     
                      
                        {{-- <h2 class="font-xlight heading-title-small">Hakkımızda</h2> --}}

                    </div>
                </div>
            </div>
            <div class="gradient-bg title-wrap">
                <div class="row">
                    <div class="col-lg-12 col-md-12 whitecolor">
                        <h3 class="float-left">Haberler</h3>
                        <ul class="breadcrumb top10 bottom10 float-right">
                            <li class="breadcrumb-item hover-light"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item hover-light">Haberler</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="our-blog" class="bglight padding_top padding_bottom_half">
        <div class="container">
            <div id="blog-measonry" class="cbp">
            
                @foreach ($blog as $item)
                  @if ($item->status == 'açık'  )
                   
              <div class="cbp-item">
                    <div class="news_item shadow text-center text-md-left">
                        <a class="image" href="{{route('blog.detail' , [$item->slug])}}">
                            <img src="{{asset('storage/blog')}}/{{$item->image}}" alt="{{$item->title}}" class="img-responsive">
                        </a>
                        <div class="news_desc">
                            <h3 class="text-capitalize font-normal darkcolor"><a href="news-detail.html">{{$item->title}}</a></h3>
                            <ul class="meta-tags top20 bottom20">
                                <li><a href="#."><i class="fas fa-calendar-alt"></i>{{$item->created_at->diffForHumans()}}</a></li>
                                <li><a href="#."> <i class="far fa-user"></i> Admin </a></li>
                                {{-- <li><a href="#."><i class="far fa-comment-dots"></i>8</a></li> --}}
                            </ul>
                            <p class="bottom35">{!! $item->description = Str::limit($item->description, 100) !!}</p>
                            <a href="{{route('blog.detail' , [$item->slug])}}" class="button btn-secondary">Haber Detay</a>
                        </div>
                    </div>
                </div> 

   
                      @endif
         
                @endforeach

                
        </div>
    </section>
</main>