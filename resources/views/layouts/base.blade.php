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
    <link href="path/to/lightbox.css" rel="stylesheet" />
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
    <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    </div>
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
