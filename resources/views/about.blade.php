<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
</head>
<body>
<div class="container">
        <center><h4>О нас</h4></center>

<img src="{{asset('/img/logo.png')}}" alt="">

<div><h3>Наш девиз</h3></div>
<div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusantium provident, velit asperiores molestiae aut dolorum autem incidunt. Ipsam, at?</p></div>
    <div ><h4>Последние добавленные блюда</h4></div>
</div>
<div class="container">

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        @foreach($posts as $post)
        <div class="swiper-slide">
        <div class="card-flush">
        <img src="{{ asset('storage/products/' . $post->image) }}" class="card-img-top "  alt="...">
        <div class="card-body">
            
            <center><h5 class="card-title">{{$post->title}}</h5></center>
        </div>
        </div>
      </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        loop:true,
      });
    </script>
</body>
</html>