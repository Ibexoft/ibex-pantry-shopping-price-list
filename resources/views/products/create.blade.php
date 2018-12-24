@extends('layouts.app')

@section('content')

<div class="container">
        
    <h1>Create Product</h1>

    <form method="POST" action="/products">
        @csrf
    
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Sugar" required>
            </div>
        </div>

        <div class="form-group row">
            <label for="categories" class="col-sm-2 col-form-label">Categories</label>
            <div class="col-sm-10">
                <select multiple class="form-control" id="categories" name="categories[]" required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- <div class="form-group row">
            <label for="unit" class="col-sm-2 col-form-label">Unit</label>
            <div class="col-sm-10">
                <select class="form-control" id="unit" name="unit" required>
                    <option value=""></option>
                    <option value="g">g</option>
                    <option value="kg">kg</option>
                    <option value="dozen">Dozen</option>
                    <option value="pc">Piece</option>
                    <option value="carton">Carton</option>
                    <option value="Litre">Litre</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
        </div> --}}
    
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>
    </form>
</div>

@endsection
