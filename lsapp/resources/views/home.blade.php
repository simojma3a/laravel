@extends('layouts.appp')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hello {{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Hello {{ Auth::user()->name }}</p>
                    <a href="{{ route('categorie.create') }}" class="btn btn-primary"> Ajouter une catégorie </a>
                </div >
                <table class="table table-sm">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">photo</th>
                        <th scope="col">afficher</th>
                        <th scope="col">modifier</th>
                        <th scope="col">supprimer</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    
			            @foreach($categorie as $cat)     
                        <tr>
                        <th scope="row">{{$cat->id}}</th>
                        <td>{{$cat->title}}</td>
                        <td><img src="{{$cat->photo}}" height="50" width="50"/></td>
                        <td><a href="" class="btn btn-primary"> view </a></td>
                        <td><a href="{{ route('categorie.edit', ['categorie' => $cat->id]) }}" class="btn btn-success"> update </a></td>
                        
                        
                        <td>
                        <form action="{{route('categorie.destroy', $cat->id)}}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button  class="btn btn-danger">supprimer</button>  
                        </form>
                        </td>
                        </tr>
                        @endforeach
                      
                    </tbody>
                    </table>
                    <div class="text-center">
                        {!--! $categorie->links();!!}
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
