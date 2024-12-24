

<link rel="stylesheet" href="{{ asset('css/product.css') }}">

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
    </header>
    <main>
        <section class="product-section" id="product">
            <div class="product">
                <h1>angklung</h1>
            </div>
            <div class="card-product">
                <div class="card">
                    <div class="number">
                        <p>#satu</p>
                    </div>
                    <div class="img">
                        <img src="{{ asset('images/snare.png') }}" alt="snare">
                    </div>
                    <div class="title">
                        <h2>Snare Drum</h2>
                    </div>
            </div>
        </section>
        
    </main>
    <footer>
        <p>Izuzu Music &trade; <sup>&copy;</sup> 2024. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>


<link rel="stylesheet" href="{{ asset('css/product.css') }}">

