@extends('layouts.appp')
@section('content')




<div class="col-lg-6">
    
<h3>Modification de catégorie </h3>


    <table class="table ">

        <tbody>
            <tr>
            <th >Titre:</th>
            <td> {{$categorie->title}}</td>
           
            </tr>
            <tr>
            <th>Photo:</th>
            <td><img src="{{$categorie->photo}}" height="50" width="50"/></td>
           
            </tr>

        </body>

        </table>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    
    <form method="post" action="{{route('categorie.update', $categorie->id)}}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label for="tilte">Titre</label>
            <input class="form-control" id="exampleInputEmail1" placeholder="Titre"
                   value="{{$categorie->title}}"
                   name="title"
            >
        </div>
        <a href="{{route('home')}}" class="btn btn-secondary">Annuler</a>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
