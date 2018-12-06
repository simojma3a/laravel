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
                    
                    
                    </p>
                    <p><a href="{{ route('profile.edit', ['profile' =>  Auth::user()->id]) }}" class="btn btn-success"> update </a></p>

                    
                  
                </div >
               
               

                   
                    
			            
                      
                   
                    
            </div>
        </div>
    </div>
</div>
@endsection
