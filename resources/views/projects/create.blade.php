@extends('layout')


@section('content')
	<article class="column">

		@include('partials.errors')

		<form method="POST" action="/projects">
			{{ csrf_field() }}
			
			<fieldset>
				<legend>Create a New Project</legend>
				
				<label for="projectName">Project Title</label>
				<input type="text" placeholder="Add a project title" id="projectName" name="title">
				<input class="button button-outline" type="submit" value="Save">
			</fieldset>
		</form>
	</article>
@endsection