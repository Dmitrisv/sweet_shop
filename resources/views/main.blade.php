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
        <option value="" default ></option>
        <option value="Первое">Первое</option>
        <option value="Второе">Второе</option>
        <option value="Напитки">Напитки</option>
    </select>    
    <select name="sort_by" id="">
        <option value="" default ></option>
        <option value="country">Страна</option>
        <option value="title">Имя</option>
        <option value="price">Цена</option>
    </select>
    <input type="submit" value="Фильтр">
    </form>

    <div class="grid_container">
    @foreach($posts as $post)

    
    <a href="{{asset('/view/' . $post->id)}}">
                <div class="grid_item">
            <div class="product">
        <div class="product__img">
            <img class="img__product" src="{{ asset('storage/products/' . $post->image) }}" alt="">
        <div class="product__title">{{$post->title}}</div>
        </div>        
    </div>
        </div>
    </a>
    
    @endforeach

    </div>

    @endauth
</body>
</html>