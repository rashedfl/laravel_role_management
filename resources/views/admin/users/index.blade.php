@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">All Users</div>

                <div class="card-body">

                	<table class="table table-striped">
                		<thead>
                			<tr>
                				<th>#</th>
                				<th>Name</th>
                				<th>Email</th>
                                <th>Role</th>
                				<th>Action</th>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($users as $user)
                			<tr>
                				<td>{{ $user->id }}</td>
                				<td>{{ $user->name }}</td>
                				<td>{{ $user->email }}</td>
                                <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                				<td>
                                    @can('edit-users')
                					   <a href="{{ route('admin.users.edit', $user->id)}}" class="btn btn-info float-left">Edit</a>
                                    @endcan

                                    @can('delete-user')
                					<form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        
                                    </form>
                                    @endcan
                				</td>
                			</tr>                 
                  			 @endforeach
                			
                		</tbody>
                	</table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
