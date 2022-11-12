<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">

</head>
<body>
    <center><h4>О нас</h4></center>

<img src="{{asset('/img/logo.png')}}" alt="">

<div><h3>Наш девиз</h3></div>
<div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem accusantium provident, velit asperiores molestiae aut dolorum autem incidunt. Ipsam, at?</p></div>

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
    <div style="margin-left: 3rem;"><h4>Последние добавленные блюда</h4></div>
</body>
</html>