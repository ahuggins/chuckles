@extends('layouts.base')

@section('css')
body {
    background: {{ $title }};
}
@stop

@section('content')

<h1>{{ $title }}</h1>
    
@stop
