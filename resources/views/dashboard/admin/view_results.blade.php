@extends('layouts.app')

@section('content') 
        
<div class="panel panel-primary">
    <div class="panel-heading">universities <span class="badge">{{ $results->count() }}</span>
    </div>
 @if(count($results))
    <div class="panel-body">
       
        <table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>SN</th>
                 <th>Student Id</th>
                 <th>Course Id</th>
                 <th>Grade</th>
                 <th>Semester</th>
                 <th>Year</th>
             </tr>
         </thead>
         <tbody>
             
             <tr>
             @foreach($results as $result)
                 <td>{{ $counts ++ }}</td>
                 <td>{{ $result->university_student_id }}</td>
                 <td>{{ $result->course_id }}</td>
                 <td>{{ $result->grade }}</td>
                 <td>{{ $result->semester }}</td>
                 <td>{{ $result->year_studied }}</td>
             </tr>
            @endforeach
         </tbody>
     </table>
     @else
     <div class="alert alert-info">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <strong>No Faculty registered</strong>
     </div>
     @endif

     {{ $results->links() }}
 </div>


    @endsection