<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Books</title>
</head>

<body>
    <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="tittle" placeholder="Books tittle" value="{{ $book->tittle }}">

        <select name="genre" id="genre">
            <option value="Terror" {{ $book->genre == 'Terror' ? 'selected' : '' }}>Terror</option>
            <option value="Accion" {{ $book->genre == 'Accion' ? 'selected' : '' }}>Acción</option>
            <option value="Drama" {{ $book->genre == 'Drama' ? 'selected' : '' }}>Drama</option>
            <option value="Ciencia Ficcion" {{ $book->genre == 'Ciencia Ficcion' ? 'selected' : '' }}>Ciencia Ficción</option>
        </select>

        <input type="date" name="pubdate" placeholder="Books pubdate" value="{{$book->pubdate }}">
        <button type="submit">Submit</button>
    </form>

</body>

</html>