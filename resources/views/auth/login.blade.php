@extends('layouts.tampilan')

@section('content')
    <div class="center-vertical bg-black">
        <div class="center-content row">
            <br>
            <h3 class="text-center pad25B font-gray font-size-23">Login</h3>
            <form action="{{route('login')}}" id="login-validation" class="center-margin col-xs-11 col-sm-5" method="POST" autocomplete="off">
                @csrf
                <div id="login-form" class="content-box">
                    <div class="content-box-wrapper pad20A">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address:</label>
                            <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="" required autocomplete="off">

                                @error('email')
                                    <span class="alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password:</label>
                            <div class="input-group input-group-lg">
                            <span class="input-group-addon addon-inside bg-white font-primary">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                @error('password')
                                    <span class="alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a href="{{route('register')}}" class="btn btn-success">
                                    {{ __('Register') }}
                                </a>


                                @if (Route::has('password.request'))
                                    <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>-->
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                    </form>
                </div>
            </div>
@endsection
