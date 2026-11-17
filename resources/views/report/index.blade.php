<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Страница заявлений</title>

    
</head>
<body>
    <header>
        Нарушений нет
    </header>
    <main>
        <div>Основная часть</div>
        <a href="{{route('reports.create')}}">Создать заявку</a>
        <br>
        <a href="{{route('reports.store')}}">Страница заявок</a>
        <div class="card-grid">
            @foreach ($reports as $report)
                <div class="card">
                    <p>{{ $report->number }}</p>
                    <p>{{ $report->description }}</p>
                    <p>{{ $report->created_at }}</p>
                </div>

                 <form action="{{ route('reports.destroy', $report->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Удалить">
                </form>
            @endforeach
        </form>
        </div>
    </main>
</body>
</html>