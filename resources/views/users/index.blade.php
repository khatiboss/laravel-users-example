@extends('app') @section('title') Index @stop @section('content')
<h1>Users</h1>
@if (count($users))

<table border="1" width="50%">

	<tr>
		<td>ID</td>
		<td>Nome</td>
		<td>Email</td>
		<td>Password</td>
	</tr>
	@foreach ($users as $user)
	<tr>
		<td>{{$user->id}}</td>
		<td><a href="{{action('UsersController@show', [$user->id])}}">{{$user->name}}</a></td>
		<td>{{$user->email}}</td>
		<td>{{$user->password}}</td>
	</tr>
	@endforeach

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
@endif @stop
