<main>
    <!--Page Header-->
    <section id="main-banner-page" class="position-relative page-header contact-header section-nav-smooth parallax">
        <div class="container">
            <div class="row" style="background-image: url({{asset('assets/image/0012.jpg')}});">
                <div class="col-lg-6 offset-lg-3">
                    <div class="page-titles whitecolor text-center padding">
                        <h2 class="font-bold"> Başvuru</h2>
                        <h3 class="font-light py-2">Bursluluk Sınavı İçin Başvuru Formunu Doldurunuz.</h3>
                    </div>
                </div>
            </div>
            <div class="gradient-bg title-wrap mt-n5">
                <div class="row">
                    <div class="col-lg-12 col-md-12 whitecolor">
                        <h3 class="float-left">Başvuru</h3>
                        <ul class="breadcrumb top10 bottom10 float-right">
                            <li class="breadcrumb-item hover-light"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item hover-light">Başvurular</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header ends -->
    <!-- Contact US -->
    <section id="stayconnect1" class="bglight position-relative padding_top padding_bottom_half noshadow">
        <div class="container whitebox">
            <div class="widget py-5">
                <div class="row">
                    <div class="col-md-12 text-center wow fadeIn mt-n3" data-wow-delay="300ms">
                        <h2 class="heading bottom30 darkcolor font-light2 pt-1"><span
                                class="font-normal">Sınav Giriş Belgesi Alın</span> 
                            <span class="divider-center"></span>
                        </h2>
                       <div> 

                        <label><h3> TC Kimlik Numaranızı Eksiksiz Bir Şekilde Girin </h3></label><br>
                       </div>
                       <form action="GET" >
                           @csrf
                        <input onkeydown="return event.key != 'Enter';"  width="200" type="number" name="search" placeholder="Tc Kimlik Numarası" wire:model.debounce.3000ms ="query">
                    

                       </form>

                       <style>
                        #customers {
                          font-family: Arial, Helvetica, sans-serif;
                          border-collapse: collapse;
                          width: 100%;
                        }
                        
                        #customers td, #customers th {
                          border: 1px solid #ddd;
                          padding: 8px;
                        }
                        
                        #customers tr:nth-child(even){background-color: #f2f2f2;}
                        
                        #customers tr:hover {background-color: #ddd;}
                        
                        #customers th {
                          padding-top: 12px;
                          padding-bottom: 12px;
                          text-align: left;
                          background-color: #04AA6D;
                          color: white;
                        }
                        </style>
                        </head>
                        <body>
                            <div wire:loading>
                                <img width= "250px" src="{{ asset('assets') }}/icons/realy.gif" > 
                            </div>
                            
                       @if (!empty($query))

                       @if (!empty($approved))
                           @foreach ($approved as $item)
              
       
       
       
       
                             
                                       
                                 <h1>Sınav Giriş Belgesi</h1>
                        
                                 <table id="customers">
                                <tr>
                                 <th>Adı Soyadı</th>
                                <th>TC Kimlik Numarası</th>
                                <th>Email Adresi</th>
                                <th>Sınav Saati</th>
                              </tr>
                      
                          <tr>
                            <td> {{$item['name']}}</td>
                            <td> {{$item['tc']}}</td>
                            <td> {{$item['email']}}</td>
                            <td> {{$item['hour']}}</td>
                          </tr>
                         
                        </table>
                      

                               

                             
                        
                       <br>

                       <form action="{{route('generate.pdf' , $item['name'])}}" enctype="multipart/form-data" method="POST">
                    
                        @error('name') <span class="error">{{ $message }}</span> @enderror

                         @csrf
                        <button  class="btn btn-success"> Sınav Giriş Belgesini Al </button>  

                    
                    
                        </form>
                       
                       

             
                                           
                    
                           @endforeach
                       @else
                           <div class="col-sm-6 col-lg-4">
       
       
       
       
                               <div class="service-item my-3">
                                   <div class="service-wrapper m-0 bg-white">
                                      
                                       Sonuç Bulunamadı
                                  
                                   </div>
                               </div>
       
       
       
                           </div>
                       @endif
                   @endif
                    </div>
                   
                 
                </div>
            </div>
          
        </div>
    </section>
</main>
<script>

$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
</script>