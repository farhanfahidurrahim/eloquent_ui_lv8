@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Childcatgeory') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('childcategory.create') }}" class="btn btn-danger">Add Childcategory</a>
                    <a href="{{ route('home') }}" class="btn btn-info">Home</a>
                    <br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
						<thead>
					    	<tr>
					      		<th scope="col">#</th>
					      		<th scope="col">Childcategory Name</th>
					      		<th scope="col">Subcategory Name</th>
					      		<th scope="col">Category Name</th>
					      		<th scope="col">Subcategory Slug</th>
					      		<th scope="col">Action</th>
					    	</tr>
					  	</thead>
					  	@foreach($data as $key=>$row)
					  	<tbody>
					    	<tr>
						      	<th scope="row">{{ ++$key }}</th>
						      	<td>{{ $row->childcategory_name }}</td>
						      	<td>{{ $row->subcategory->subcategory_name }}</td>
						      	<td>{{ $row->category->category_name }}</td>
						      	<td>{{ $row->subcategory_slug }}</td>
						      	<td>
						      		<a href="{{ route('childcategory.edit',$row->id) }}" class="btn btn-primary">Edit</a>
						      		<a href="{{ route('childcategory.delete',$row->id) }}" class="btn btn-danger">Delete</a>
						      	</td>
					    	</tr>
					  	</tbody>
					  	@endforeach
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
