<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$item->title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<div class="container">

    <div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{asset('storage/products/' . $item->image)}}" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text">Цена: {{$item->price}} р.</p>
            <p class="card-text">Страна: {{$item->contry}}</p>
            <p class="card-text">Категория: {{$item->category}}</p>
            <p class="card-text">Ингредиенты: {{$item->ingredients}}</p>
            <p class="card-text">Цена: {{$item->price}} р.</p>
            <p class="card-text">В наличии: {{$item->count}}шт.</p>
        </div>
        </div>
    </div>
    </div>

    <form action="/storetocart?product_id={{$item->id}}" method="POST">
        @csrf
    <div class="row">
        <div class="col-2 ">
            <input type="number" name="count"  class='form-control '  max="{{$item->count}}" id="">
        </div>
        <div class="col-5">
        <input type="submit"  class='form-control' value="Добавить в корзину">

        </div>
    </div>
    </form>
</div>

</body>
</html>