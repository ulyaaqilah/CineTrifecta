<!-- resources/views/film/cari.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian Film</title>
</head>
<body>
    <h1>Hasil Pencarian Film</h1>

    {{-- @if ($titles->count() > 0) --}}
        <ul>
            @foreach ($titles as $film)
                <li>{{ $film->title }}</li>
            @endforeach
        </ul>
    {{-- @else
        <p>Tidak ada hasil yang ditemukan.</p>
    @endif --}}
</body>
</html>
