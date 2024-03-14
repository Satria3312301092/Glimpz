<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Jamal-CSS/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="bg-orange-500 h-screen">
    <div class="mx-8 ">

<h1>Pembayaran</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <thead>
            <tbody>
                @foreach($data as $dataku)
                <tr>
                    <td>{{ $dataku['id'] }}</td>
                    <td>{{ $dataku['nama'] }}</td>
                    <td>{{ $dataku['harga'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </thead>
    </table>
    <img class="image1" src="Jamal-Image/header.jpg">
</div> 
</div>
     

</body>
</html>
