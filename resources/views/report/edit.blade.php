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
        <form method="POST" action="{{route('reports.update', $report->id)}}">
            @csrf
            @method('put')
        </form>
    </main>
</body>
</html>