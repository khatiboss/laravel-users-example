@extends('app') @section('title') Index @stop @section('content')
<h1>Articles</h1>
@if (count($articles))

<table border="1" width="50%">

    <tr>
        <td>Titolo</td>
        <td>Articolo</td>
        <td>Data Publicazione</td>
        <td colspan="2">Operazione</td>

    </tr>
    @foreach ($articles as $article)
    <tr>
        <td><a href="{{action('ArticlesController@show', [$article->id])}}">{{$article->title}}</a></td>
        <td>{{$article->post}}</td>
        <td>{{$article->published_at}}</td>
        <td colspan="2">
            {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('articles.destroy', $article->id))) !!}
            <a href="{{ route('articles.show', [$article->id]) }}"></a>
            {!! link_to_route('articles.edit', 'Modifica', array($article->id), array('class' => 'btn btn-info')) !!}
            {!! Form::submit('Cancella', array('class' => 'btn btn-danger')) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach

</table>
@else
<p>Nessun Articolo</p>
@endif 

<br><br>
<a href="{{action('ArticlesController@create')}}">Creare Nuovo Articolo</a>
@stop
