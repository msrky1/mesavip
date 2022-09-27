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

<!--Our whatdos Ends-->
<!-- Contact US -->
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
                                            <img src="{{ asset('storage/whatdoing') }}/{{ $whatdos->image }}" alt="{{ $whatdos->title }}" alt="blog thumb rajibraj91" class="w-100">
                                        </div>
                                        <div class="post-content">
                                            <h2>  {!! $whatdos->title !!}</h2>
                                            <div class="meta-post">
                                                <ul class="lab-ul">
                                                    <li><a href="#"><i class="icofont-calendar"></i>{{$whatdos->created_at->diffForHumans()}}</a></li>
                                                    <li><a href="#"><i class="icofont-ui-user"></i>Admin</a></li>
                                                </ul>
                                            </div>
                                            <p>  {!! $whatdos->description !!}</p>

                                           
                                        </div>
                                    </div>
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            
        </div>
    </div>
</div>