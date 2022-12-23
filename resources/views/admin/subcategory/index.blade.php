@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Subcatgeory') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('subcategory.create') }}" class="btn btn-info">Add Subcategory</a>
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
						      	<td>{{ $row->subcategory_name }}</td>
						      	<td>{{ $row->category->category_name }}</td>
						      	<td>{{ $row->subcategory_slug }}</td>
						      	<td>
						      		<a href="{{ route('subcategory.edit',$row->id) }}" class="btn btn-primary">Edit</a>
						      		<a href="{{ route('category.delete',$row->id) }}" class="btn btn-danger">Delete</a>
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
