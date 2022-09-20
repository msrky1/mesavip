<!-- Page Header section start here -->
<div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>Mesa Vip Galeri</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->


<!-- blog section start here -->
<div class="shop-page padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div id="animated-thumbnails">
                <div id="lightgallery">
                @foreach ($galery as $item)
            

           
                <a href="{{asset('storage')}}/galery/{{$item->image}}" data-lg-size="1600-2400">
                    <img alt="img1" src="{{asset('storage')}}/galery/{{$item->image}}" />
                </a>
           
                @endforeach
                   </div>
            </div>
        </div>


        <script type="text/javascript">
            lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail],
                licenseKey: 'your_license_key',
                speed: 500,
                // ... other settings
            });
        </script>



    </div>
</div>
<!-- blog section ending here -->


<!-- blog section ending here -->
