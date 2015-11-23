<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('Articles') }}">Article Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('Articles') }}">View All Articles</a></li>
        <li><a href="{{ URL::to('Articles/create') }}">Create a Article</a>
    </ul>
</nav>

<h1>All the Articles</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titolo</td>
            <td>Articolo</td>
            <td>Data di Publicazione</td>
        </tr>
    </thead>
    <tbody>
    @foreach($Articles as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->post }}</td>
            <td>{{ $value->published_at }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the Article (uses the destroy method DESTROY /Articles/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the Article (uses the show method found at GET /Articles/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('Articles/' . $value->id) }}">Show this Article</a>

                <!-- edit this Article (uses the edit method found at GET /Articles/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('Articles/' . $value->id . '/edit') }}">Edit this Article</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>