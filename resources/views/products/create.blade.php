<div class="container">
    <div class="row justify-content-center">
        <h1 class="pr-2">Add Product</h1>
    </div>

    <div class="row justify-content-center">
        <form method="POST" action="/products">
            @csrf
        
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Product</label>
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
        
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>