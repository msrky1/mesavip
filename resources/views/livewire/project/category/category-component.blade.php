<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
    <div class="blog-sidebar-area">
        <div class="single-sidebar">
            <h2>Ara</h2>
            <div class="sidebar-search">
                <input type="text" placeholder="Ara...">
                <span>
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </div>
        <div class="single-sidebar">
            <h2>KATEGORİLER</h2>
            <div class="sidebar-category">
                <ul>
                    @foreach ($category as $cat)
                    <li>
                        <a href="{{route('blog.category' , ['category_slug'  => $cat->slug ])}}">{{$cat->name}}</a>
                    </li>
                   
                    @endforeach
                    

                </ul>
            </div>
        </div>
        <div class="single-sidebar">
            <h2>Son Gönderiler</h2>
            <div class="sidebar-recent-post">

                @foreach ($blog as $b)
                    
          
                <div class="media single-post">
                    <div class="pull-left">
                        <a href="{{route('blog.detail' , [ $b->slug ])}}">
                            <img class="media-object" src="{{ asset('storage\blog') }}\{{$b->image}}"
                                alt="post">
                        </a>
                    </div><br>
                    <div class="media-body">
                       
                        <div class="posted-date">
                         
                            <a href="single.html">{{$b->created_at->diffForHumans()}}</a>
                        </div>
                       <p> {{$b->title}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
</div>