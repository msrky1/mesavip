<main>
    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Bursluluk Başvurusu</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                                <li class="breadcrumb-item"><a href="#">Bursluluk Başvurusu</a></li>
                                {{-- <li class="breadcrumb-item active" aria-current="page">Se</li> --}}
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->

    <div class="contact-section padding-tb">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Lütfen Formu Doldurun </span>
                <h2 class="title">Lütfen Formu Eksiksiz Doldurun</h2>
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
                    <label for="email1" class="d-none">Sınav Saati</label>
                    <div class="form-group">

                    <select name="hour"> 
                        @foreach ($classtime as $item)
                            
                        
                        <option value="{{$item->hour}}">{{$item->hour}} </option>

                        @endforeach
                    </select>
                    </div>
                    <div class="form-group w-100 text-center">
                        <button class="lab-btn"><span>Başvur</span></button>
                    </div>
                </form>
                <p class="form-message"></p> 
            </div>
        </div>
    </div>
    <!-- blog section ending here -->

</main>
