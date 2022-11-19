<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить товар | Вкусняшки</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
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
</body>
</html>