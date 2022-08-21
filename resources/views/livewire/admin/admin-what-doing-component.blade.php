<main>

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Duyurular
						</h1>
				    </div>
				    
			    </div><!--//row-->
			   
			    
                <div class="col-auto">						    
                    <a class="btn app-btn-primary" href="{{route('admin.whatdo.add')}}">
                
                      Yeni Duyuru Ekle
                    </a>
                </div>    @if (Session::has('message'))
				<div class="alert alert-success">
					<strong>{{ Session::get('message') }}</strong> 
				</div>
			@endif
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
                          
						    <div class="app-card-body">
                              
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">id</th>
												<th class="cell">Resim</th>
												<th class="cell">Başlık</th>
												<th class="cell">İçerik Detay Yazı</th>
												<th class="cell">İkon</th>
												<th class="cell">Renk</th>
												<th class="cell">Aksiyonlar</th>
											
											</tr>
										</thead>
										<tbody>
											@foreach ($whatdo as $s)
												
									
											<tr>
												<td class="cell">#{{$s->id}}</td>
												<td class="cell"><img width="150px" src="{{asset('storage/whatdoing')}}/{{$s->image}}" alt="{{$s->title}}"></td>

												<td class="cell"><span class="truncate">{{$s->title}}</span></td>
												<td class="cell">{!!$s->description = Str::limit($s->description, 50) !!}</td>
												<td class="cell"><h5> {!! $s->icon !!} </h5></td>
												<td class="cell"><h5> {!! $s->color !!} </h5></td>
											
								
												<td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('admin.whatdo.edit' , ['whatdo_id' => $s->id])}}">Düzenle
												
												</a> 
												<a href="#" class="btn-sm app-btn-danger" wire:click.prevent="deleteWhatdo({{ $s->id }})">
												 Sil </a></td>
											</tr>
						@endforeach
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			
						
			        </div><!--//tab-pane-->
			        
			        
			        
			        
			        
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
</main>