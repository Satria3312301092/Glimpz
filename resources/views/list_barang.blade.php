<html>
<div>
   <h1>List Barang</h1>
   <p>Kode Barang: {{$id}}</p>
   <p>Nama Barang: {{$nama}}</p>
</div>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('styles/adji092.css') }}">
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/3.4.1”>">
    <link rel="stylesheet" href="/styles/tailwindcss3.4.1.js">

    <title>Test</title>
</head>
<body class="bg-blue-200 ">
<nav class="bg-blue-700 text-white py-6">
        <div class="container mx-auto">
            <nav class="flex items-center justify-between px-4 py-4 lg:py-0">
                <div>
                    <a href="#" class="font-bold text-xl">Spectra</a>
                </div>
                <div>
                    <ul class="flex space-x-10">
                        <li><a href="#" class="hover:underline">Home</a></li>
                        <li><a href="#" class="hover:underline">About</a></li>
                        <li><a href="#" class="hover:underline">Service</a></li>
                        <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                        </svg>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>
</nav>

    <center>
   <h1 class="text-3xl font-bold underline mb-4">
</h1>
    </center>
    
    <div class="container mx-auto mt-5 grid grid-cols-1 md:grid-cols-3 gap-3">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <img src="{{ asset('images/image.png') }}" alt="image.png" class="mb-4">
            <h2 class="text-xl font-semibold mb-4">Spectra Orange</h2>
            <p class="text-gray-600">Background color adalah warna yang diterapkan pada latar belakang sebuah desain grafis, seperti situs web, poster, atau materi pemasaran. Warna latar belakang ini memainkan peran penting dalam menentukan kesan visual keseluruhan dan membantu menonjolkan konten utama yang ditampilkan di atasnya.</p>
            <div class="flex justify-end mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Detail</button>
            </div>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-md">
            <img src="{{ asset('images/image1.png') }}" alt="imagex1.png" class="mb-4">
            <h2 class="text-xl font-semibold mb-4">Spectra Orange</h2>
            <p class="text-gray-600">Dalam pengaturan tampilan, background color merujuk pada warna yang digunakan sebagai latar belakang untuk elemen-elemen seperti layar komputer, perangkat mobile, atau aplikasi. Pemilihan warna latar belakang yang sesuai dapat meningkatkan keterbacaan, kenyamanan pengguna, dan estetika keseluruhan dari tampilan tersebut.</p>
            <div class="flex justify-end mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Detail</button>
            </div>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md">
            <img src="{{ asset('images/images22.jpg') }}" alt="images22.jpg" class="mb-4">
            <h2 class="text-xl font-semibold mb-4">Abstract Background</h2>
            <p class="text-gray-600">Abstract background adalah jenis latar belakang atau backdrop yang tidak terkait dengan gambar atau motif yang mudah dikenali secara visual. Sebaliknya, abstract background cenderung menggunakan kombinasi warna, bentuk, dan pola yang bersifat non-representasional atau tidak konkret. </p>
            <div class="flex justify-end mt-4">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Detail</button>
            </div>
        </div>
        </div>
    </div>
</body>
</html>