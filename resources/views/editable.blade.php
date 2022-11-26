@extends('layouts.main')
@section('title')
<title>Изменение </title>
@endsection

@section('content')

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
        <div class="col mt-5 mb-5">
        <a href="{{asset('/view/' . $post->id)}}">
        <div class="card h-100">
            <img class="card__photo h-100" src="{{ asset('storage/products/' . $post->image) }}" style="object-fit: cover;" alt="">
        <div class="card__title text-dark ms-1" style='text-decoration: none;'>{{$post->title}}

            </div>
        </div>
    </a>
            <div class="card-text mb-3 mt-3">
                    <div class="btn btn-danger me-1"><a class="text-white" href="{{ asset('delete/' . $post->id) }}">Удалить</a></div>
                    <div class="btn btn-primary me-1"><a  class='text-white' href="{{ asset('edit/' . $post->id) }}">
                        Изменить
                    </a></div>
        </div>

        </div>
    @endforeach
    </div>
    </div>
@endsection


