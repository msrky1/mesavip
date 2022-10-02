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


              <form class="contact-form" method="POST" enctype="multipart/form-data"
                  action="{{ route('add.basvuru.cv') }}">

                  @csrf
                  <div class="form-group">
                      <input type="text" placeholder="Adınız Soyadınız" name="name" required>
                  </div>
                  <div class="form-group">
                      <input type="text" placeholder="Mail Adresiniz" name="email" required>
                  </div>
                  <div class="form-group">
                      <input type="text" placeholder="Telefon Numaranız" name="number" required>
                  </div>
                  <div class="form-group">
                      <select id="mySelect" onchange="getSelectValue()" name="area" required>

                          <option> Alanı </option>
                          <option value="teacher"> Öğtetmen </option>
                          <option value="Temizlik Görevlisi"> Temizlik Görevlisi </option>
                          <option value="Muhasebe"> Muhasebe </option>
                          <option value="Diğer"> Diğer </option>



                      </select>

                  </div>
                  <div class="form-group">
                    <label> Kısaca Mesajınızı Bildirin </label>
                   <textarea width="150" height="150"  placeholder="Kısaca Mesajınızı Bildirin" name="description" required> </textarea>
                  </div>
                  <div id="div-select" class="form-group">

                  </div>



                  <script>
                      function getSelectValue()

                      {

                          var selectedValue = document.getElementById('mySelect').value



                          if (selectedValue == "teacher") {

                              const lists = `
                 <select name="branch" >
                       
                        <option> İngilizce Öğretmeni </option>
                        <option> Sınıf Öğretmeni </option>
                        <option> Matematik Öğretmeni</option>
                        <option> Bilgisayar Öğretmeni </option>
                        <option> Edebiyat Öğretmeni </option>
                        <option> Felsefe Öğretmeni </option>
                        <option> Diğer </option>
                     
                                          
                    </select>

               `
                              const ul = document.getElementById('div-select')
                              ul.innerHTML = lists


                          } else {
                            const lists = ` `

               const ul = document.getElementById('div-select')
                              ul.innerHTML = lists
                              
                          }

                      }
                  </script>









                  <div class="mb-3">
                      <label for="formFile" class="form-label">Lütfen CV nizi Ekleyin</label>
                      <input class="form-control" type="file" id="formFile" name="cv">
                  </div>


                  <button class="lab-btn" type="submit">
                      <span> Gönder </span>
                  </button>

              </form>
              <p class="form-message"></p>
          </div>
      </div>
  </div>
  <!-- Contact us Section Section Ends Here -->
