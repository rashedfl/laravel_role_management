@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Users</div>

                <div class="card-body">

                	<table class="table table-striped">
                		<thead>
                			<tr>
                				<th>#</th>
                				<th>Name</th>
                				<th>Email</th>
                				<th>Action</th>
                			</tr>
                		</thead>
                		<tbody>
                			@foreach($users as $user)
                			<tr>
                				<td>{{ $user->id }}</td>
                				<td>{{ $user->name }}</td>
                				<td>{{ $user->email }}</td>
                				<td>
                					<a href="" class="btn btn-info">Edit</a>
                					<a href="" class="btn btn-danger">Delete</a>
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
