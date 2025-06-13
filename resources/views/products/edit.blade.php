<!DOCTYPE html>
<html>
<head>
    <title>Редактировать продукт</title>
</head>
<body>
    <h1>Редактировать продукт</h1>
    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Название:</label>
        <input type="text" name="name" value="{{ $product->name }}" required><br>
        <label>Описание:</label>
        <textarea name="detail" required>{{ $product->detail }}</textarea><br>
        <button type="submit">Обновить</button>
    </form>
    <a href="{{ route('products.index') }}">Назад к списку</a>
</body>
</html>
