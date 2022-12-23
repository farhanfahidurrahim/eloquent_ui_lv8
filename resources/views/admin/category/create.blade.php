@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Category') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('category.index') }}" class="btn btn-info">All Category</a>
                    <br>

                    <form action="{{ route('category.store') }}" method="post">
                    	@csrf
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Category Name</label>
					    <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" placeholder="Category Name">
					    	@error('category_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
