@extends('app')

@section('title')
New Article
@stop

@section('content')
<h1>New Article</h1>
<hr />
{!! Form::model($article = new \App\Article, array('action' => 'ArticlesController@index')) !!}
	@include('articles.form', ['submitButtonText' => 'Save', 'create' => true])
{!! Form::close() !!}

@include('errors.list')

@stop