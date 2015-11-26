@extends('app') @section('title') Index @stop @section('content')
<h1>Articles</h1>
@if (count($articles))

<table border="1" width="50%">

	<tr>
		<td>ID</td>
		<td>Titolo</td>
		<td>Articolo</td>
		<td>Data Publicazione</td>
		<td colspan="2">Operazione</td>

	</tr>
	@foreach ($articles as $article)
	<tr>
		<td>{{$article->id}}</td>
		<td><a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a></td>
		<td>{{$article->post}}</td>
		<td>{{$article->published_at}}</td>
		<td><a href="{{action('ArticlesController@edit', [$article->id])}}">Modifica</a></td>
		<td><a href="{{action('ArticlesController@destroy', [$article->id])}}" >Cancella</a></td>
	</tr>
	@endforeach

</table>


@else
<p>no Articles</p>
@endif @stop
