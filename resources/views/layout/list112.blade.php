<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title', 'My App')</title>
</head>
<body>
    <header>
        @include('components.header112')
    </header>

    <h1 class="mt-12 mb-8 text-4xl mx-20">List Produk</h1>
    <div class="">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer112')
    </footer>
</body>
</html>