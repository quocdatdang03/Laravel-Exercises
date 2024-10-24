<h1>Products</h1>
@if (Session::has('success'))
    <p class="text-success">{{ Session::get('success') }}</p>
@endif

@if (Session::has('error'))
    <p class="text-danger">{{ Session::get('error') }}</p>
@endif

<table class="product-table">
    <a class="btn btn-primary" href="{{ route('products.create') }}" style="display:inline-block; margin-bottom: 10px;">Create new product</a>
    <thead>
        <tr>
            <th class="product-header">Name</th>
            <th class="product-header">Description</th>
            <th class="product-header">Price</th>
            <td class="product-header">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr class="product-row">
                <td class="product-cell">{{ $item->name }}</td>
                <td class="product-cell">{{ $item->description }}</td>
                <td class="product-cell">{{ $item->price }}</td>
                <td class="product-cell">
                    <a class="btn btn-primary" href="{{ route('products.show', $item->id) }}">Show details</a>
                     <a class="btn btn-primary"  href="{{ route('products.edit', $item->id) }}">Update</a>
                </td>
            </tr>
        @endforeach 
    </tbody>
</table>


<style>
    .product-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .product-header {
        background-color: #f2f2f2;
        font-weight: bold;
        text-align: left;
        padding: 10px;
        border-bottom: 2px solid #ddd;
    }
    .product-row:nth-child(even) {
        background-color: #f9f9f9;
    }
    .product-cell {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .text-success {
        color : rgb(22, 161, 22);
    }

     .text-danger {
        color : rgb(231, 28, 14);
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
