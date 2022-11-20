@extends('layouts.main')
@section('title')
<title>{{$item->title}} </title>
@endsection

@section('content')
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
@endsection