@extends('layout')

@section('content')

	<h1>Selling Your Truck?</h1>

	<hr>
	<br>

	<form mthod="POST" action="/flyers" enctype="multipart/form-data">

	<h1 class="form-header" id="form-header">Area Info</h1>
	<hr>

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
	<hr>

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

	<div class="form-group">

		<label for="Miles">Miles:</label>

		<input type="text" name="miles" id="miles" class="form-control" value="{{ old('miles') }}">

	</div> <!-- End of Miles section -->

	<div class="form-group">

		<label for="Condition">Condition:</label>

		<select id="condition" name="condition" class="form-control"></select>

	</div> <!-- End of Condition section -->

	<div class="form-group">

		<label for="price">Sale Price:</label>

		<input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">

	</div> <!-- End Of Price section -->

	<div class="form-group">

		<label for="description">Description:</label>

		<textarea type="description" name="description" id="description" class="form-control" rows="10">
			
			{{ old('description') }}

		</textarea>

	</div>	<!-- End of Description Section -->

	<div class="form-group">

		<label for="photos">Photos:</label>

		<input type="file" name="photos" id="photos" class="form-control" value="{{ old('photos') }}">

	</div>

	<div class="form-group">

		<button type="submit" class="btn btn-primary">Create Flyer</button>
		
	</div><!-- End of Submit button -->	

	<br>
	<br>


	</form>

@stop