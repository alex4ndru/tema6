@extends('master')

@section('content')
	{{$songTitle}}
@stop

@section('content2')
        <hr />
        {{$songLyrics}}
@stop

@section('menu')
        <a href="../">Back to list></a>
@stop

@section('aboutLink')
        <a href="../about">Despre noi</a>
@stop
