@extends('app')

@section('title')
{{$article->name}}
@stop

@section('content')
<h1>{{$article->id}}</h1>
<ul>
	<li>{{$article->title}}</li>
	<li>{{$article->post}}</li>
	<li>{{$article->published_at}}</li>
</ul>
@stop