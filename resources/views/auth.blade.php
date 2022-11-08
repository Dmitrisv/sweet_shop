<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
</head>
<body>
    <form action="{{url('/auth/login')}}" method="POST">
    @csrf
    <input type="text" name="username" id="">
    <input type="password" name="pass" id="">
    <input type="submit" value="Вход">
    </form>
</body>
</html>