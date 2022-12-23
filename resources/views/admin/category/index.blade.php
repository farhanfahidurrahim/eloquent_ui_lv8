@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Catgeory') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('category.create') }}" class="btn btn-info">Add Category</a>
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
					      		<th scope="col">Category Name</th>
					      		<th scope="col">Category Slug</th>
					      		<th scope="col">Action</th>
					    	</tr>
					  	</thead>
					  	@foreach($cat as $key=>$row)
					  	<tbody>
					    	<tr>
						      	<th scope="row">{{ ++$key }}</th>
						      	<td>{{ $row->category_name }}</td>
						      	<td>{{ $row->category_slug }}</td>
						      	<td>
						      		<a href="{{ route('category.edit',$row->id) }}" class="btn btn-primary">Edit</a>
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
