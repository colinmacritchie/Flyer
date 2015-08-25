@extends('layout')

@section('content')

	<h1>Selling Your Truck?</h1>
	<br>

	<form>

	<h1 class="form-header" id="form-header">Area Info</h1>
	<br>

	<div class="form-group">

		<label for="City">City:</label>

		<input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">

	</div> <!-- end of City section -->

	<div class="form-group">

		<label for="State">State:</label>

		<input type="text" name="state" id="state" class="form-control" value="{{ old('state') }}">

	</div> <!-- End of State section -->


	<div class="form-group">

		<label for="Zip">Zip/Postal Code:</label>

		<input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">

	</div> <!-- End of ZipCode section -->

	<div class="form-group">

		<label for="Country">Country:</label>

		<select id="country" name="country" class="form-control"></select>


	</div> <!-- End of country section -->

	<br>
	
	<h1 class="form-header" id="form-header">Truck Info</h1>

	<br>

	<div class="form-group">

		<label for="Make">Make:</label>

		<select id="make" name="make" class="form-control"></select>

	</div> <!-- End of make section -->

	<div class="form-group">

		<label for="Model">Model:</label>

		<select id="model" name="model" class="form-control"></select>

	</div> <!-- End of model section -->

	<div class="form-group">

		<label for="Color">Color:</label>

		<input type="text" name="color" id="color" class="form-control" value="{{ old('color') }}">

	</div> <!-- End of Color section -->

	<div class="form-group">

		<label for="Year">Year:</label>

		<select id="year" name="year" class="form-control"></select>

	</div> <!-- End of Year section -->


	</form>

@stop