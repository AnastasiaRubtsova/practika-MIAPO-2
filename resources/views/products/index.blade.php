<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Список продуктов</h1>
    <a href="{{ route('products.create') }}">Добавить продукт</a>
    <ul>
        @foreach ($products as $product)
            <li>
                {{ $product->name }} - {{ $product->detail }}
                <a href="{{ route('products.show', $product->id) }}">Подробнее</a>
                <a href="{{ route('products.edit', $product->id) }}">Редактировать</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
