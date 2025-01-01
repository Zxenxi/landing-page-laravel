

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
                <h1>Kolintang</h1>
            </div>
            <img src="{{ asset('images/kolintang.jpg') }}" alt="kolintang">
            <div class="card-product">
                <div class="card">
                    <div class="number">
                        <p>#satu</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/kolintang.jpg') }}" alt="kolintang">
                    </div> --}}
                    <div class="title">
                        <h2></h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi1" class="spesifikasi">
                                <li>Bahan: Kayu cempaka, meranti, atau waru.</li>
                                <li>Bilah Kayu: Disusun menurut urutan nada, biasanya 7-12 bilah.</li>
                                <li>Rangka: Terbuat dari kayu kuat untuk menopang bilah.</li>
                                <li>Resonator: Kotak kayu atau bambu untuk memperkuat suara.</li>
                                <li>Nada: Diatur secara diatonis, mirip piano atau xylophone.</li>
                                <li>Pemukul: Kayu dengan ujung dilapisi kain atau karet.</li>
                                <li>Ukuran: Bervariasi tergantung jumlah bilah dan nada.</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi1')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('Snare Drum')">Pesan</button>
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

