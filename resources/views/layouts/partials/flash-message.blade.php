{{-- This is a partial that shows the message at the top --}}

@if ($message = Session::get('success'))
<div class="container">
	<div class="alert alert-success alert-block alert-hide-class">
		<button type="button" class="close" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>	
			<strong>{{ $message }}</strong>
	</div>
</div>
@endif


@if ($message = Session::get('error'))
<div class="container">
	<div class="alert alert-danger alert-block">
		<button type="button" class="close" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>	
			<strong>{{ $message }}</strong>
	</div>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="container">
	<div class="alert alert-warning alert-block">
		<button type="button" class="close" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>	
		<strong>{{ $message }}</strong>
	</div>
</div>	
@endif


@if ($message = Session::get('info'))
<div class="container">
	<div class="alert alert-info alert-block">
		<button type="button" class="close" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>	
		<strong>{{ $message }}</strong>
	</div>
</div>
@endif


@if ($errors->any())
<div class="container">
		<button type="button" class="close" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>	
		Please check the form below for errors
	</div>
</div>	
@endif