<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $page_title;?></title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stlyesheet">

    <style>
        </style>
</head>
<body>
<h1>{{$page_title}}</h1>
<br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Real Name</th>
                <th>Gender</th>
                <th>Universe ID</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach($men as $hero)
            <tr>
                <td>{{ $hero->Id}}</td>
                <td>{{ $hero->Nombre}}</td>
                <td>{{ $hero->Real_name}}</td>
                <td>{{ $hero->Gender}}</td>
                <td>{{ $hero->Universe_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>

<a href="{{route('welcome')}}"> Ir al inicio </a>
<br>
<a href="{{route('example')}}"> Ir a example </a>


</body>
</html>