<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить товар | Вкусняшки</title>
</head>
<body>
    @auth
<form action="{{url('/add_item')}}" method="POST"  enctype="multipart/form-data">
    @csrf
    <div><input type="text" name="title" placeholder="Название" id=""></div>
    <div><input type="number" name="price" placeholder="Цена" min=0 id=""></div>
    <div><input type="number" name="count" placeholder="Количество" min=0 id=""></div>
    <div><input type="text" name="contry" placeholder="Страна" id=""></div>
    <!-- <div><input type="text" name="category" placeholder="Категория" id=""></div> -->
    <select name="category" id="">
        <option value="Первое">Первое</option>
        <option value="Второе">Второе</option>
        <option value="Напитки">Напитки</option>
    </select>
    <textarea name="ingredients" id="" cols="50" placeholder="Ингредиенты" rows="10"></textarea>
    <input type="file" name="photo" id="">
    <input type="submit" value="Добавить">
</form>
@endauth
</body>
</html>