@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-6">
        <div class="row justify-content-center">
            <h1 class="pr-2">Products</h1>
        </div>
        
        <div class="row justify-content-center">
            <div class="table-responsive col-6">
                <table class="table align-items-center">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Categories</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->categories()->pluck('name')->implode(', ') }}</td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>        
        </div>
    </div>

    <div class="col-3">
        @include('products.create')
    </div>
</div>

@endsection
