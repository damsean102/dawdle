@extends('layout')


@section('content')
	<article class="column">
		<h2>Create a Project</h2>

		@include('partials.errors')

		<form method="POST" action="/projects">
			{{ csrf_field() }}
			<fieldset>
				<label for="projectName">Project Title</label>
				<input type="text" placeholder="Add a project title" id="projectName" name="title">
				<input class="button-primary" type="submit" value="Save">
			</fieldset>
		</form>
	</article>
@endsection