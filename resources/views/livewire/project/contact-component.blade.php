  <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Bizimle İletişime Geçin</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">İletişim</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <!-- Map & address us Section Section Starts Here -->
    <div class="map-address-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">BİZİMLE İLETİŞİME GEÇİN</span>
                <h2 class="title">Mesa Vip Eğitim Kurumları</h2>
            </div>
            <div class="section-wrapper">
                <div class="row flex-row-reverse">

                    @foreach ($setting as $item)
                        
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="contact-wrapper">
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="assets/images/icon/01.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Adres</h6>
                                    <p>{{$item->address}}</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="assets/images/icon/02.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Telefon</h6>
                                    <p> {{$item->phone}}</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="assets/images/icon/03.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">E-mail  </h6>
                                    <a href="mailto:info@gmail.com">{{$item->email}}</a>
                                </div>
                            </div>
                            {{-- <div class="contact-item">
                                <div class="contact-thumb">
                                    <img src="assets/images/icon/04.png" alt="CodexCoder">
                                </div>
                                <div class="contact-content">
                                    <h6 class="title">Web Sitesi</h6>
                                    <a href="#">www.adminedukon@gmil.com</a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach

                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="map-area">
                            <div class="maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.2275990948147!2d90.38698831543141!3d23.739261895117753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b85c740f17d1%3A0xdd3daab8c90eb11f!2sCodexCoder!5e0!3m2!1sen!2sbd!4v1607313671993!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map & address us Section Section Ends Here -->

    <!-- Contact us Section Section Starts Here -->
    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">İletişim Formu </span>
                <h2 class="title">Bize buradan mesaj atarak ulaşabilirsiniz</h2>
            </div>
            <div class="section-wrapper">
                <form class="contact-form" action="contact.php" id="contact-form" method="POST">
                    <div class="form-group">
                        <input type="text" placeholder="Adınız Soyadınız" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Mail Adresiniz" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Telefon Numaranız" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Mesaj Başlığı" id="subject" name="subject" required>
                    </div>
                    <div class="form-group w-100">
                        <textarea name="message" rows="8" id="message" placeholder="Mesaj Detayı" required></textarea>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button class="lab-btn"><span>Mesajı Gönderin</span></button>
                    </div>
                </form>
                <p class="form-message"></p> 
            </div>
        </div>
    </div>
    <!-- Contact us Section Section Ends Here -->


