@extends('layouts.app')

@section('content') 

 <div class="panel panel-primary">
 	<div class="panel-heading">{{ $user->name }}
<a href="/admin" class="pull-right" style="color: white;">Users</a>
 	</div>

 	<div class="panel-body">
 		<div class="container-fluid">
 			<section class="container col-sm-offset-3">
 				<div class="container-page">				
 					<div class="col-md-6">
 						<h3 class="dark-grey">Update</h3>
					<form method="POST" action="/admin/{{ $user->id }}" class="form-horizontal">
					{{ csrf_field() }}
					{{ method_field('PATCH') }}
 						<div class="form-group col-lg-12">
 						<label>User name</label>
 							<input type="" name="name" class="form-control" id="" value="{{ isset($user->name) ? $user->name : old('name') }}">
 						</div>

 						<div class="form-group col-lg-12">
 							<label>Email Address</label>
 							<input type="" name="email" class="form-control" id="" value="{{ isset($user->email) ? $user->email : old('email') }}">
 						</div>

 						<div class="form-group col-lg-12">
 							<label>Password</label>
 							<input type="password" name="password" class="form-control" id="password" value="{{ isset($user->password) ? $user->password : old('password') }}">
 						</div>		
                        
 						<button type="submit" class="btn btn-primary">Update</button>	
 								

 					</div>
 					</form>
 			</section>
 		</div>
 	</div>
 </div>
 </div>

 @endsection