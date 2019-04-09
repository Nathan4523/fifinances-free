 @extends('layouts.activity_login') @section('content')
<section id="screen_login">
    <div class="container">
        <div class="row justify-content-md-center" id="row_top">
            <div class="col col-lg-2 col-sm-2 col-xs-1"></div>
            <div class="col-lg-8 col-sm-8 col-xs-10 text-center">
                <div class="col-md-2"></div>
                <div class="card card-login col-md-8">
                    <div class="card-header">
                        <img src="{{asset('images/logo/logo-ff.svg')}}" alt="logo Fifinances" class="logo-login">
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                        placeholder="Nome" required autofocus> @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                        placeholder="E-mail" required> @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                        placeholder="Senha" required> @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha"
                                        required>
                                </div>
                            </div>

                            <div class="row space_lines">
                                <div class="col-lg-5 text-center">
                                    <hr class="line_login">
                                </div>
                                <div class="col-lg-2 text-center">
                                    <span class="letter_O">O</span>
                                </div>
                                <div class="col-lg-5 text-center">
                                    <hr class="line_login">
                                </div>
                            </div>

                            <div class="row content_btns">
                                <div class="col-md-12">
                                    <button type="submit" class="button_submit">
                                        {{ __('CADASTRAR') }}
                                    </button>
                                </div>
                                <div class="col-lg-12 content_button_link">
                                    {{--
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> --}}

                                    <a href="{{route('login')}}">Já tenho conta</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="col col-lg-2 col-sm-2 col-xs-1"></div>
        </div>
    </div>
</section>
@endsection