<footer id="site-footer" class="position-relative bg-black padding_top">
    <div class="svg-footer-top-holder">
        <div class="svg-footer-top"></div>
    </div>
    <div class="container">
        <div class="row" >
            @foreach ($setting  as $s)
                
          
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <a href="/" ><img src="{{asset('assets')}}/image/01.jpg" alt="Akıl Treni Koleji"></a>
                    <p class="whitecolor bottom25">{{$s->address}}</p>
                    <div class="d-table w-100 address-item whitecolor bottom25">
                        <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                        <p class="d-table-cell align-middle bottom0">
                           {{$s->contact}}<a class="d-block" href="mailto:web@support.com">{{$s->email}}</a>
                        </p>
                    </div>
                    <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms">
                        <li><a href="javascript:void(0)" class=""><i class="fab fa-facebook-f"></i> </a> </li>
                        <li><a href="javascript:void(0)" class=""><i class="fab fa-twitter"></i> </a> </li>
                        <li><a href="javascript:void(0)" class=""><i class="fab fa-linkedin-in"></i> </a> </li>
                        <li><a href="javascript:void(0)" class=""><i class="fab fa-instagram"></i> </a> </li>
                    </ul>
                </div>
            </div>
            @endforeach
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20 pl-0 pl-lg-5">
                    <h3 class="whitecolor bottom25">Sayfalar</h3>
                    <ul class="links">
                        <li><a href="/">Anasayfa</a></li>
                        <li><a href="/">Hakkımızda</a></li>
                        <li><a href="/kurumsal">Kurumsal</a></li>
                        <li><a href="/subelerimiz">Şubelerimiz</a></li>
                        <li><a href="/iletisim">İletişim</a></li>
                        <li><a href="/sinav-sonuclari">Sınav Sonuçları</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Bizden Haberler</h3>
                    <ul class="latest_news whitecolor">
                        @foreach ($blog as $b)
                        <li> <a href="{{route('blog.detail' , [$b->slug])}}">{{$b->title}} </a> <span class="date defaultcolor">{{$b->created_at->diffForHumans()}}</span> </li>

                        @endforeach
                   </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer_panel padding_bottom_half bottom20">
                    <h3 class="whitecolor bottom25">Çalışma Saatlerimiz</h3>
                    <p class="whitecolor bottom25">Haftanın 7 Günü </p>
                    <ul class="hours_links whitecolor">
                        <li><span>Pazartesi</span> <span>8.00-18.00</span></li>
                        <li><span>Salı</span> <span>09:00-21:00</span></li>
                        <li><span>Çarşamba</span> <span>09:00-21:00</span></li>
                        <li><span>Perşembe</span> <span>09:00-21:00</span></li>
                        <li><span>Cuma</span> <span>09:00-21:00</span></li>
                       
                      
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>