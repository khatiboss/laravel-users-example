@extends('app') @section('title') Delete article @stop

@section('content')
<div class="col-md-6 text-right">{!! Form::open([ 'method' => 'DELETE',
	'route' => ['articles.destroy', $article->id] ]) !!} {!!
	Form::submit('Delete this Article?', ['class' => 'btn btn-danger']) !!}
	{!! Form::close() !!}</div>
@include('errors.list') @stop


