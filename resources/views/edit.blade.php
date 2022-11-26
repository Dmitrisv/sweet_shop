@extends('layouts.main')
@section('title')
<title>Редактирование </title>
@endsection

@section('content')
<div class="container">

    <div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="{{asset('storage/products/' . $item->image)}}" class="img-fluid rounded" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">

        <form action="/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="id">ID</label>
            <input type="text" name="id" class="form-control mb-3 mt-3" value="{{$item->id}}">
            <label for="title">Название</label>
            <input type="text" name='title' class="form-control mb-3 mt-3" value="{{$item->title}}">
            <label for="price">Цена</label>
            <input type="text" name="price" class="form-control mb-3 mt-3" value="{{$item->price}}">
            <label for="contry">Страна</label>
            <input type="text" name="contry" class="form-control mb-3 mt-3" value="{{$item->contry}}">
            <label for="category">Категория</label>
            <input type="text" name="category" class="form-control mb-3 mt-3" value="{{$item->category}}">
            <label for="ingredients">Ингредиенты</label>
            <textarea name="ingredients" class="form-control" id="" cols="30" rows="10">{{$item->ingredients}}</textarea>
            <label for="count">Количество</label>
            <input type="text" name="count" class="form-control mb-3 mt-3" value="{{$item->count}}">
            <input type="submit"  class='form-control' value="Обновить">
        </form>

        </div>
        </div>
    </div>
    </div>


</div>
@endsection