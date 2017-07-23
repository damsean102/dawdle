@extends('layout')


@section('content')
	<article class="column">
		<h1>{{$project->title}}</h1>
		<p>{{$project->description}}</p>
	</article>

	@include('tasks.create')
@endsection