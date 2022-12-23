@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Category') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('category.index') }}" class="btn btn-info">All Category</a>
                    <br>

                    <form action="{{ route('category.update',$cat->id) }}" method="post">
                    	@csrf
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Category Name</label>
					    <input type="text" name="category_name" class="form-control @error('category_name') is-invalid @enderror" Value="{{$cat->category_name}}">
					    	@error('category_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
					  </div>
					  <button type="submit" class="btn btn-primary">Update</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
