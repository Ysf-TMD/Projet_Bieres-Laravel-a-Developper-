<div class="card text-center  " >
    <h4 class="title title-modern">{{$biere->nom}}</h4>
    <div class="header">
        <div class="avatar">
            <img src="{{url("http://www.guidedesbieres.com".$biere->image)}}" alt="{{$biere->nom}}"
                 class="img-raised rounded img-fluid">
        </div>
    </div>
    <div class="content">
        <div class="price">
            <h6>{{$biere->brasserie}}</h6>
            <h4>Fermentation {{$biere->fermentation}} {{$biere->alcool}}</h4>
        </div>
        <p class="description">{{$biere->description}}</p>
    </div>
    <div class="filter"></div>
    <div class="footer btn-center">
        <a class="btn btn-primary my-2 btn-round btn-fill " href="{{url("/show",$biere->id)}}">Afficher_Detail</a>
    </div>
</div>
