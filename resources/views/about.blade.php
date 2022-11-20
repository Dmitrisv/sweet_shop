@extends('layouts.main')
@section('title')
<title>О нас </title>
@endsection

@section('content')
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
@endsection