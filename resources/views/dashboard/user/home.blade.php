@extends('layouts.app')
@section('title','dashboard');
@section('content') 
        
    <div class="panel panel-primary">
        <div class="panel-heading">Enter candidates Number to verify</div>
    
        <div class="panel-body">
            <form action="/users/verify" method="post" class="form form-horizontal" >
                @csrf
                <div class="form-group col-lg-6">
 						<label>Index Number</label>
 							<input type="" name="name" class="form-control" id="" >
 						</div>

 						<div class="form-group col-lg-6 pull-right">
 							<label>University</label>
                             <select name="university" id="" class="form-control" >
                                <option value="">...select university...</option>
                                @foreach($universities as $university)
                                    <option value="{{$university->id}}">{{$university->name}}</option>
                                @endforeach
                             </select>
 						</div>
                         <div class="form-group col-lg-4">
 						<button type="submit" class="btn btn-primary btn-lg">verify</button>	

                         </div>
 							
 					</div>
 					</form>
        </div>
    </div>

 @endsection