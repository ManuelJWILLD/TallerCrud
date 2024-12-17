<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Books</h1>

    <div>
        <form action="{{ route('books.store') }}" method="post">
            @csrf

            <label for="tittle">Titulo</label>
            <input type="text" name="tittle" id="tittle">

            <label for="genre">Genero</label>
            <input type="text" name="genre" id="genre">

            <label for="pubdate">Fecha de publicacion</label>
            <input type="date" name="pubdate" id="pubdate">

            <button type="submit">Guardar</button>
        </form>
    </div>    

    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Fecha de Publicacion</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($books as $books)
                <tr>
                    <td>{{ $books->tittle }}</td>
                    <td>{{ $books->genre }}</td>
                    <td>{{ $books->pubdate }}</td>
                    <td>
                        <form action="{{ route('books.destroy', $books->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                        <a href="{{ route('books.edit', $books->id) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
    </table>
</body>

</html>