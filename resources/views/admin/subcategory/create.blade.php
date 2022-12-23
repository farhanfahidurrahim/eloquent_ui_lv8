@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Subcategory') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('subcategory.index') }}" class="btn btn-info">All Subcategory</a>
                    <br><br>

                    <form action="{{ route('subcategory.store') }}" method="post">
                    	@csrf
                      <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Category</label>
					    <select class="form-control" name="category_id" required>
					    	<option disabled selected value="">Choose a catgeory</option>
					    	@foreach($cat as $row)
					    		<option value="{{$row->id}}">{{ $row->category_name }}</option>
					    	@endforeach
					    </select>
					  </div>

					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Subcategory Name</label>
					    <input type="text" name="subcategory_name" class="form-control @error('subcategory_name') is-invalid @enderror" placeholder="Subcategory Name">
					    	@error('subcategory_name')
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
