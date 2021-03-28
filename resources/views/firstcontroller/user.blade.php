@extends("layouts.template")

@section('content')

<section id="user">
        <div id="grid-profil">
            <div id="info-profil">
                <h2 class="title-user">{{$user->name}}</h2>
                <p class="overview-user">{{$user->overview}}</p>
                <h3 class="count-user">{{$user->ILikeThem()->count()}} Abonnements</h3>
                <h3 class="count-user">{{$user->TheyLikeMe()->count()}} Abonnés</h3></br>
                @auth

    @if(Auth::id() !=$user->id)

        @if(Auth::user()->ILikeThem->contains($user->id))
            <a href="/suivre/{{$user->id}}" class="btn-user">Ne plus suivre</a>
        @else 
            <a href="/suivre/{{$user->id}}" class="btn-user">Suivre</a>
        @endif
    @endif

@endauth
            </div>
        <div id="div-img-profil">
            <img class="image-ronde" src="{{$user->avatar}}" alt='avatar de {{$user->name}}'/>
        </div>
    </div>
        
<div>
<h2 class="title-user" id="count-photo">{{$user->songs()->count()}} photos</h2>
</div>
<div>
@include('_songs', ["songs" => $user->songs])

</div>
                   
</section>



@endsection