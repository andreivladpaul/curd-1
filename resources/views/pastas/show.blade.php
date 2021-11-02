@extends('layouts.app')

@section('content')
        <p>{{$pasta['title']}}</p>
        <p>{!!$pasta['description']!!}</p>
        <p>{{$pasta['type']}}</p>
        <p>{{$pasta['coocking_time']}}</p>

@endsection
