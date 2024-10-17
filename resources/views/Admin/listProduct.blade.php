<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>

    @if($products->count() > 0)  <!-- Use $products (lowercase) -->
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Volume</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created At</th>
            </tr>
            @foreach ($products as $product)  <!-- Use $products (lowercase) -->
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->type }}</td>
                    <td>{{ $product->volume}}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity}}</td>
                    <td>{{ $product->created_at }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No products found!</p>
    @endif
</body>
</html>
