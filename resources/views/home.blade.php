<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Главная</title>

    
</head>
<body>
    <header>
        <a href="/home">Главная</a>
        <a href="/array">Каталог</a>
    </header>
    <main>
        <div class="home_title">Мемо<span class="main_sp">Shop</span></div>
        <div >
            <img class="home_pic" src="{{ Vite::asset('resources/images/vasya.jpg') }}" alt="">
        </div>
    </main>
</body>
</html>