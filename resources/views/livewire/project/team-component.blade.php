<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="main-bennar">
                    <h2>EKİBİMİZ</h2>
                    <div class="breadcumb">
                        <ul>
                            <li>
                                <a href="/">Anasayfa</a>
                            </li>
                            <li>Ekibimiz</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Banner Area End here -->
<!-- About Page Lawyer Section Area Start here -->
<div class="our-attorney-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title-area">
                    <h2>EKİBİMİZ</h2>
                   
                </div>
            </div>
        </div>
   
            
            <div class="row">

                @foreach ($team as $item)
               
                <div class="col-sm-4">
                <div class="single-attorney">
                    <div class="attorney-picture">
                     
                            <img src="{{asset('storage/team')}}/{{$item->image}}" alt="">
                  
                        
                    </div>
                    <div class="attorney-content">
                        <h3>
                            <a href="#">{{$item->pozition}}</a>
                        </h3>
                   
                    </div>
                </div>
                </div>
                @endforeach
      
    

            </div>
      
        
    </div>
</div>
<!-- About Page Lawyer Section Area End here -->

<!-- Experience Area Start here -->
<div class="experince-area">
    <div class="container">
        <div class="row">
            
        </div>
    </div>
</div>
<!-- Experience Area End here -->
<!-- Make An Appointment Area Start here -->

<!-- Make An Appointment Area End here -->
<!-- Our Attorney Start Here -->

<!-- Our Attorney End Here -->
<!-- Partner Logo Area Start Here -->

