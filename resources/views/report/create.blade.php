<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Создание заявки</title>

    
</head>
<body>
    <header>
        <a href="/home">Главная</a>
        <a href="/array">Каталог</a>
    </header>
    <main>
        <div>Основная часть</div>
        <a href="{{ route('reports.store') }}">Страница заявок</a>
        <br>
        <form method="POST" action="{{route('reports.store')}}">
            @csrf
            <input name="number" type="text" placeholder="Номер авто">
            <br>
            <input name="description" placeholder="Описание нарушения"></input>
            <br>
            <button type="submit">Отправить заявку</button>
        </form>
    </main>
</body>
</html>