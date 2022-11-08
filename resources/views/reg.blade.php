<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <center>
        <form action="{{url('/auth/reg')}}" method="post">
        @csrf
        <div><input type="text" name="name" required placeholder="Имя" pattern="[А-я\s]+" id=""></div>
        <div><input type="text" name="surname" required placeholder="Фамилия" id=""></div>
        <div><input type="text" name="patronymic" placeholder="Отчество" id=""></div>
        <div><input type="text" name="username" placeholder="Имя пользователя"  id=""></div>
        <div><input type="email" name="email" placeholder="Email" id=""></div>
        <div><input type="password" name="password" placeholder="Пароль" id=""></div>
        <div><input type="password" name="password_confirmation" placeholder="Повтор пароля" id=""></div>
        <div><input type="checkbox" required >Согласен с правилами регистрации</div>
        <div><input type="submit" value="reg"></div>
        </form>
    </center>
            @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
</body>
</html>