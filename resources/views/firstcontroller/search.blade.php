@extends("layouts.template")

@section('content')

<div id="search-section">

<div class="title-search">
<h3>Les photos</h3>
</div>
 @include('_songs', ["songs" => $songs])       

<div class="title-search">
<h3>Les Utilisateurs</h3>
</div>

@foreach($users as $u)
    <div id="user-search">
        <h2><a href="/user/{{$u->id}}">{{$u->name}} </a></h2>
        <h3>{{$u->ILikeThem()->count()}} Abonnements</h3>
        <h3>{{$u->TheyLikeMe()->count()}} Abonnés</h3>
    </div>
@endforeach

</section>
@endsection