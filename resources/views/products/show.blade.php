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
                            <h6 class="card-subtitle mb-4 text-muted">Single Product</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-dark" href="{{ route('products.index') }}">Back to Product</a>
                        </div>
                    </div>
                    <hr>
                    <div class="col-10 mx-auto">
                        <h1>{{ $product->name }}</h1>
                        <p>Product ID: {{ $product->product_id }}</p>
                        <p>Description: {{ $product->description }}</p>
                        <p>Price:{{ $product->price }} Taka </p>
                        <p>Stock: {{ $product->stock }} Pcs</p>
                        @if(substr($product->image, 0, 12) == "https://via.")
                            <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" >
                        @elseif($product->image)
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" >
                        @else
                            <img src="{{ asset('images/placeholder.png') }}" alt="No image available" >
                        @endif
                    </div>
                        <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">Edit</a>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
