@extends('layouts.template')

@section('content')
<section id="reset">
                    <form class="form-laravel" method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input class="input-form" type="hidden" name="token" value="{{ $token }}">

                            <label for="email" class="label-form">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password" class="label-form">{{ __('Password') }}</label>

                                <input id="password" type="password" class="input-form @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            <label for="password-confirm" class="label-form">{{ __('Confirm Password') }}</label>

                                <input id="password-confirm" type="password" class="input-form" name="password_confirmation" required autocomplete="new-password">
                            
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>

</section>
@endsection
