@extends('layouts.app')
@section('title','students records');
@section('content') 
        
<div class="panel panel-primary">
    <div class="panel-heading">Student Records <span class="badge">{{ $records->count() }}</span>
    </div>
 @if(count($records))
    <div class="panel-body">
       
        <table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>SN</th>
                 <th>First Name</th>
                 <th>Middle Name</th>
                 <th>Last Name</th>
                 <th>GPA</th>
             </tr>
         </thead>
         <tbody>
             
             <tr>
             @foreach($records as $record)
                 <td>{{ $counts ++ }}</td>
                 <td>{{ $record->first_name }}</td>
                 <td>{{ $record->middle_name }}</td>
                 <td>{{ $record->last_name }} </td>
                 <td>{{ $record->gpa }} </td>
                
                  
             </tr>
            @endforeach
         </tbody>
     </table>
     @else
     <div class="alert alert-info">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
         <strong>No Student record available</strong>
     </div>
     @endif

     {{ $records->links() }}
 </div>


    @endsection