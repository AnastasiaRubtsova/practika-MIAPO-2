<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Список продуктов</title>
</head>
<body>
    <h1>Список продуктов</h1>
    <a href="{{ route('products.create') }}">Добавить продукт</a>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->name }}</strong>: {{ $product->detail }}
            </li>
        @endforeach
    </ul>
</body>
</html>

