@extends('app')

@section('title')
Nuovo Articolo
@stop

@section('content')
<h1>Nuovo Articolo</h1>
<hr />
{!! Form::model($article = new \App\Article, array('action' => 'ArticlesController@index')) !!}
	@include('articles.form', ['submitButtonText' => 'Salva', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop