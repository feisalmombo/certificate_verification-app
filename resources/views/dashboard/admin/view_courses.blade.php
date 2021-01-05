@extends('layouts.app')

@section('content') 
        
<div class="panel panel-primary">
    <div class="panel-heading">Users <span class="badge">{{ $courses->count() }}</span>
    <a href="/admin/create" style="color: white;" class="pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;User</a>
    </div>
 @if(count($courses))
    <div class="panel-body">
       
        <table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>SN</th>
                 <th>Course Code</th>
                 <th>Name</th>
             </tr>
         </thead>
         <tbody>
             
             <tr>
             @foreach($courses as $course)
                 <td>{{ $counts ++ }}</td>
                 <td>{{ $course->course_code }}</td>
                 <td>{{ $course->course_name }}</td>  
             </tr>
            @endforeach
         </tbody>
     </table>
     @else
     <div class="alert alert-info">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <strong>No Admin</strong>
     </div>
     @endif

     {{ $courses->links() }}
 </div>


    @endsection