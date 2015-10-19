@extends('master')

@section('content')
        @foreach ($songs as $value)
		<a href="songs/{{$value->id}}">{{$value->title}}</a>
	@endforeach
@stop

@section('aboutLink')
        <a href="about">Despre noi</a>
@stop
