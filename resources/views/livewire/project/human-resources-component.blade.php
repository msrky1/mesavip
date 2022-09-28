  <!-- Page Header section start here -->
  <div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>İnsan Kaynakları</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">İnsan Kaynakları</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->


<!-- Contact us Section Section Starts Here -->
<div class="contact-section padding-tb">
    <div class="container">
        <div class="section-header text-center">
            <span class="subtitle"> Lütfen Formu Doldurunuz </span>
            <h2 class="title">En Yakın Zamanda Size Dönüş Yapılacaktır. Lütfen Formu Eksiksiz Doldurun.</h2>
            @if (\Session::has('success'))
         <div class="alert alert-success">
      
           {!! \Session::get('success') !!}
     
    </div>
           @endif
              
        </div>
       
        <div class="section-wrapper">


            <form class="contact-form" method="POST" enctype="multipart/form-data" action="{{route("add.basvuru.cv")}}">

                @csrf
                <div class="form-group">
                    <input type="text" placeholder="Adınız Soyadınız" name="name" required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Mail Adresiniz"  name="email"  required>
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Telefon Numaranız"  name="number"  required>
                </div>
                <div class="form-group">
                    <select name="area" required>
                       
                        <option> Alanı </option>
                        <option id="teach"> Öğtetmen </option>
                        <option> Temizlik Görevlisi </option>
                        <option> Muhasebe </option>
                        <option> Diğer </option>
                        
                        
                     
                    </select>
                </div>

                 
            
                
                <div class="form-group" >
                    <select name="branch" >
                       
                        <option> İngilizce Öğretmeni </option>
                        <option> Sınıf Öğretmeni </option>
                        <option> Matematik Öğretmeni</option>
                        <option> Bilgisayar Öğretmeni </option>
                        <option> Edebiyat Öğretmeni </option>
                        <option> Felsefe Öğretmeni </option>
                        <option> Diğer </option>
                     
                        
                        
                     
                    </select>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Lütfen CV nizi Ekleyin</label>
                    <input class="form-control" type="file" id="formFile" name="cv">
                  </div>

                
                  <button class="lab-btn" type="submit">
                  <span>  Gönder </span>
                </button> 
               
            </form>
            <p class="form-message"></p> 
        </div>
    </div>
</div>
<!-- Contact us Section Section Ends Here -->


