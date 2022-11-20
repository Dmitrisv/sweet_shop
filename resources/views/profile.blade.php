@extends('layouts.main')
@section('title')
<title>О нас </title>
@endsection

@section('content')
    @auth

    <div class="username">Имя пользователя: {{$user->username}}</div>
    <div class="fio">ФИО: {{$user->surname}} {{$user->name}} {{$user->patronymic}} </div>
    <div class="email">Ваша электронная почта: {{$user->email}}</div>
    <div class="created_at  ">Аккаунт создан в: {{$user->created_at}}</div>
    @endauth
@endsection