@extends('app')

@section('title')
Modifica Articolo
@stop

@section('content')
<h1>Modifica Articolo</h1>
<hr />
{!! Form::model($article , ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
	@include('articles.form', ['submitButtonText' => 'Aggiorna', 'create' => false])
{!! Form::close() !!}

@include('errors.list')

@stop