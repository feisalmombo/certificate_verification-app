@extends('layouts.app')
@section('title','registered faculties');
@section('content') 
        
<div class="panel panel-primary">
    <div class="panel-heading">Faculties <span class="badge">{{ $faculties->count() }}</span>
    </div>
 @if(count($faculties))
    <div class="panel-body">
       
        <table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>SN</th>
                 <th>Faculty Code</th>
                 <th>Faculty Name</th>
                 <th>University</th>
             </tr>
         </thead>
         <tbody>
             
             <tr>
             @foreach($faculties as $faculty)
                 <td>{{ $counts ++ }}</td>
                 <td>{{ $faculty->faculty_code }}</td>
                 <td>{{ $faculty->faculty_name }}</td>
                 <td>{{ $faculty->university_id }} </td>
                
                  
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

     {{ $faculties->links() }}
 </div>


    @endsection