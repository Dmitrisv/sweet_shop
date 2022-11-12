<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин Вкусняшки</title>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
</head>

<body>
    @auth
    <form action="">
    <select name="category" id="">
        <option value="" default>Все</option>
        <option value="Первое">Первое</option>
        <option value="Второе">Второе</option>
        <option value="Напитки">Напитки</option>
    </select>    
    <select name="sort_by" id="">
        <option value="" default >Все</option>
        <option value="country">Страна</option>
        <option value="title">Имя</option>
        <option value="price">Цена</option>
    </select>
    <input type="submit" value="Фильтр">
    </form>

    <div class="container">
    @foreach($posts as $post)

    <a href="{{asset('/view/' . $post->id)}}">

    <div class="card">
            <img class="card__photo" src="{{ asset('storage/products/' . $post->image) }}" alt="">

        <div class="card__title">{{$post->title}}</div>

        </div>
    </a>
    @endforeach
    </div>
    @endauth
</body>
</html>



