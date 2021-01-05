@extends('layouts.app')
@section('title','Admin Dashboard')
@section('content') 
        
<div class="panel panel-primary">
    <div class="panel-heading">Users <span class="badge">{{ $user->count() }}</span>
    <a href="/admin/create" style="color: white;" class="pull-right"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;User</a>
    </div>
 @if(count($user))
    <div class="panel-body">
       
        <table class="table table-bordered table-hover">
         <thead>
             <tr>
                 <th>SN</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Created at</th>
                 <th >Updated at</th>
             </tr>
         </thead>
         <tbody>
             
             <tr>
             @foreach($user as $users)
                 <td>{{ $counts ++ }}</td>
                 <td>{{ $users->name }}</td>
                 <td>{{ $users->email }}</td>
                 <td>{{ $users->created_at->diffForHumans() }}

                 </td>
                 <td>{{ $users->updated_at->diffForHumans() }}

                 </td>
                  
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

     {{ $user->links() }}
 </div>


    @endsection