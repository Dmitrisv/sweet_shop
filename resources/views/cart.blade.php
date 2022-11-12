<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @auth
    @foreach($cart as $item)

    <div>{{$item->title}} - {{$item->pivot->count}} шт.</div>
    @endforeach

    @endauth
    @guest
    <div>Сначало авторизируйтесь</div>
    @endguest
</body>
</html>