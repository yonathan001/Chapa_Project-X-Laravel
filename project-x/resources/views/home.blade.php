<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> CRUD-BY-LARAVEL </h1>
    <div style="border:10px solid #212121;">
        <h2>user registration </h2>
        <form action="/register" method="POST">
            @csrf
          <input type="text" placeholder="name">
          <input type="text" placeholder="email">
          <input type="password" placeholder="password">
          <button> register</button>


        </form>


    </div>
</body>
</html>