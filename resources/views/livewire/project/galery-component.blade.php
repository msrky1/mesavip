<!-- Page Header section start here -->
<div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>Mesa Vip Galeri</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->


<!-- blog section start here -->

    <!-- course section start here -->

 
    <div class="course-section style-3 padding-tb">
        <div class="course-shape one"><img src="assets/images/shape-img/icon/01.png" alt="education"></div>
        <div class="course-shape two"><img src="assets/images/shape-img/icon/02.png" alt="education"></div>
        <div class="container">
            <div class="section-header">
                <h2 class="title">Mesa Vip Galeri</h2>
        
                <div class="course-filter-group">
                    <ul class="lab-ul">
                        <li class="active" data-filter="*">Hepsi</li>
                        @foreach ($category as $cat)
                            
               
                        <li data-filter=".{{$cat->id}}">{{$cat->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 course-filter">

                    @foreach ($image as $item)
                        
                
                    <div class="col {{ $item->getGalery->id }}">
                        <div class="course-item style-4">
                            <div class="course-inner">
                                <div class="course-thumb">
                                    <img src="{{asset('storage/galery/kapak')}}/{{$item->image}}" alt="course">
                                    <div class="course-category">
                                        <div class="course-cate">
                                            <a href="#">{{$item->getGalery->name}}</a>
                                        </div>
                                        <div class="course-reiew">
                                            <span class="ratting">
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                                <i class="icofont-ui-rating"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="course-content">
                                    <a href="{{route('galery.detail' , $item->slug )}}"><h5>{{$item->name}}</h5></a>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog section ending here -->


<!-- blog section ending here -->
