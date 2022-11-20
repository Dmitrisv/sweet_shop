@extends('layouts.main')
@section('title')
<title>Добавить товар</title>
@endsection

@section('content')
    @auth
    <center>Добавить товар</center>
<div class="container">
    <form action="{{url('/add_item')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div><input class="form-control mt-2" type="text" name="title" required placeholder="Название" id=""></div>
    <div><input class="form-control mt-2" type="number" name="price" required placeholder="Цена" min=0 id=""></div>
    <div><input class="form-control mt-2" type="number" name="count" required placeholder="Количество" min=0 id=""></div>
    <div><input class="form-control mt-2" type="text" name="contry" required placeholder="Страна" id=""></div>
    <!-- <div><input type="text" name="category" placeholder="Категория" id=""></div> -->
    <select required name="category" class="form-control mt-2" id="">
        <option value="Первое">Первое</option>
        <option value="Второе">Второе</option>
        <option value="Напитки">Напитки</option>
    </select>
    <textarea required class="form-control mt-2" name="ingredients" id="" cols="50" placeholder="Ингредиенты" rows="10"></textarea>
    <input type="file" class="form-control mt-2"  required name="photo" id="">
    <input type="submit" class="form-control btn mt-3 btn-success" value="Добавить">
</form>
</div>
@endauth
@endsection