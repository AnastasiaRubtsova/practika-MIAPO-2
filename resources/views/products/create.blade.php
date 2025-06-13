<!-- resources/views/products/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Создание продукта</title>
</head>
<body>
    <h1>Создать продукт</h1>

    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Название:</label>
        <input type="text" name="name" required><br>
        <label>Описание:</label>
        <textarea name="detail" required></textarea><br>
        <button type="submit">Сохранить</button>
    </form>
</body>
</html>
