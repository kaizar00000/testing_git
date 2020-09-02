@extends('backendtemplate')
@section('contend')
<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Category List</h1>
			</div>
			</div>
			<div class="row">
				<div class="col-lg-10 ">
					<a href="{{route('categories.create')}}" class="btn btn-secondary float-right">Add New </a>
				</div>
			</div>
			<div class="container">
			<div class="row">
			<div class="col-md-12">
			<table  class="table table-bordered">
				<thead>
					<tr>
						<td>N0</td>
						<td>Name</td>
						<td>Photo</td>
				        <td>Action</td>
				       
					</tr>
				</thead>
				<tbody>
					@php $i=1; @endphp
					@foreach($categories as $category)
					<tr>
						<td>1</td>
						<td>{{$category->name}}</td>
					 	<td><img src="{{asset($category->photo)}}" width="300px" height="300px"> </td>
						<td><a href="" class="btn btn-warning">Detail</a>
							<a href="{{route('categories.edit',$category->id)}}" class="btn btn-dark">Edit</a>
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
@endsection
                