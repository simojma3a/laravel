 	<div class="row">
			@if(count($service) > 0)
				@foreach($service as $serv)
				<div class="col-lg-4 col-sm-6 portfolio-item">
									<div class="card h-100">
									
										<a href="{{url("/service/{$serv->id}")}}"><img class="card-img-top" src="{{$serv->photo}}" alt=""></a>
										
										<div class="card-body">
											<h4 class="card-title">
												<a href="{{url("/service/{$serv->id}")}}">{{$serv->name}}</a>
											</h4>
											<p class="card-text">{{$serv->adresse}}</p>
											<p class="card-text">{{$serv->phone}}</p>
											<p class="card-text">{{$serv->email}}</p>
											<p class="card-text">{{$serv->position}}</p>
										</div>
										
									</div>
								</div>
			@endforeach
							

	    @else
	    	<h3>rien</h3>   	
			@endif
			<!--div class="text-center">
				{!--! $service->links(); !!}
			</div-->

		</div>
	