@extends('layout')

@section('content')

<div class="col-md-6 col-md-offset-3">

	<h1>Selling Your Truck?</h1>

	<hr>
	<br>

	<form method="POST" action="/flyers" enctype="multipart/form-data">

	@include('flyers.form')

	</form>

</div>
@stop