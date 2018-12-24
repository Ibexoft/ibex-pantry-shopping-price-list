@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-6">
        <div class="row justify-content-center">
            <h1 class="pr-2">Product Prices</h1>
        </div>
        
        <div class="row justify-content-center">
            <div class="table-responsive col-6">
                <table class="table align-items-center">
                    <tbody>
                        @foreach ($prices as $price)
                            <tr>
                                <td>{{ $price->product->name }}</td>
                                <td>{{ $price->variant->quantity }}</td>
                                <td>{{ $price->variant->unit }}</td>
                                <td>{{ $price->store->name }}</td>
                                <td>{{ $price->price }}</td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>        
        </div>
    </div>

    <div class="col-3">
        @include('prices.create')
    </div>
</div>

@endsection
