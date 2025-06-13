<!DOCTYPE html>
<html>
<head>
    <title>Детальная информация о продукте</title>
</head>
<body>
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->detail }}</p>
    <a href="{{ route('products.index') }}">Назад к списку</a>
</body>
</html>
