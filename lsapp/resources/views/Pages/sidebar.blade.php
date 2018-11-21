

	 @extends('layouts.app')

	 	@section('sidebar')


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
		@endsection


