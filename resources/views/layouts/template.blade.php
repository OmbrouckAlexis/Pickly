

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Titre de la page</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="script.js"></script>

<script src="/js/jquery.js"></script>
<script src="/js/jquery.pjax.js"></script>
<script src="/js/toastr.min.js"></script>
</head>
<body>

    <header id="header">
        <div id="nav-main">
            <nav>
                    <a class="nav-link" href="/">Home</a>
                    @auth
                    <a class="nav-link" href="/user/{{Auth::id()}}">Profil</a>
                    @endauth
                    
                    <div id="searchdiv">
                        <form id="search" method="get" action="search">
                            <input type="text" placehorlder="Recherche"/>
                            <input type="submit" value="go"/>
                        </form>
                    </div>

                    @auth
                    <a class="nav-link" href="/songs/create">Create</a>
                    @endauth

                    @guest
                        @if (Route::has('login'))
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @endif
                        
                        @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    @endguest
            </nav>

@yield('content')

<footer id="footer">
    <div>
        <h3>Pick'ly</h3>
    </div>
    <div>
        <p>16 rue de l'université | 62300 | Lens </p>
        <hr/>
    </div>
    <div>
        <p>Tout droit réservé</p>
    </div>
</footer>

<script src="/js/divers.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/app.js"></script>