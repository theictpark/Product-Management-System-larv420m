<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Product Management System</title>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card p-5">
                <!-- error message -->
                @include('component.alert')
                <!-- error message -->
                <div class="card-body ">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title my-3">Product Management System</h5>
                            <h6 class="card-subtitle mb-4 text-muted">{{ isset($product) ? 'Update Product' : 'Create Product' }}</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-dark" href="{{ route('products.index') }}">Back to Product</a>
                        </div>
                    </div>
                    <hr>
                    <div class="col-10 mx-auto">
                        <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if(isset($product))
                                @method('PUT')
                            @endif

                            <label for="formProduct_id" class="my-2 form-label"><strong> Product ID</strong></label>
                            <input class="form-control" id="formProduct_id" type="text" name="product_id" value="{{ old('product_id', $product->product_id ?? '') }}" >
                            @error('product_id')<div class="mt-2 text-danger">{{ $message }}</div>@enderror

                            <label for="formName" class="my-2 form-label"><strong> Name</strong></label>
                            <input class="form-control" id="formName" type="text" name="name" value="{{ old('name', $product->name ?? '') }}" >
                            @error('name')<div class="mt-2 text-danger">{{ $message }}</div>@enderror

                            <label for="formDescription" class="my-2 form-label"><strong> Description</strong></label>
                            <textarea class="form-control" id="formDescription" name="description">{{ old('description', $product->description ?? '') }}</textarea>
                            @error('description')<div class="mt-2 text-danger">{{ $message }}</div>@enderror

                            <label for="formPrice" class="my-2 form-label"><strong> Price</strong></label>
                            <input class="form-control" id="formPrice" type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" >
                            @error('price')<div class="mt-2 text-danger">{{ $message }}</div>@enderror

                            <label for="formStock" class="my-2 form-label"><strong> Stock</strong></label>
                            <input class="form-control" id="formStock" type="number" name="stock" value="{{ old('stock', $product->stock ?? '') }}">
                            @error('stock')<div class="mt-2 text-danger">{{ $message }}</div>@enderror

                            <label for="formFile" class="my-2 form-label"><strong>Image</strong></label>
                            <input class="form-control" type="file" id="formFile" name="image">
                            @error('image')<div class="mt-2 text-danger">{{ $message }}</div>@enderror

                            <div class="d-grid gap-2 col-4">
                                <button type="submit" class="{{ isset($product) ? 'btn btn-success' : 'btn btn-primary' }} my-5">{{ isset($product) ? 'Update' : 'Create' }}</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
