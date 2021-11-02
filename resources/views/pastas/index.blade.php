@extends('layouts.app')

@section('content')
    @foreach ($paste as $pasta)
        <p>{{$pasta['title']}}</p>
        <p>{!!$pasta['description']!!}</p>
        <p>{{$pasta['type']}}</p>
        <p>{{$pasta['coocking_time']}}</p>
    @endforeach

@endsection
