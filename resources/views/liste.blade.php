@extends('layouts.app')
@section('content')
    <div class="main main-raised">
        <div class="container">
            <h1 style="margin-top: 10rem">Liste des Bières</h1>
            @if(!(count($bieres) === 0))
                <table class="table">
                    <thead style="background-color: #ddd; font-weight: bold;">
                    <th></th>
                    <th class="header">Nom</th>
                    <th class="header">Type</th>
                    <th class="header">Frementation</th>
                    <th class="header">Pays</th>
                    <th class="header">Alcool</th>
                    <th class="header ">Actions</th>
                    </thead>
                    <tbody>
                    @foreach ($bieres as $biere)
                        <tr class="une-biere" data-url="">{{--{{route('bieres.show',$biere->id)}}--}}
                            <td><img style="height: 70px" src="{{url("http://www.guidedesbieres.com".$biere->image)}}"
                                     alt="Circle Image"
                                     class="rounded-circle img-fluid"></td>
                            <td>{{$biere->nom}}</td>
                            <td>{{$biere->type}}</td>
                            <td>{{$biere->fermentation}}</td>
                            <td>{{$biere->pays}}</td>
                            <td>{{$biere->alcool}}</td>
                            <td>
                                <div class="btn-group">
                                    <form action="{{url("/show",$biere->id)}}" method="GET">
                                        <button type="submit" class="btn btn-info" role="button">
                                            <span class="far fa-edit fa-2x " aria-hidden="true">Show</span>
                                        </button>

                                    <a href="#" class="btn btn-warning" role="button">
                                        <span class="far fa-edit fa-2x " aria-hidden="true">Modifier</span>
                                    </a>
                                    <a href="#" class="btn btn-danger" role="button">
                                        <span  aria-hidden="true">Supprimer</span>
                                    </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-warning" role="alert">Aucune bière dans la base</div>
                <a href="{{url('/apropos')}}" class="btn btn-warning"> retour à l'accueil</a>
            @endif
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).on('click', 'tr.une-biere', function () {
            console.log($(this)[0].attributes['data-url'].value);
            let my_url = $(this)[0].attributes['data-url'].value;
            window.location.replace(my_url);
        });
    </script>
@endsection
