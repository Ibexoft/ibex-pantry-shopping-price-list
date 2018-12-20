@extends('layouts.app')

@section('content')

<div class="container">
        
    <h1>Create Product</h1>

    <form method="POST" action="/products">
        @csrf
        
        <div class="row">
            <div class="col-4">
                <input class="form-control" type="text" name="name" placeholder="Product Name">
            </div>
            <div class="col-8">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </div>
    </form>
</div>

@endsection
