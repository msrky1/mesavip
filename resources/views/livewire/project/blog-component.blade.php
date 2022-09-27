 <!-- Page Header section start here -->
 <div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>Haberler</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Haberler</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->


<!-- blog section start here -->
<div class="blog-section padding-tb section-bg">
    <div class="container">
        <div class="section-wrapper">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">

                @foreach ($blog as $item)
                    
              @if ($item->status == "açık")
       
                <div class="col">
                    <div class="post-item">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="{{route('blog.detail' , [ $item->slug ])}}"><img src="{{asset('storage/blog')}}/{{$item->image}}" alt="{{$item->title}}"></a>
                            </div>
                            <div class="post-content">
                                <a href="{{route('blog.detail' , [ $item->slug ])}}"><h4>{{$item->title}}</h4></a>
                                <div class="meta-post">
                                    <ul class="lab-ul">
                                        <li><i class="icofont-ui-user"></i>Admin</li>
                                        <li><i class="icofont-calendar"></i>{{$item->created_at->diffForHumans()}}</li>
                                    </ul>
                                </div>
                                <p> {!! $item->descirption !!} </p>
                            </div>
                            <div class="post-footer">
                                <div class="pf-left">
                                    <a href="{{route('blog.detail' , [$item->slug])}}" class="lab-btn-text">Detay<i class="icofont-external-link"></i></a>
                                </div>
                                {{-- <div class="pf-right">
                                    <i class="icofont-comment"></i>
                                    <span class="comment-count">3</span>
                                </div>   --}}
                            </div>
                        </div>
                    </div>
                </div>

                           
              @endif

                @endforeach

            </div>
            {{-- <ul class="default-pagination lab-ul">
                <li>
                    <a href="#"><i class="icofont-rounded-left"></i></a>
                </li>
                <li>
                    <a href="#">01</a>
                </li>
                <li>
                    <a href="#" class="active">02</a>
                </li>
                <li>
                    <a href="#">03</a>
                </li>
                <li>
                    <a href="#"><i class="icofont-rounded-right"></i></a>
                </li>
            </ul> --}}
        </div>
    </div>
</div>