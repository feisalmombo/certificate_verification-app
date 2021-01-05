@extends('layouts.app')

@section('content') 
        
<div class="panel panel-primary">
    <div class="panel-heading">universities <span class="badge">{{ $universities->count() }}</span>
    </div>
 @if(count($universities))
    <div class="panel-body">
       
        <table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>SN</th>
                 <th>Name</th>
             </tr>
         </thead>
         <tbody>
             
             <tr>
             @foreach($universities as $university)
                 <td>{{ $counts ++ }}</td>
                 <td>{{ $university->name }}</td>
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

     {{ $universities->links() }}
 </div>


    @endsection