<section class="banner-section style-1">
    <div class="container">
        <div class="section-wrapper">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-xl-6 col-lg-10">
                    <div class="banner-content">
                        <h6 class="subtitle text-uppercase fw-medium">MESA VİP EĞİTİM KURUMLARI</h6>
                        <h2 class="title"><span class="d-lg-block">Eğitimde </span> Öncü <span class="d-lg-block"></span></h2>
                        {{-- <p class="desc">Free online courses from the world’s Leading experts. join 18+ million Learners today.</p> --}}
                        <form action="/">
                            <div class="banner-icon">
                                <i class="icofont-search"></i>
                            </div>
                            <input type="text" placeholder="Web Sitesinde Arayın">
                            <button type="submit">Ara</button>
                        </form>
                        <div class="banner-catagory d-flex flex-wrap">
                            <p>Popüler Linkler:</p>
                            <ul class="lab-ul d-flex flex-wrap">
                                <li><a href="/hakkimizda">Hakkımızda</a></li>
                                <li><a href="/galeri">Galeri</a></li>
                                <li><a href="/iletisim">İletişim</a></li>
                                <li><a href="/haberler">Haberler</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-6">
                    <div class="banner-thumb">
                         <img src="{{asset('assets')}}/images/banner/01.png" alt="img">  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="all-shapes"></div>
    <div class="cbs-content-list d-none">
        <ul class="lab-ul">
            <li class="ccl-shape shape-1"><a href="#">10.000'den Fazla Mutlu Öğrenci</a></li>
            <li class="ccl-shape shape-2"><a href="#">73 Derslik</a></li>
            <li class="ccl-shape shape-3"><a href="/ekibimiz">100+ Kadro</a></li>
            <li class="ccl-shape shape-4"><a href="#"> Cambridge University Press Desteği İle İngilizce Eğitimi</a></li>
            <li class="ccl-shape shape-5"><a href="/sosyal-etkinlikler">Kulüp Çalışmaları</a></li>
        </ul>
    </div>
</section>
<!-- banner section ending here -->


<!-- sponsor section start here -->
{{-- <div class="sponsor-section section-bg">
    <div class="container">
        <div class="section-wrapper">
            <div class="sponsor-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="sponsor-iten">
                            <div class="sponsor-thumb">
                                <img src="{{asset('assets')}}/images/sponsor/01.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-iten">
                            <div class="sponsor-thumb">
                                <img src="{{asset('assets')}}/images/sponsor/02.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-iten">
                            <div class="sponsor-thumb">
                                <img src="{{asset('assets')}}/images/sponsor/03.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-iten">
                            <div class="sponsor-thumb">
                                <img src="{{asset('assets')}}/images/sponsor/04.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-iten">
                            <div class="sponsor-thumb">
                                <img src="{{asset('assets')}}/images/sponsor/05.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="sponsor-iten">
                            <div class="sponsor-thumb">
                                <img src="{{asset('assets')}}/images/sponsor/06.png" alt="sponsor">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- sponsor section ending here -->


<!-- category section start here -->

@foreach ($lock as $item)

@if ($item->lock == 'Açık')
    

<div class="category-section padding-tb">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Bursluluk Başvuruları</span>
            <h2 class="title">Lütfen Başvurmak İstediğinizi Bir Sınıfı Seçin</h2>
        </div>
        <div class="section-wrapper">
            <div class="row g-2 justify-content-center row-cols-xl-6 row-cols-md-3 row-cols-sm-2 row-cols-1">
                 @foreach ($class as $cla)
                     
                <div class="col">
                    <div class="category-item text-center">
                        <div class="category-inner">
                            {{-- <div class="category-thumb">
                                <img src="{{asset('assets')}}/images/category/icon/02.jpg" alt="category">
                            </div> --}}
                            <div class="category-content">
                                
                                <a href="{{ route('class.detail', ['classroom_id' => $cla->classroom_id]) }}"><h4><span>{{$cla->classroom}}</span></h4></a>
                                {{-- <span>{{$cla->classroom}}</span> --}}
                                <p> Başvurmak İstediğiniz Sınıfı Seçin </p>
                               <a href=" {{ route('class.detail', ['classroom_id' => $cla->classroom_id]) }}" > <button class="button-one"> Başvur</button> </a> 
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{-- <div class="text-center mt-5">
                <a href="course.html" class="lab-btn"><span>Browse All Categories</span></a>
            </div> --}}
        </div>
    </div>
</div>
<!-- category section start here -->


<!-- course section start here -->
<div class="course-section padding-tb section-bg">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">BİZDEN HABERLER</span>
            <h2 class="title">Mesa Vip Eğitim Kurumlarımızın Son Güncel Haberleri</h2>
        </div>
        <div class="section-wrapper">
            <div class="row g-4 justify-content-center row-cols-xl-3 row-cols-md-2 row-cols-1">

                @foreach ($blog as $b)
                    
                <div class="col">
                    <div class="course-item">
                        <div class="course-inner">
                            <div class="course-thumb">
                                <img src="{{asset('storage')}}/blog/{{$b->image}}" alt="course">
                            </div>
                            <div class="course-content">
                                <div class="course-price">Mesa Vip</div>
                                <div class="course-category">
                                    <div class="course-cate">
                                        <a href="#">Admin</a>
                                    </div>
                                    <div class="course-reiew">
                                        {{-- <span class="ratting">
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                            <i class="icofont-ui-rating"></i>
                                        </span>
                                        <span class="ratting-count">
                                            03 reviews
                                        </span> --}}
                                    </div>
                                </div>
                                <a href="course-single.html"><h5>{{$b->title}}</h5></a>
                                {{-- <div class="course-details">
                                    <div class="couse-count"><i class="icofont-video-alt"></i> 18x Lesson</div>
                                    <div class="couse-topic"><i class="icofont-signal"></i> Online Class</div>
                                </div> --}}
                                <div class="course-footer">
                                    {{-- <div class="course-author">
                                        <img src="{{asset('assets')}}/images/course/author/01.jpg" alt="course author">
                                        <a href="team-single.html" class="ca-name">William Smith</a>
                                    </div> --}}
                                    <div class="course-btn">
                                        <a href="/" class="lab-btn-text">Detay <i class="icofont-external-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                @endforeach

            </div>
        </div>
    </div>
</div>

@endif
    
@endforeach
<!-- course section ending here -->


<!-- abouts section start here -->
<div class="about-section">
    <div class="container">
        <div class="row justify-content-center row-cols-xl-2 row-cols-1 align-items-end flex-row-reverse">
            <div class="col">
                <div class="about-right padding-tb">
                    <div class="section-header">
                        <span class="subtitle">MESA VİP EĞİTİM KURUMLARI HAKKINDA</span>
                        <h2 class="title">HAKKIMIZDA</h2>
                        <p>HAKKIMIZDA</p>
                    </div>
                    <div class="section-wrapper">
                        <ul class="lab-ul">
                            <li>
                                <div class="sr-left">
                                    <img src="{{asset('assets')}}/images/about/icon/01.jpg" alt="about icon">
                                </div>
                                <div class="sr-right">
                                    <h5>MİSYONUMUZ</h5>
<p>Mesavip Eğitim Kurumları; bilgiyi sentezleyerek kullanabilen, sanatsal üretime açık, teknolojik gelişmeleri yakından takip eden, özgür düşünen ve düşündüklerini açıkça ifade edebilen, toplumsal sorumluluk bilinciyle araştırma ve sorun çözme kabiliyeti gelişmiş, toplumsal kurallara saygılı, disiplinli çalışmayı kendine ilke edinmiş, geniş ufuklu idealist bireyler yetiştirerek, çok boyutlu kalite standartları içinde topluma hizmet sunmayı görev edinmiştir.</p>                                </div>
                            </li>
                            <li>
                                <div class="sr-left">
                                    <img src="{{asset('assets')}}/images/about/icon/02.jpg" alt="about icon">
                                </div>
                                <div class="sr-right">
                                    <h5>VİZYONUMUZ

                                    </h5>
                                    <p>Yetiştirdiği bireylerle toplumsal gelişime önderlik eden, öğrenci ve eğitimci kadrosunun birlikte öğrenme tutkusu etrafında buluştukları, bütün akademik ve idari bileşenlerinin bu arayışa kendilerini adadıkları, bölgesinde ve sektöründe öncü bir eğitim kurumu olmaktır.</p>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="about-left">
                    <div class="about-thumb">
                        <img src="{{asset('assets')}}/images/about/01.png" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about section ending here -->


<!-- Instructors Section Start Here -->
<div class="instructor-section padding-tb section-bg">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">KADROMUZ</span>
            <h2 class="title">Alanında Uzman Eğitmenlerimiz</h2>
        </div>
        <div class="section-wrapper">
            <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                @foreach ($team as $t)
                    
                <div class="col">
                    <div class="instructor-item">
                        <div class="instructor-inner">
                            <div class="instructor-thumb">
                                <img src="{{asset('storage')}}/team/{{$t->image}}" alt="instructor">
                            </div>
                            <div class="instructor-content">
                                <a href="team-single.html"><h4>{{$t->name}}</h4></a>
                                <p>{{$t->about}}</p>
                               
                            </div>
                        </div>
                        {{-- <div class="instructor-footer">
                            <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                <li><i class="icofont-book-alt"></i> 08 courses</li>
                                <li><i class="icofont-users-alt-3"></i> 30 students</li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                @endforeach

            </div>
            {{-- <div class="text-center footer-btn">
                <p>Want to help people learn, grow and achieve more in life?<a href="team.html">Become an instructor</a></p>
            </div> --}}
        </div>
    </div>
</div>
<!-- Instructors Section Ending Here -->


<!-- student feedbak section start here -->
<div class="student-feedbak-section padding-tb shape-img">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">Sık Sourulan Sorular</span>
            <h2 class="title">Mesa Vip Eğitim Kurumları Sık Sorulan Sorular   </h2>
        </div>
        <div class="section-wrapper">
            <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                <div class="col">
                    <div class="sf-left">
                        <div class="sfl-thumb">
                            <img src="{{asset('assets')}}/images/school/04.jpg" alt="student feedback">
                            <a href="https://www.youtube.com/embed/aOe6IKKRuEI" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a>
                            {{-- <iframe width="1268" height="713" src="https://www.youtube.com/embed/aOe6IKKRuEI" title="MESA VİP EĞİTİM KURUMLARI" frameborder="0"
                             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> --}}
                        </div>
                        
                    </div>
                </div>
                @foreach ($questions as $q)
                    
                <div class="col">
                    <div class="stu-feed-item">
                        <div class="stu-feed-inner">
                            <div class="stu-feed-top">
                                <div class="sft-left">
                                    <div class="sftl-thumb">
                                        <img src="{{asset('assets')}}/images/feedback/student/01.jpg" alt="student feedback">
                                    </div>
                                    <div class="sftl-content">
                                        <a href="#"><h6>{{$q->title}}</h6></a>
                                        <span>Mesa Vip</span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="stu-feed-bottom">
                                <p> {!! $q->description = Str::limit($q->description, 200) !!} </p>
                            </div>
                        </div>
                    </div>
                    @endforeach 

                </div>
            </div>
        </div>
    </div>
</div>
<!-- student feedbak section ending here -->


<!-- blog section start here -->
<div class="blog-section padding-tb section-bg">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">EĞİTİM BİRİMLERİMİZ</span>
            <h2 class="title">Mesa Vip Eğitim Kurumları Eğitim Birimleri</h2>
        </div>
        <div class="section-wrapper">
            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center g-4">

                @foreach ($unit as $u)
                    
                <div class="col">
                    <div class="post-item">
                        <div class="post-inner">
                            <div class="post-thumb">
                                <a href="/"><img src="{{asset('storage')}}/units/{{$u->image}}" alt="{{$u->title}}"></a>
                            </div>
                            <div class="post-content">
                                <a href="/"><h4>{{$u->title}}</h4></a>
                                <div class="meta-post">
                                    <ul class="lab-ul">
                                        <li><i class="icofont-ui-user"></i>Admin</li>
                                        {{-- <li><i class="icofont-calendar"></i>April 23,2021</li> --}}
                                    </ul>
                                </div>
                                <p> {!! $u->description = Str::limit($u->description, 200) !!} </p>
                            </div>
                            <div class="post-footer">
                                <div class="pf-left">
                                    <a href="{{ route('unit.detail', $u->slug) }}" class="lab-btn-text">Detay <i class="icofont-external-link"></i></a>
                                </div>
                                {{-- <div class="pf-right">
                                    <i class="icofont-comment"></i>
                                    <span class="comment-count">3</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                
            </div>
        </div>
    </div>
</div>
<!-- blog section ending here -->


<!-- Achievement section start here -->
<div class="achievement-section padding-tb">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle">MESA VİP EĞİTİM KURUMLARI İLE  </span>
            <h2 class="title">BAŞARIYA ULAŞIN!</h2>
        </div>
        <div class="section-wrapper">
            <div class="counter-part mb-4">
                
            </div>
            <div class="achieve-part">
                <div class="row g-4 row-cols-1 row-cols-lg-2">
                    
                    <div class="col">
                        <div class="achieve-item">
                            <div class="achieve-inner">
                                {{-- <div class="achieve-thumb">
                                    <img src="{{asset('assets')}}/images/achive/02.png" alt="achieve thumb">
                                </div> --}}
                                <div class="achieve-content">
                                    <h4>Bize Ulaşın</h4>
                                    <p>Bizlere Whatsapp ve iletişim numaralarımızdan dilediğiniz zaman ulaşabilirsiniz.</p>
                                    <a href="/iletisim" class="lab-btn"><span>Şimdi İletişime Geçin</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Achievement section ending here -->


