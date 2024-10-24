<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .product-field {
            margin: 15px 0;
        }

        .product-field label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .product-field p {
            margin: 0;
            font-size: 18px;
            color: #000;
        }

        .price {
            color: #e74c3c;
            font-size: 24px;
        }

        .btn-secondary {
            background-color: #545658;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }
        .btn-primary:hover {
            background-color: #363738;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Product Details</h1>
        
        <div class="product-field">
            <label for="productName">Name:</label>
            <p id="productName">{{ $product->name }}</p>
        </div>
        
        <div class="product-field">
            <label for="description">Description:</label>
            <p id="description">{{ $product->description }}</p>
        </div>
        
        <div class="product-field">
            <label for="price">Price:</label>
            <p id="price" class="price">{{ $product->price }}</p>
        </div>

         <a class="btn btn-secondary" 
            href="{{ route('products.index') }}">
            Back to list
        </a>
    </div>

</body>
</html>
