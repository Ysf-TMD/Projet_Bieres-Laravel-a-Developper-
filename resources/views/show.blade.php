
@extends('layouts.app')
@section('content')


    <div class="page-header header-filter clear-filter green-filter " data-parallax=
    "true"
         style="background-image: url('{{url('/img/une-biere.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand text-light">
                        <h1>{{$biere->nom}}</h1>
                        <h3>{{$biere->brasserie}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="row container">
            <div class="col-3 mt-3">
                <img src="{{url("http://www.guidedesbieres.com".$biere->image)}}" alt="{{$biere->nom}}"
                     class="img-thumbnail">
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-3">
                        <h4 class="title text-primary">Nom : </h4>
                    </div>
                    <div class="col-9 ">
                        <h3 class="title">{{$biere->nom}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h4 class="title text-primary">Brasserie : </h4>
                    </div>
                    <div class="col-3">
                        <h3 class="title">{{$biere->brasserie}}</h3>
                    </div>
                    <div class="col-3">
                        <h4 class="title text-primary">Pays : </h4>
                    </div>
                    <div class="col-3">
                        <h3 class="title">{{$biere->pays}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h4 class="title text-primary">Type : </h4>
                    </div>
                    <div class="col-3">
                        <h3 class="title">{{$biere->type}}</h3>
                    </div>
                    <div class="col-3">
                        <h4 class="title text-primary">Fermentation : </h4>
                    </div>
                    <div class="col-3">
                        <h3 class="title">{{$biere->fermentation}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <h4 class="title text-primary">Description : </h4>
                    </div>
                    <div class="col-9">
                        <p>{{$biere->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="title">Notation</h1>
            {{--@if($notations['nbAvis'] !== 0)
                @component('notation.component', ['note' => $notations['moyenne']*20
                , 'avis' => $notations['nbAvis'], 'avisParNote' => $notations['avisParNote']])
                @endcomponent
            @else--}}
                <div class="alert alert-primary" role="alert">Soyez le premier à évaluer cette bière</div>
            {{--@endif--}}
            <h1 class="title">Commentaires</h1>
           {{-- @if(!(count($commentaires) === 0))
                <h3 class="text-center">{{count($commentaires)}} Commentaire(s)</h3>
                @foreach($commentaires as $commentaire)
                    <div class="row">
                        @component('commentaire.component', ['commentaire' => $commentaire])
                        @endcomponent
                    </div>
                @endforeach
            @else
                <div class="alert alert-primary" role="alert">Soyez le premier à pos
                    ter un commentaire</div>
            @endif--}}
            <div class="alert alert-primary" role="alert">Soyez le premier à pos
                ter un commentaire</div>
        </div>
    </div>
@endsection
