@extends('layouts.app')

 @section('content')
     <div class="page-header header-filter " style="background-image: url('{{asset('/img/draft-beer-login.jpg')}}'); background-size: cover; background-position: top center;">
         <div class="container">
             <div class="row">
                 <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                     <div class="card card-login">
                         <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card-header card-header-primary text-center">
                                 <h4 class="card-title">Enregistrement</h4>
                                 <div class="social-line">
                                     </div>
                                 </div>
                            <p class="description text-center">Register</p>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">

                                         </div>
                                     <input id="name" type="text" placeholder=
                                    "Votre nom..." class="form-control{{ $errors->has('name') ? ' is-invalid' : ''}}" name="name" value="{{ old('name') }}" required autofocus>

                                     @if ($errors->has('name'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('name') }}</strong>
                                         </span>
                                         @endif
                                     </div>
                                 <div class="input-group">
                                    <div class="input-group-prepend">

                                    </div>
                                     <input id="email" type="email" placeholder="Adresse mail" class="form-control{{ $errors->has('email') ? ' is-invalid' :'' }}" name="email" value="{{ old('email') }}" required>

                                     @if ($errors->has('email'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('email') }}</strong>
                                         </span>
                                         @endif
                                     </div>
                                 <div class="input-group">
                                     <div class="input-group-prepend">

                                     </div>
                                     <input id="password" type="password" placeholder="Mot de passe"
                                              class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                     @if ($errors->has('password'))
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $errors->first('password')}}</strong>
                                         </span>
                                         @endif
                                     </div>
                                 <div class="input-group">
                                     <div class="input-group-prepend">

                                         </div>
                                     <input id="password-confirm" type="password" placeholder="Comfirme mot de passe" class="form-control" name="password_confirmation" required>
                                     </div>
                                 </div>
                             <div class="footer text-center">
                                 <button type="submit" class="btn btn-primary">
                                     Valide
                                     </button>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
@endsection
