<div class="container mb-4">
    <div class="row justify-content-center">
        <h1 class="pr-2">Categories</h1>
    </div>

    <div class="row justify-content-center">
        <form method="POST" action="/categories">
            @csrf
            
            <div class="row">
                <div class="col-10">
                    <input class="form-control" type="text" name="name" placeholder="Category Name">
                </div>
                <div class="col-2">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </div>
        </form>
    </div>
</div>