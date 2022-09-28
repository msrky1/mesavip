<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa Vip Eğitim Kurumları</title>
    <link rel="shortcut icon" href="{{ asset('assets') }}/{{ asset('assets') }}/images/x-icon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/icofont.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/swiper.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightcase.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    
    {{-- <link href="path/to/lightbox.css" rel="stylesheet" /> --}}
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


    {{ $slot }}

    <livewire:project.footer-component />

    <!-- Footer Section Start Here -->

    <!-- Footer Section Ending Here -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://www.instagram.com/mesavipkoleji/"
        class="float" target="_blank">
        <i class="fa fa-instagram my-float"></i>
    </a>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://www.youtube.com/channel/UCmIfiCouv2u4OHXTuYIrxIw"
        class="float-youtube" target="_blank">
        <i class="fa fa-youtube my-float-youtube"></i>
    </a>
    
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://www.youtube.com/channel/UCmIfiCouv2u4OHXTuYIrxIw"
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
    
   
    <!-- footer -->


    <script src="{{ asset('assets') }}/js/jquery.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/swiper.min.js"></script>
    <script src="{{ asset('assets') }}/js/progress.js"></script>
    <script src="{{ asset('assets') }}/js/lightcase.js"></script>
    <script src="{{ asset('assets') }}/js/counter-up.js"></script>
    <script src="{{ asset('assets') }}/js/isotope.pkgd.js"></script>
    <script src="{{ asset('assets') }}/js/functions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.6.1/lightgallery.umd.min.js"></script>
</body>

</html>
