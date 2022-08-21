<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-bennar">
                    <h2>Sık Sorulan Sorular</h2>
                    <div class="breadcumb">
                        <ul>
                            <li>
                                <a href="/">Anasayfa</a>
                            </li>
                            <li>Sık Sourulan Sorular</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Banner Area End here -->
<!-- Practice Area Start Here -->
<div class="practice-area practice-area-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="practice-area-heading-section">
                    <h2>Sık Sorulan Sorular</h2>
                    <p>Bizlere Sormaktan Çekinmeyin. Sizler İçin En İyi Çözüm Yolunu Bulmaya Hazırız</p>
                </div>
            </div>
        </div>
    </div>
    <div class="practice-service-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @foreach ($question as $item)
              
                    <div class="single-practice-service-content-area">
                        <div class="media">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-patch-question-fill" viewBox="0 0 16 16">
                                        <path d="M5.933.87a2.89 2.89 0 0 1 4.134 0l.622.638.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636zM7.002 11a1 1 0 1 0 2 0 1 1 0 0 0-2 0zm1.602-2.027c.04-.534.198-.815.846-1.26.674-.475 1.05-1.09 1.05-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.71 1.71 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745.336 0 .504-.24.554-.627z"/>
                                      </svg>
                                </a>
                            </div>
                            <div class="media-body content">
                                <h4 class="media-heading">
                                    <a href="single.html">{{$item->title}}</a>
                                </h4>
                                <p>{!! $item->description !!}</p>
                              
                            </div>
                        </div>
                    </div>
                             
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Practice Area End Here -->
<!-- Make An Appointment Area Start here -->
<div class="make-appointment-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="make-appointment">
                    <h2>DAHA FAZLA NASIL YARDIMCI OLABİLİRİZ?</h2>
                    <a href="/iletisim">İLETİŞİM</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Make An Appointment Area End here -->
<!-- Our Attorney Start Here -->
