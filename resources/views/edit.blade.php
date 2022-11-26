@extends('layouts.main')
@section('title')
<title>Редактирование </title>
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

        <form action="/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="id" class="form-control mb-3 mt-3" value="{{$item->id}}">
            <input type="text" name='title' class="form-control mb-3 mt-3" value="{{$item->title}}">
            <input type="text" name="price" class="form-control mb-3 mt-3" value="{{$item->price}}">
            <input type="text" name="contry" class="form-control mb-3 mt-3" value="{{$item->contry}}">
            <input type="text" name="category" class="form-control mb-3 mt-3" value="{{$item->category}}">
            <input type="text" name="ingredients" class="form-control mb-3 mt-3" value="{{$item->ingredients}}">
            <input type="text" name="price" class="form-control mb-3 mt-3" value="{{$item->price}}">
            <input type="text" name="count" class="form-control mb-3 mt-3" value="{{$item->count}}">
           
            <input type="submit"  class='form-control' value="Обновить">


        </form>

        </div>
        </div>
    </div>
    </div>


</div>
@endsection