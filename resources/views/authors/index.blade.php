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
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $authors->name }}</td>
                    <td>{{ $authors->nacionality }}</td>
                    <td>
                        <form action="{{ route('authors.destroy', $authors->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        <a href="{{ route('authors.edit', $authors->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
    </table>

</body>
</html>