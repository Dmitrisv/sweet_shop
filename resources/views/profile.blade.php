<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Профиль</title>
</head>
<body>
    @auth

    <div class="username">Имя пользователя: {{$user->username}}</div>
    <div class="fio">ФИО: {{$user->surname}} {{$user->name}} {{$user->patronymic}} </div>
    <div class="email">Ваша электронная почта: {{$user->email}}</div>
    <div class="created_at  ">Аккаунт создан в: {{$user->created_at}}</div>
    @endauth
</body>
</html>