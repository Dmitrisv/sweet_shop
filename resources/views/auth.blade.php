@extends('layouts.main')
@section('title')
<title>Авторизация </title>
@endsection

@section('content')
<div class="container">
        <form action="{{url('/auth/login')}}" method="POST">
    @csrf
    <input class="form-control mt-2 mb-2 " placeholder="Имя пользователя" type="text" name="username" id="">
    <input class="form-control mt-2 mb-2 " placeholder="Пароль" type="password" name="pass" id="">
    <h5 class="text-muted mt-3">Нет аккаунта?<a href="{{route('reg')}}">Регистрация</a></h5>
    <input class="form-control mt-2 mb-2 " type="submit" value="Вход">
    </form>
</div>
@endsection