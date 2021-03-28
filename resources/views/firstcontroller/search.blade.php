@extends("layouts.template")

@section('content')
        
<h3>Les photos</h3>
 @include('_songs', ["songs" => $songs])       

<h3>Les Utilisateurs</h3>
@foreach($users as $u)
    <div>
        <h2><a href="/user/{{$u->id}}">{{$u->name}} </a></h2>
        <h3>{{$u->ILikeThem()->count()}} Abonnements</h3>
        <h3>{{$u->TheyLikeMe()->count()}} Abonnés</h3>
    </div>
@endforeach
@endsection