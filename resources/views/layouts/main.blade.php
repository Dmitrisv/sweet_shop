<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Магазин вкусняшки</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
<ul class="navbar-nav me-auto mb-2 mt-2">
            <li class="nav-item " >
                <a class="nav-link " href='{{ route("menu") }}'>Меню</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link " href='{{ route("about") }}'>О нас</a>
            </li>            
            <li class="nav-item " >
                <a class="nav-link" href='{{ route("location") }}'>Где нас найти</a>
            </li>
</ul>
@auth
    <form class="d-flex">
        <a href='{{ route("cart") }}'>Корзина</a>
    </form>
        <a class="nav-link ms-5 me-2" href='{{ route("profile") }}'>Профиль</a>
        <a class="nav-link ms-5 " href='{{ route("logout") }}'>Выйти</a>
    @endauth
    @guest
    <div class="d-flex">
        <a href='{{ route("reg") }}'>Вход</a>
    </div>
    @endguest
    </div>
  </div>
</nav>



</nav>
    @yield('content')
</body>
</html>