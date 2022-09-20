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
            <div class="col-lg-8 col-12">
                <article>
                    <div class="shop-title d-flex flex-wrap justify-content-between">
                        <p>MEsa Vip Eğitim Kurumları</p>
                        <div class="product-view-mode">
                            <a class="active" data-target="grid"><i class="icofont-ghost"></i></a>
                            <a data-target="list"><i class="icofont-listine-dots"></i></a>
                        </div>
                    </div>
                    <div class="shop-product-wrap grid row justify-content-center">
                        @foreach ($galery as $item)
                            
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src="{{asset('storage')}}/galery/{{$item->image}}" alt="{{$item->image}}">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#{{$item->image}}"><i class="icofont-eye"></i></a>
                                        <a href="#"><i class="icofont-heart"></i></a>
                                        <a href="#"><i class="icofont-cart-alt"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Mesa Vip Eğitim Kurumları</a></h5>
                                    
                                            
                                    <p>Görseli Büyütmek İçin Üzerine Dokunun</p>
                                </div>
                            </div>
                            <div class="product-list-item">
                                <div class="product-thumb">
                                    <div class="pro-thumb">
                                        <img src="{{asset('storage')}}/galery/{{$item->image}}" alt="{{$item->image}}">
                                    </div>
                                    <div class="product-action-link">
                                        <a class="view-modal" data-target="#quick_view"><i class="icofont-eye"></i></a>
                                      
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h5><a href="#">Mesa Vip Eğitim Kurumları</a></h5>
                                  
                                    <h6>
                                       
                                    </h6>
                                    <p>Görseli Büyütmek İçin Dokunun</p>
                                </div>
                            </div>
                        </div>

                        @endforeach




                    </div>
                   
                </article>
            </div>

        </div>

        @foreach ($galery as $item)
            
        <div class="modal" id="{{$item->image}}">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"><i class="icofont-close"></i></button>
                    <div class="modal-body">
                        <div class="product-details-inner">
                            <div class="row align-items-center">
                                <div>
                                    <div class="thumb text-center">
                                        <div class="pro-thumb">
                                            <img src="{{asset('storage')}}/galery/{{$item->image}}" alt="{{$item->image}}">
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach



    </div>
</div>
<!-- blog section ending here -->


<!-- blog section ending here -->
