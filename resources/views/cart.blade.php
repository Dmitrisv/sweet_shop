@extends('layouts.main')
@section('title')
<title>Корзина </title>
@endsection

@section('content')
    @auth
    <div class="container">
        <h5 class="mt-3 mb-3">Корзина</h5>
    @foreach($cart as $item)

    <div>{{$item->title}} - {{$item->pivot->count}} шт.</div>
    @endforeach 

    </div>
    @endauth
    @guest
    <div>Сначало авторизируйтесь</div>
    @endguest
@endsection