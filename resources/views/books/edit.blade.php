<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('books.update', $books->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="tittle" placeholder="Books tittle" value="{{ $books->tittle }}">
        <input type="text" name="genre" placeholder="Books genre" value="{{ $books->genre }}">
        <input type="date" name="pubdate" placeholder="Books pubdate" value="{{$books->pubdate }}">
        <button type="submit">Submit</button>
    </form>

</body>

</html>