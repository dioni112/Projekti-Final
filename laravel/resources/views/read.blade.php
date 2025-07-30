<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Te gjitha rekordet</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Mosha</th>
        </tr>
        @foreach($x as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->age }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>