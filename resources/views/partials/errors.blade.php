
@if(count($errors->all()))

	<div class="errors">

		@foreach($errors->all() as $error)
			<p>{{$error}}</p>
		@endforeach
		
	</div>

@endif