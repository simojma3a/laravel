@extends('layouts.appp')
@section('content')
    
    
    <form method="post" action="/categorie">
       
        {{ csrf_field() }}
        <div class="form-group">
            <label for="tilte">Titre de cotégorie</label>
            <input class="form-control"  placeholder="Titre"
                   value="titre"
                   name="title"
            >
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

@endsection