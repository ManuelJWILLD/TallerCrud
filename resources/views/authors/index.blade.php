<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Authors</h1>

    <div>
        <form action="{{route('authors.store')}}" method="post">
                @csrf
            
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">

                <label for="nacionality">Nacionalidad</label>
                <input type="text" name="nacionality" id="nacionality">

                <label for="birth_date">Fecha de Nacimiento</label>
                <input type="date" name="birth_date" id="birth_date">

                <button type="submit">Guardar</button>
        </form>
    </div>

    <h1>Authors</h1>
    <ul>
        @foreach ($authors as $authors)
            <li>{{ $authors->name }}</li>
            <li>{{ $authors->nacionality }}</li>
            <li>{{ $authors->birth_date }}</li>
        @endforeach
    </ul>

</body>
</html>