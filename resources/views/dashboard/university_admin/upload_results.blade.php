@extends('layouts.app')
@section('title','Upload Course Result')
@section('content') 
 

    <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
					<div class="col-sm-6">Upload results</div>
				</div>
            </div>

            <div class="panel-body">
                <form action="/post_results" method="POST" role="form" class="form-horizontal" enctype="multipart/form-data">
                    {{csrf_field()}}
            	    <div class="form-group">
                        <label for="file" class="control-label col-sm-2">file name</label>
                        <div class="col-md-6">
                             <input type="file" name="results" class="col-md-6">

                        </div>
               
                    </div>
                    <div class="form-group">
          		        <div class="col-sm-3 col-sm-offset-2">
          			
            	            <button type="submit" class="btn btn-primary">Add task</button>
          		        </div>
                    </div>
                </form>
            </div>
    </div>



@endsection