<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa Vip Eğitim Kurumları</title>
    <link rel="shortcut icon" href="{{asset('assets')}}/{{asset('assets')}}/images/x-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/icofont.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/swiper.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/lightcase.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
</head>
<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->
    
    <livewire:project.menu-component /> 


    {{$slot}}


       <!-- Footer Section Start Here -->
       <footer>
        <div class="footer-top padding-tb pt-0">
            <div class="container">
                <div class="row g-4 row-cols-xl-4 row-cols-md-2 row-cols-1 justify-content-center">
                    <div class="col">
                        <div class="footer-item">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h4>Site Haritası</h4>
                                    </div>
                                    <div class="content">
                                        <ul class="lab-ul">
                                            <li><a href="#">Geri Bildirim</a></li>
                                            <li><a href="#">Eklentiler</a></li>
                                            <li><a href="#">Destek Forumları</a></li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-item">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h4>Kullanışlu Bağlantolar</h4>
                                    </div>
                                    <div class="content">
                                        <ul class="lab-ul">
                                            <li><a href="#">Hakkımızda</a></li>
                                            <li><a href="#">Yardım </a></li>
                                            <li><a href="#">Şartlar ve Koşullar</a></li>
                                            <li><a href="#">Bize Ulaşın</a></li>
                                            <li><a href="#">Gizlilik Politikası</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-item">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h4>Sosyal Medya Hesaplarımız</h4>
                                    </div>
                                    <div class="content">
                                        <ul class="lab-ul">
                                            <li><a href="#">Facebook</a></li>
                                            <li><a href="#">Instagram</a></li>
                                            <li><a href="#">YouTube</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="footer-item">
                            <div class="footer-inner">
                                <div class="footer-content">
                                    <div class="title">
                                        <h4>Bize Ulaşma Kanalları</h4>
                                    </div>
                                    <div class="content">
                                        <ul class="lab-ul">
                                            <li><a href="#">Yardım Merkezi</a></li>
                                            <li><a href="#">İletişim</a></li>
                                            <li><a href="#">Haberler</a></li>
                                            <li><a href="#">Kanalımız</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom style-2">
            <div class="container">
                <div class="section-wrapper">
                    <p>&copy; 2022 <a href="/">Mahmut Sarıkaya</a>  </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section Ending Here -->
</div>
<!-- footer -->


<script src="{{asset('assets')}}/js/jquery.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/js/swiper.min.js"></script>
<script src="{{asset('assets')}}/js/progress.js"></script>
<script src="{{asset('assets')}}/js/lightcase.js"></script>
<script src="{{asset('assets')}}/js/counter-up.js"></script>
<script src="{{asset('assets')}}/js/isotope.pkgd.js"></script>
<script src="{{asset('assets')}}/js/functions.js"></script>

</body>
</html>