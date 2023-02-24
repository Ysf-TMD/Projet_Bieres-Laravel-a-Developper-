<div class="card" >
    <div style="background-image: url({{asset('/img/quotes.png')}}); background-repeat:
        no-repeat; background-size: 150px 150px">
        <div class="card-body">
            <h3 class="card-title">{{$commentaire->titre}}</h3> <h4 class="muted">{{\App\Commentaire::diff($commentaire)}}</h4>
            <p class="card-description">
                {{$commentaire->commentaire}}
            </p>
            <div class="card-footer">
                <div class="author">
                    <a href="{{route('home')}}">
                        <img src="{{asset('/img/avatar.png')}}" alt="..."
                             class="avatar img-raised">
                        <span>{{$commentaire->user->name}}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
