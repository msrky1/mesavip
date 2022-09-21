<!-- banner section start here -->
<div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>Eğitmen Kadromuz</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                            <li class="breadcrumb-item"><a href="#">Hakkımızda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ekibimiz</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>  
    </div>
</div>
    <!-- Instructors Section Start Here -->
    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">

                    @foreach ($team as $item)
                        
                  
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="{{asset('storage')}}/team/{{$item->image}}" alt="instructor">
                                </div>
                                <div class="instructor-content">
                                    <a href="#"><h4>{{$item->name}}</h4></a>
                                    <p>{{$item->about}}</p>
                                   
                                </div>
                            </div>
                            {{-- <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 courses</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 students</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>

    <div class="achieve-part mt-4">
        <div class="row g-4 row-cols-1 row-cols-lg-2">
            <div class="col">
                
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>