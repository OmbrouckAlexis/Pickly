@extends("layouts.template")

@section('content')
        
 @include('_songs', ["songs" => $songs])       

@endsection