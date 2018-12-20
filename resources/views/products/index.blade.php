@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h1 class="pr-2">Products</h1>
        <a class="btn btn-sm btn-primary pt-2 my-2" href="/products/create">Add</a>
    </div>
    
    <div class="row justify-content-center">
        <div class="table-responsive col-6">
            <table class="table align-items-center">
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>
</div>

@endsection
