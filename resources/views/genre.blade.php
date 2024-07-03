<!-- resources/views/film-by-genre.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Film berdasarkan Genre</title>
</head>
<body>
    <h1>Daftar Film berdasarkan Genre</h1>

    @if ($movies->isEmpty())
        <p>Data tidak ditemukan</p>
    @else
        <ul>
            @foreach ($movies as $movie)
                <li>{{ $movie->genre }} - {{ $movie->genre }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
