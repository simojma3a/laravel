<div class="list-group">
    @foreach($categories as $cat)
        @if(url("/categorie/{$cat->id}") === \Illuminate\Support\Facades\URL::current())
            <a href="{{url("/categorie/{$cat->id}")}}" class="list-group-item active">
                <i class="fa fa-compass"></i>
                <span>{{$cat->title}}</span>
            </a>
        @else
            <a href="{{url("/categorie/{$cat->id}")}}" class="list-group-item"><i class="fa fa-compass"></i>
                <span>{{$cat->title}}</span>
            </a>
        @endif
    @endforeach
</div>


