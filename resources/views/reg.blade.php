@extends('layouts.main')
@section('title')
<title>О нас </title>
@endsection

@section('content')
<div class="container">
        <form action="{{url('/auth/reg')}}" method="post">
        @csrf
        <div><input class="form-control mb-2 mt-2" type="text" name="name" required placeholder="Имя" pattern="[А-я\s]+" id=""></div>
        <div><input class="form-control mb-2 mt-2" type="text" name="surname" required placeholder="Фамилия" id=""></div>
        <div><input class="form-control mb-2 mt-2" type="text" name="patronymic" placeholder="Отчество" id=""></div>
        <div><input class="form-control mb-2 mt-2" type="text" name="username" placeholder="Имя пользователя"  id=""></div>
        <div><input class="form-control mb-2 mt-2" type="email" name="email" placeholder="Email" id=""></div>
        <div><input class="form-control mb-2 mt-2" type="password" name="password" placeholder="Пароль" id=""></div>
        <div><input class="form-control mb-2 mt-2" type="password" name="password_confirmation" placeholder="Повтор пароля" id=""></div>
        <div><input type="checkbox" required >Согласен с правилами регистрации</div>
        <div><input class="form-control" type="submit" value="Зарегистрироваться"></div>
        </form>
    <h5 class="text-muted mt-3">Уже зарегестрированны? <a href="{{route('logon')}}">Вход</a></h5>

            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
</div>
@endsection