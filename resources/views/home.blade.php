@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                    <a href="{{ route('category.index') }}" class="btn btn-info">All Category</a>
                    <a href="{{ route('subcategory.index') }}" class="btn btn-info">All Subcategory</a>
                    <a href="{{ route('childcategory.index') }}" class="btn btn-info">All Childcategory</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
