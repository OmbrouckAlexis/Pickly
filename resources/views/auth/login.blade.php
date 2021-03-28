@extends('layouts.template')

@section('content')
<section id="login">
                    <form class="form-laravel" method="POST" action="{{ route('login') }}">
                        @csrf
                            <label for="email" class="label-form">{{ __('E-Mail Address') }}</label><br/><br/>
                                <input id="email" type="email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br/><br/>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="password" class="label-form">{{ __('Password') }}</label><br/><br/>

                                <input id="password" type="password" class="input-form @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br/><br/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br/>
                                    <input class="checkbox" type="checkbox" name="remember" id="remember"> {{ old('remember') ? 'checked' : '' }}</input>

                                    <label class="label-form" for="remember">
                                        {{ __('Remember Me') }}
                                    </label><br/><br/>
                                <button type="submit" class="btn-user">
                                    {{ __('Login') }}
                                </button><br/><br/>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </form>
</section>
@endsection
