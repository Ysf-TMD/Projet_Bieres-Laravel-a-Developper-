@extends('layouts.app')

@section('content')

    <div class="page-header header-filter clear-filter green-filter " data-parallax=
    "true"
         style="background-image: url('{{url('/img/houblon-alsace.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand">
                        <h1>La bière qu'il vous faut.</h1>
                        <h3>Pouvez vous imaginer la bière que vous allez déguster...
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container d-flex justify-content-center my-3 ">
            <nav  class=" text-center" style="margin-bottom: 2rem">
                {{$bieres=\App\Models\Biere::paginate(4)}}
            </nav>
        </div>
        <div class="section section-basic">
            <div class="container">
                <div class="title">
                    <h2>Laissez-vous tenter ... <b>(Avec modération)</b></h2>
                </div>
                       @foreach($bieres as $biere)
                            @component('biere.component', ['biere' => $biere])
                            @endcomponent
                        @endforeach

                <div class="container d-flex justify-content-center my-3 ">
                    <nav  class=" text-center" style="margin-bottom: 2rem">
                        {{$bieres=\App\Models\Biere::paginate(4)}}
                    </nav>
                </div>




                {{--
                @if($errors->any())
                    @foreach($errors as $err)
                        {{$err}}
                    @endforeach
                @endif--}}



            </div>

        </div>
    </div>
@endsection
