@extends('layouts.appp')

@section('content')
<div class="container">
    <div class="row justify-content-center">


       @include('profile.sidebarB')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Hello {{ Auth::user()->name }}</div>

                <div class="card-body">
                    <p>id : {{ Auth::user()->id }}</p>
                    <p>name : {{ Auth::user()->name }}</p>
                    <p>email :   {{ Auth::user()->email }}</p>
                    <p>role:   
                    @if( Auth::user()->role  === 1)
                        admin
                    @elseif( Auth::user()->role  === 2)
                        editeur
                    @else
                        user

                    @endif
                    
                    <form method="post" action="{{route('profile.update', $user->id)}}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="name">Nom:</label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <label for="email">Email:</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <label for="password">Mot de pass:</label>
                                
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <label for="password">Confirmation de mot pass:</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <a href="{{route('profile')}}" class="btn btn-secondary">Annuler</a>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>


                    
                  
                </div >
               
               

                   
                    
			            
                      
                   
                    
            </div>
        </div>
    </div>
</div>
@endsection
