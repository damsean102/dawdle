@extends('layout')


@section('content')

	<p>All Projects</p>
	@if ($projects)
		<section class="row">
			@foreach ($projects as $project)

				<article class="column">
					<h3>{{$project->title}}</h3>
					<p>{{$project->description}}</p>
					<p><a href="/projects/{{$project->id}}" class="button button-outline">View Project</a></p>
				</article>

			@endforeach
		</section>
	@endif
@endsection