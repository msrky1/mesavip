<div class="news-footer-wrap">
    <div class="fs-shape">
        <img src="{{asset('assets')}}/images/shape-img/03.png" alt="fst" class="fst-1">
        <img src="{{asset('assets')}}/images/shape-img/04.png" alt="fst" class="fst-2">
    </div>
    <!-- Newsletter Section Start Here -->
    <div class="news-letter">
        <div class="container">
            <div class="section-wrapper">
                <div class="news-title">
                    <h3>Size Özel Teklifler ve Güncellemeler Hakkında E-posta Göndermemizi İster misiniz?
                    </h3>
                </div>
                <div class="news-form">
                    <form action="/">
                        <div class="nf-list">
                            <input type="email" name="email" placeholder="Email Adresinizi Girin">
                            <input type="submit" name="submit" value="Gönder">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
                                        <li><a href="/">Anasayfa</a></li>
                                        <li><a href="/galeri">Eklentiler</a></li>
                                        <li><a href="/insan-kaynaklari">İnsan Kaynakları</a></li>

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
                                    <h4>Kullanışlı Bağlantılar</h4>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                        <li><a href="/hakkimizda">Hakkımızda</a></li>
                                        <li><a href="/ekibmiz">Ekibmiz </a></li>
                                        <li><a href="/iletisim">Bize Ulaşın</a></li>
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
                           
                                        <li><a href="https://www.instagram.com/mesavipkoleji/">Instagram</a></li>
                                        <li><a href="https://www.youtube.com/channel/UCmIfiCouv2u4OHXTuYIrxIw">YouTube</a></li>
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
                                    <h4>Aktif Bağlantılar</h4>
                                </div>
                                <div class="content">
                                    <ul class="lab-ul">
                                      
                                        <li><a href="/haberler">Haberler</a></li>
                                        <li><a href="/duyurular">Duyurular</a></li>
                                  
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
                <p>&copy; 2022 <a href="/">Mesa Vip Eğitim Kurumları</a> </p>
            </div>
        </div>
    </div>
</footer>

@foreach ($scholarship as $item)
    
@if ($item->durum  ==  "açık")
    


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="{{$item->url}}"
    class="float-basvuru" target="_blank">
    <div class="count-item">
        <div class="count-inner">
        <div class="my-float-basvuru"><h6 style="color: aliceblue;"> Bursluluk Başvurusu </h6> </div>
            
            <div class="count-icon">
            
                <i class="icofont-graduate-alt "></i>
               
              
            </div>
                          
        </div>
    </div>
</a>
@endif
@endforeach