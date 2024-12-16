<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Category Name">
        <input type="text" name="description" placeholder="Category Description">
        <button type="submit">Submit</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $books)
                <tr>
                    <td>{{ $books->tittle }}</td>
                    <td>{{ $books->pubdate }}</td>
                    <td>{{ $books->genre }}</td>
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