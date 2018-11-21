@extends('layouts.app')

 @section('service')
			

 <div class="container">
	<h3>Accueil</h3>
	<div class="row">

        <div class="col-lg-3">
			<div class="list-group">

			<button type="button" class="list-group-item list-group-item-action active">
			    Categorie
			  </button>
			    @if(count($categorie) > 0)

			    	@foreach($categorie as $cat)
			  <button type="button" class="list-group-item list-group-item-action">{{$cat->title}}</button>



			  
			      	@endforeach

			    @else
			    	<button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>   	
			    @endif
			</div>
			</div>



	<div class="col-lg-9">
	
		<div class="row">
		@if(count($service) > 0)
			@foreach($service as $serv)
			<div class="col-lg-4 col-sm-6 portfolio-item">
			          <div class="card h-100">
			          
			            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
			            
			            <div class="card-body">
			              <h4 class="card-title">
			                <a href="#">{{$serv->name}}</a>
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
	</div>
</div>
</div>

@endsection
