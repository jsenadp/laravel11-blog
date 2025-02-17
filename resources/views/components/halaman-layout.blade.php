@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title)?$title:'Judul Default' }}</title>
</head>
<body>
    <h1>Halo dari halaman component</h1>
    {{ $slot }}

    <p>Tanggal : {{ $tanggal }}</p>
    <p>Penulis : {{ $penulis }}</p>
</body>
</html>