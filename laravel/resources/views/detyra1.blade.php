<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/created" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $x->id }}">
        <input type="text" name="name" value="{{ $x->name }}"
        <input type="text" name="age" value="{{ $x->age }}">
        <input type="submit" name="btn" value="Perditeso">
    </body>
</html>