@extends('layout')


@section('content')
	<article class="column">
		<h1>{{$project->title}}</h1>
		<p>LIST ALL TASKS HERE</p>
	</article>

	@include('tasks.create')
@endsection