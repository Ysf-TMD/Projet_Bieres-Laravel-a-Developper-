@extends('layouts.app')

 @section('content')

    <div class="page-header header-filter  " style="background-image: url('{{asset('/img/draft-beer-login.jpg')}}'); background-size: cover; background-position: center;">
        <div class="container justify-content-center ">
            <div class="row">
                <div class="mx-auto col-md-6 ml-auto my-5 mr-auto">
                    <div class="card card-login ">
                        <form class="form" method="POST" action="">
                            @csrf
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Connexion</h4>
                                <div class="social-line">

                                </div>
                            </div>
                            <p class="description text-center h1 my-2">Login</p>
                            <div class="card-body">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Votre nom...">
                                </div>
                                <div class="input-group">
                                    <input id="email" type="email" placeholder="Adresse mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email')}}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong></span>
                                    @endif
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                    <input id="password" type="password" placeholder="Mot de passe" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password')}}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="footer text-center">
                                <button type="submit" class="btn btn-primary col-md-6">
                                    login
                                </button>
                                <div>
                                    <a class="btn btn-link" href="">
                                        Mot de passe oublié
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
 @endsection
