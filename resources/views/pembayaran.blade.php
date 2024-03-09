<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("styles/tailwindcss3.4.1.js") }}">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<h1>Pembayaran</h1>
    <p>ID Pembayaran: {{$id}}</p>
    <p>Nama Barang: {{$nama}}</p>
    <p>Harga Barang: {{$harga}}</p>
</body>
</html>