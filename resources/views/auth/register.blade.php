@extends('layouts.template')

@section('content')

<section id="register">
                    <form class="form-laravel" method="POST" action="{{ route('register') }}">
                        @csrf
                            <label for="name" class="label-form">{{ __('Name') }}</label><br/><br/>

                                <input id="name" type="text" class="input-form @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br/><br/>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="email" class="label-form">{{ __('E-Mail Address') }}</label><br/><br/>

                                <input id="email" type="email" class="input-form @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"><br/><br/>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="password" class="label-form">{{ __('Password') }}</label><br/><br/>

                                <input id="password" type="password" class="input-form @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br/><br/>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <label for="password-confirm" class="label-form">{{ __('Confirm Password') }}</label><br/><br/>

                                <input id="password-confirm" type="password" class="input-form" name="password_confirmation" required autocomplete="new-password"><br/><br/>
                            
                            <label for="overview" class="label-form">{{ __('Overview') }}</label><br/><br/>

                                <input id="overview" type="text" class="input-form @error('overview') is-invalid @enderror" name="overview" value="{{ old('overview') }}" required autocomplete="overview" autofocus><br/><br/>

                                @error('overview')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label class="label-form">Charger une image :</label><br/>
                                <input class="btn-file" type="file" name="avatar" id="avatar"></input><br/>

                                <button type="submit" class="btn-user">
                                    {{ __('Register') }}
                                </button>
                    </form>
</section>
@endsection
