<div class="container mb-4">
    <div class="row justify-content-center">
        <h1 class="pr-2">Add Price</h1>
    </div>

    <div class="row justify-content-center">
        <form method="POST" action="/prices">
            @csrf
            
            <div class="form-group row">
                <label for="product" class="col-sm-2 col-form-label">Product</label>
                <div class="col-sm-10">
                    <select class="form-control" id="product_id" name="product_id" required>
                        <option value=""></option>
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="unit" class="col-sm-2 col-form-label">Unit</label>
                <div class="col-sm-10">
                    <select class="form-control" id="unit" name="unit" required>
                        <option value=""></option>
                        <option value="gram">Gram</option>
                        <option value="kilogram">Kilogram</option>
                        <option value="dozen">Dozen</option>
                        <option value="piece">Piece</option>
                        <option value="carton">Carton</option>
                        <option value="litre">Litre</option>
                        <option value="small">Small</option>
                        <option value="medium">Medium</option>
                        <option value="large">Large</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="store" class="col-sm-2 col-form-label">Store</label>
                <div class="col-sm-10">
                    <select class="form-control" id="store_id" name="store_id" required>
                        <option value=""></option>
                        @foreach ($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="price" name="price" step=".01" required>
                </div>
            </div>
        
            <div class="form-group row">
                <button class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>
    </div>
</div>
