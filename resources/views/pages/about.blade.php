@extends('app')
	
@section('content')

<h1>About</h1>

@if (count($people))
<h3>People I Like:</h3>
<ul>
	@foreach ($people as $person)
		<li>{!! $person !!}</li>
	@endforeach
</ul>
@endif

	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur quas corporis ullam error ipsum libero magnam cum porro. Error expedita quidem, hic optio magnam fugit accusantium qui quas nam nesciunt.
	</p>
@stop
