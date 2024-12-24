<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izuzu Music</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <script src="{{ asset('javascript/index.js') }}" defer></script>
</head>
<body>
    <header>
        @include('navigation')
        @include('hero')
    </header>
    <main>
        {{-- @include('kategori.kategori') --}}
        @include('layanan')
        @include('product')
        @include('gallery')
        @include('testimoni')
        @include('contact')
    </main>
    <footer>
        <p>Izuzu Music &trade; <sup>&copy;</sup> 2024. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>