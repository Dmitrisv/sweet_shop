<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$item->title}}</title>
</head>
<body>
    <img src="{{asset('storage/products/' . $item->image)}}" alt="">
    <h3>{{$item->title}}</h3>
    <h4>Цена: {{$item->price}} р.</h4>
    <h4>Страна: {{$item->contry}}</h4>
    <h4>Категория: {{$item->category}}</h4>
    <h4>Ингредиенты: {{$item->ingredients}}</h4>
    <h4>В наличии: {{$item->count}}шт.</h4>
    <form action="" method="">
        <input type="number" name="count" max="{{$item->count}}" id="">
        <input type="submit" value="Добавить в корзину">
    </form>
</body>
</html>