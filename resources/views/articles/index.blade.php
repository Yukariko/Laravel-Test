@extends('master')
@section('content')
    <h1>Articles Page</h1>
 
    @foreach($articles as $article)
        <h3>{{ $article }}</h3>
    @endforeach
 
@stop


