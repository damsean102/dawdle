@extends('layout')


@section('content')
	<section class="column">
		<h2>List of Tasks</h2>

		<p></p>

		<hr>
		@include('partials.errors')
		<form method="POST" action="/tasks">
			{{ csrf_field() }}
			<fieldset>
				<label for="taskName">Task</label>
				<input type="text" placeholder="Add a task" id="taskName" name="title" required>

				<label for="dueDate">Due Date</label>
				<input type="date" placeholder="Select a date" id="dueDate" name="due_date" required>

				<input class="button button-outline" type="submit" value="Save">
			</fieldset>
		</form>
	</section>
@endsection