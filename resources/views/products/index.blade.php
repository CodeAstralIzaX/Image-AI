@extends('layouts.app')
@section('content')
@include('products.layouts')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <nav class="sidebar-navigation">
            <ul>
                <li class="{{ request()->is('products*') ? 'active' : '' }}">
                    <a href="{{ route('products.index') }}">
                        <i class="fa-solid fa-chart-line"></i>
                        <span class="tooltip">Dashboard</span>
                    </a>
                </li>

                <li class="{{ request()->is('products/create') ? 'active' : '' }}">
                    <a href="{{ route('products.create') }}">
                        <i class="fa-solid fa-boxes-stacked"></i>
                        <span class="tooltip">Add Products</span>
                    </a>
                </li>
                <li class="{{ request()->is('home') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fa-solid fa-wand-magic"></i>
                        <span class="tooltip">Image AI</span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="card">
            <div class="card-header">Product List</div>
            <div class="card-body">
                <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Product</a>
                <table class="table table-striped table-bordered mx-auto">
                    <thead>
                        <tr>
                            <th scope="col">S#</th>
                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Quality</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $product->code }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->quality }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="img-thumbnail">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Product Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                </table>

                {{ $products->links() }}
            </div>
        </div>

    </div>
</div>

@endsection
