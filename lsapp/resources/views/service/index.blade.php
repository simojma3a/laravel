@extends('layouts.appp')

@section('content')
<div class="container">
    <div class="row justify-content-center">

            @include('profile.sidebarB')


        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Hello {{ Auth::user()->name }}</div>
                
                <div class="card-body">
                        @if (Auth::user()->role === 2)
                        <a href="" class="btn btn-primary"> Ajouter une service </a>
                        @endif

                    <h4>liste des services </h4>
                    <table class="table table-sm">
                        <thead>
                            <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">photo</th>
                            <th scope="col">phone</th>
                            <th scope="col">addresse</th>
                            <th scope="col">email</th>
                            <th scope="col">position</th>
                            <th scope="col">categorie</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($service) > 0)
                                @foreach($service as $serv)     
                                <tr>
                                <th scope="row">{{$serv->id}}</th>
                                <td>{{$serv->name}}</td>
                                
                                <td><img src="{{$serv->photo}}" height="50" width="50"/></td>
                                <td>{{$serv->phone}}</td>
                                <td>{{$serv->adresse}}</td>
                                <td>{{$serv->email}}</td>
                                <td>{{$serv->position}}</td>
                                <td>{{$serv->categorie_id}}</td>
                                
                                @if (Auth::user()->role === 2)
                                <td><a href="{{ route('service.edit', ['service' => $serv->id]) }}" class="btn btn-success"> update </a></td>
                        
                               
                                <td>
                                <form action="{{route('service.destroy', $serv->id)}}" method="POST">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button  class="btn btn-danger">supprimer</button>  
                                </form>
                                </td>
                                @endif        
                                
                                </tr>
                                @endforeach
                            @else
                            <p class="text-danger"> il n'y a aucun service a afficher</p>
                            @endif
                        </tbody>
                    </table>
                    <!--div class="text-center">
                        {!--! $service->links();!!}
                    </div-->
                </div >
               
               

                   
                    
			            
                      
                   
                    
            </div>
        </div>
    </div>
</div>
@endsection
