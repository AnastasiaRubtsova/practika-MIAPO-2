<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Список продуктов</title>
</head>
<body>
    <h1>Список продуктов</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}">Добавить продукт</a>

    @if($products->isEmpty())
        <p>Нет продуктов для отображения.</p>
    @else
        <ul>
            @foreach ($products as $product)
                <li>
                    <strong>{{ $product->name }}</strong>: {{ $product->detail }}
                    <a href="{{ route('products.edit', $product->id) }}">Редактировать</a>
                    
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Удалить продукт?')">Удалить</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

</body>
</html>
