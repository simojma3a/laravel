<div class="col-md-3">
        <div class="list-group">
                <!-- admin list-->
                @if (Auth::user()->role === 1)
               
                <a href="{{route('home')}}" class="list-group-item"> <span>Gestion de catégorie </span></a>
                <a href="{{route('service')}}" class="list-group-item"> <span>Gestion de service </span></a>
                <a href="" class="list-group-item"> <span>Service a valider </span></a>
                <a href="" class="list-group-item"> <span>Mes commentaire </span></a>
               
                @endif
                 <!-- editor list-->
                @if (Auth::user()->role === 2)
                {{$userId = Auth::user()->id}}
                <a href="{{url("/profile/{$userId}")}}" class="list-group-item"> <span>Mes services </span></a>
                <!--a href="{{route('service')}}" class="list-group-item"> <span>Gestion de service </span></a>
                <a href="" class="list-group-item"> <span>Service a valider </span></a-->
                
               
                @endif
                 <!-- user list-->
                @if (Auth::user()->role === 3)
               
                <a href="{{route('home')}}" class="list-group-item"> <span>Gestion de catégorie </span></a>
                <a href="{{route('service')}}" class="list-group-item"> <span>Gestion de service </span></a>
                <a href="" class="list-group-item"> <span>Service a valider </span></a>
                <a href="" class="list-group-item"> <span>Mes commentaire </span></a>
           
                @endif
            
                <a href="{{route('profile')}}" class="list-group-item"> <span>Mon profile </span></a>

        </div>
    </div>