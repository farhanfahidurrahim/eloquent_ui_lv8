@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Childcategory') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('subcategory.index') }}" class="btn btn-info">All Childcategory</a>
                    <br><br>

                    <form action="{{ route('childcategory.update',$data->id) }}" method="post">
                    	@csrf
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Childcategory Name</label>
					    <input type="text" name="childcategory_name" class="form-control @error('childcategory_name') is-invalid @enderror" Value="{{$data->childcategory_name}}">
					    	@error('childcategory_name')
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
