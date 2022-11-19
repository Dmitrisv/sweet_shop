<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин Вкусняшки</title>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand">Магазин вкусняшки</a>
    <a class="nav-item me-auto" href='{{ route("about") }}'>
        О нас
</a>
    <form class="d-flex">
        <a href='{{ route("about") }}'>Корзина</a>
    </form>
  </div>
</nav>

    <div class="container">
        <div><h4>Меню</h4></div>
    <form  action="">
        <div class="row mt-3">
            <div class="col">
    <select name="category" class="form-control" id="">
        <option value="" default>Все</option>
        <option value="Первое">Первое</option>
        <option value="Второе">Второе</option>
        <option value="Напитки">Напитки</option>
    </select>  
            </div>
            <div class="col">
                    <select name="sort_by" class="form-control" id="">
        <option value="" default >Все</option>
        <option value="country">Страна</option>
        <option value="title">Имя</option>
        <option value="price">Цена</option>
    </select>
            </div>
            <div class="col">


    <input type="submit" class="form-control" value="Фильтр">

            </div>
        </div>
    </form>
    <div class="row row-cols-3">
        @foreach($posts as $post)
        <div class="col mt-3 mb-3">
        <a href="{{asset('/view/' . $post->id)}}">
        <div class="card h-100">
            <img class="card__photo h-100" src="{{ asset('storage/products/' . $post->image) }}" style="object-fit: cover;" alt="">
        <div class="card__title text-dark ms-1" style='text-decoration: none;'>{{$post->title}}</div>
        </div>
    </a>
        </div>
    @endforeach
    </div>
    </div>
</body>
</html>



