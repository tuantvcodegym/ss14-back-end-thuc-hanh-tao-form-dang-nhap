<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Dang nhap</h1>
<form method="POST">
    {{ csrf_field() }}

    <input type="text" name="username" placeholder="username">

    <p>
        <input type="password" name="password" placeholder="password">
    </p>
    <p>
        <button type="submit">Dang nhap</button>
    </p>
</form>
</body>
</html>
