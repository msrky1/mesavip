 <!-- Page Header section start here -->
 <div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>MESA VİP EĞİTİM KURUMLARI</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Haber Detay</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->


<!-- blog section start here -->
<div class="blog-section blog-single padding-tb section-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <article>
                    <div class="section-wrapper">
                        <div class="row row-cols-1 justify-content-center g-4">
                            <div class="col">
                                <div class="post-item style-2">
                                    <div class="post-inner">
                                        <div class="post-thumb">
                                            <img src="{{asset('storage/social')}}/{{$blog->image}}" alt="blog thumb rajibraj91" class="w-100">
                                        </div>
                                        <div class="post-content">
                                            <h2>  {!! $blog->title !!}</h2>
                                            <div class="meta-post">
                                                <ul class="lab-ul">
                                                    <li><a href="#"><i class="icofont-calendar"></i>{{$blog->created_at->diffForHumans()}}</a></li>
                                                    <li><a href="#"><i class="icofont-ui-user"></i>Admin</a></li>
                                                </ul>
                                            </div>
                                            <p>  {!! $blog->description !!}</p>

                                           
                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-12">
                <aside>
                    <div class="widget widget-search">
                        <form action="/" class="search-wrapper">
                            <input type="text" name="s" placeholder="Ara..">
                            <button type="submit"><i class="icofont-search-2"></i></button>
                        </form>
                    </div>
                    <div class="widget widget-category">
                        <div class="widget-header">
                            <h5 class="title">Kategoriler</h5>
                        </div>
                        <ul class="widget-wrapper">
                     @foreach ($category as $cat)
                            <li>
                               
                                <a href="{{route('blog.category' , ['category_slug'  => $cat->slug ])}}" class="d-flex flex-wrap justify-content-between">
                                    <span><i class="icofont-double-right"></i>{{$cat->name}}</span></a>
                            </li>
                            @endforeach 
                        </ul>
                    </div>

                    <div class="widget widget-post">
                        <div class="widget-header">
                            <h5 class="title">En Son Haberler</h5>
                        </div>
                        <ul class="widget-wrapper">

                            @foreach ($blogRecent as $item)
                            
                      
                            <li class="d-flex flex-wrap justify-content-between">
                                <div class="post-thumb">
                                    <a href="{{route('blog.detail' , [$item->slug])}}"><img src="{{ asset('storage/blog') }}/{{ $item->image }}" alt="{{ $item->title }}"></a>
                                </div>
                                <div class="post-content">
                                    <a href="{{route('blog.detail' , [$item->slug])}}"><h6>{{ $item->title }}</h6></a>
                                    <p>{{$item->created_at->diffForHumans()}}</p>
                                </div>
                            </li>
                            
                            @endforeach
                        </ul>
                    </div>

                   

                  
                </aside>
            </div>
        </div>
    </div>
</div>