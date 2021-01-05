@if(session()->has('message'))
<div class="alert alert-success alert-dismissable" role="alert" >
	<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
	<strong> {{ session('message') }} </strong>
</div>
@elseif(count($errors))

<div class="alert alert-danger alert-dismissible" data-auto-dismiss="2000" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
	<strong>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</strong> 
</div>

@endif