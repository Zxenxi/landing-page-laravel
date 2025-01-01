

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
        <section class="product-section" id="produk">
            <div class="product">
                <h1>Angklung</h1>
            </div>
            <div class="card-product">
                <div class="card">
                    <div class="number">
                        <p>#satu</p>
                    </div>
                    <div class="img">
                        <img src="{{ asset('images/Angklung1.png') }}" alt="snare">
                    </div>
                    <div class="title">
                        <h2>Gambang</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi1" class="spesifikasi">
                            <li>31 nada ( F# - C ) + stand besi : 1 Unit </li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi1')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('Snare Drum')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#dua</p>
                    </div>
                    <div class="img">
                        <img src="{{ asset('images/angklung2.png') }}" alt="Tenor">
                    </div> 
                    <div class="title">
                        <h2>Angklung 31 </h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi2" class="spesifikasi">
                            <li>3 tabung + stand ,nada (F# - C) : 1 Unit </li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi2')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('Tenor Drum')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#tiga</p>
                    </div>
                    <div class="img">
                        <img src="{{ asset('images/angklung3.png') }}" alt="Bass">
                    </div> 
                    <div class="title">
                        <h2>Angklung 8</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi3" class="spesifikasi">
                            <li>nada 3 tabung bambu hitam nada sedang pake palang atas</li>
                            <li>nada ( C - C ) Do-re-mi-fa-sol-la-si-do : </li>
                            <li>3 Unit Terbuat dari bambu hitam</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi3')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('Bass Drum')">Pesan</button>
                    </div>
                </div>
            </div>
            <br><br>
        </section>
        
    </main>
    <footer>
        <p>Izuzu Music &trade; <sup>&copy;</sup> 2024. Hak Cipta Dilindungi.</p>
    </footer>
</body>
</html>


<link rel="stylesheet" href="{{ asset('css/product.css') }}">

