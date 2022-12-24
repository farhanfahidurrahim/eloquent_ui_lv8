@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Subcategory') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('subcategory.index') }}" class="btn btn-info">All Childcategory</a>
                    <br><br>

                    <form action="{{ route('childcategory.store') }}" method="post">
                    	@csrf
                      <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Childcategory</label>
					    <select class="form-control" name="subcategory_id" required>
					    	<option disabled selected value="">Choose a catgeory / subcategory</option>
					    	@foreach($cat as $row)
					    		@php
					    			$subcat=DB::table('subcategories')->where('category_id',$row->id)->get();
					    		@endphp
					    		<option disabled>{{ $row->category_name }}</option>
					    		@foreach($subcat as $row)
					    			<option value="{{$row->id}}">--{{ $row->subcategory_name }}</option>
					    		@endforeach
					    	@endforeach
					    </select>
					  </div>

					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Childcategory Name</label>
					    <input type="text" name="childcategory_name" class="form-control @error('childcategory_name') is-invalid @enderror" placeholder="Childcategory Name">
					    	@error('childcategory_name')
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
