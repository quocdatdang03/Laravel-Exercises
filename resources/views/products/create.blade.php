<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Product</title>
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

        form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
            display: block;
        }

        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            padding: 10px 15px;
            background-color: #3498db;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        .text-danger {
            color : red;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Create New Product</h1>
        
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="productName">Name:</label>
                <input type="text" id="productName" name="name" placeholder="Enter product name">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" placeholder="Enter description"></textarea>
                @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
            
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" placeholder="Enter price">
                @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
                @endif
            </div>
            
            <button type="submit">Create</button>
        </form>
    </div>

</body>
</html>
