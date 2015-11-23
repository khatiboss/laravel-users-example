@extends('app')

@section('title')
Index
@stop

@section('content')
<h1>Users</h1>
@if (count($users))
	
<table border="1">
<center>
<tr>
<td>ID</td><td>Email</td><td>Password</td>
</tr>
@foreach ($users as $user)
<tr>
<h2><a href="{{action('UsersController@show', [$user->id])}}">{{$user->name}}</a><h2>
<td>{{$user->id}}</td><td>{{$user->email}}</td><td>{{$user->password}}</td>
</tr>
@endforeach
</center>
</table>
<!--ul>
	@foreach ($users as $user)
		<user>
			<h2><a href="{{action('UsersController@show', [$user->id])}}">{{$user->name}}</a><h2>
			<ul>
				<li>{{$user->email}}</li>
				<li>{{$user->id}}</li>
				<li>{{$user->password}}</li>
			</ul>
		</user>
	@endforeach
</ul-->
@else
<p>no users</p>
@endif

@stop