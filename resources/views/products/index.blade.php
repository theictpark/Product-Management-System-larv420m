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
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h5 class="card-title my-3">Product Management System</h5>
                            <h6 class="card-subtitle mb-4 text-muted">Product List</h6>
                        </div>
                        <div class="col-6 text-end">
                            <a class="btn btn-success" href="{{ route('products.create') }}">Create</a>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-4">
                            <strong>Sort by:</strong>
                                <form method="GET" action="{{ route('products.index') }}">
                                    <select class="form-select" name="sort_by" id="sort_by" onchange="this.form.submit()">
                                        <option value="" disabled selected>Select</option>
                                        <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name: (a - z) </option>
                                        <option value="price" {{ request('sort_by') == 'price' ? 'selected' : '' }}>Price: low - high </option>
                                    </select>
                                </form>
                        </div>
                        <div class="col-4"> </div>
                        <div class="col-4">
                            <strong>Search in:</strong>
                            <form method="GET" action="{{ route('products.index') }}">
                                <div class="row">
                                    <div class="col-9">
                                        <input class="form-control" value="{{ old('search') }}" type="text" name="search" placeholder="Search by product ID or description">
                                    </div>
                                    <div class="col-2">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table table-striped table-hover mt-4">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Stocks</th>
                            <th style="width: 20%" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->product_id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>
                                    @if(substr($product->image, 0, 12) == "https://via.")
                                        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" style="width: 100px; height: auto;">
                                    @elseif($product->image)
                                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" style="width: 100px; height: auto;">
                                    @else
                                        <img src="{{ asset('images/placeholder.png') }}" alt="No image available" style="width: 100px; height: auto;">
                                    @endif
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">View</a>
                                    <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to remove this item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}

                </div>
            </div>
        </div>
    </div>
</div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>


