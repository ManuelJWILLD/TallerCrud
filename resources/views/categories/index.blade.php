<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Categories</h1>

    <div>
        <form action="{{route('categories.store')}}" method="post">
                @csrf
            
                <label for="name">Name</label>
                <input type="text" name="name" id="name">

                <label for="nationality">Nacionalidad</label>
                <input type="text" name="nationality" id="nationality">

                <label for="birth_day">Fecha de Nacimiento</label>
                <input type="date" name="birth_day" id="birth_day">

                <button type="submit">Guardar</button>
        </form>
    </div>

    <h1>Categories</h1>
    <ul>
        @foreach ($categories as $categories)
            <li>{{ $categories->name }}</li>
        @endforeach
    </ul>

</body>
</html>