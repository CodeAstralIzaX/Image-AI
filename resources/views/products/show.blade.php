@extends('layouts.app')
@section('content')
@include('products.layouts')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Product Information
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <label for="code" class="col-md-4 col-form-label text-md-end text-start"><strong>Code:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->code }}
                    </div>
                </div>

                <div class="row">
                    <label for="name" class="col-md-4 col-form-label text-md-end text-start"><strong>Name:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->name }}
                    </div>
                </div>

                <div class="row">
                    <label for="quality" class="col-md-4 col-form-label text-md-end text-start"><strong>Quality:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->quality }}
                    </div>
                </div>

                <div class="row">
                    <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Price:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->price }}
                    </div>
                </div>

                <div class="row">
                    <label for="description" class="col-md-4 col-form-label text-md-end text-start"><strong>Description:</strong></label>
                    <div class="col-md-6" style="line-height: 35px;">
                        {{ $product->description }}
                    </div>
                </div>


                <div class="row">
                    <label for="image" class="col-md-4 col-form-label text-md-end text-start"><strong>Image:</strong></label>
                    <div class="col-md-6">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="max-width: 100%;">
                    </div>
                </div>

            </div>
        </div>
    </div>    
</div>

@endsection
