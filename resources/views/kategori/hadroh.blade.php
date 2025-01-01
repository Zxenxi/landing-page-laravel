<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izuzu Music</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <script src="{{ asset('javascript/index.js') }}" defer></script>
</head>
<body>
    <header>
        @include('navigation')
    </header>
    <main>
        <section class="product-section" id="produk">
            <div class="product">
                <h1>Hadroh</h1>
            </div>
            <img src="{{asset('images/hadroh.png')  }}" alt="" srcset="">
            <div class="card-product">
                <div class="card">
                    <div class="number">
                        <p>#satu</p>
                    </div>
                    {{-- <div class="img"> --}}
                        {{-- <img src="{{ asset('images/snare.png') }}" alt="snare"> --}}
                    {{-- </div> --}}
                    <div class="title">
                        <h2>Bass Habsyi</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi1" class="spesifikasi">
                            <li>Size : 10", 12", 13", 14"</li>
                            <li>Body : Tube 3-4 plywood @ 2.2 mm </li>
                            <li>Lug : Cor alumunium chrome jumlah 8</li>
                            <li>Ring : Besi plat tebal 1.4 mm. finishing plating black</li>
                            <li>Strainer : Model tuas chrome snare per</li>
                            <li>Head and Bottom : Maxtone / rolling (Taiwan)</li>
                            <li>Baut : Import</li>
                            <li>Include : Sling / Pemukul</li>
                            <li>Color : Glitter gradalin silver, gold, red, green blue, purple, orange, or request</li>
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
                    {{-- <div class="img">
                        <img src="{{ asset('images/Tenor drum.png') }}" alt="Tenor">
                    </div> --}}
                    <div class="title">
                        <h2>Darbuka cor alumunium</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi2" class="spesifikasi">
                            <li>Size : 10", 12", 13", 14"</li>
                            <li>Body : Tube 3-4 plywood @ 2.2 mm </li>
                            <li>Lug : Cor alumunium chrome jumlah 8</li>
                            <li>Ring : Besi plat tebal 1.4 mm. finishing plating black</li>
                            <li>Head and Bottom : Maxtone / rolling (Taiwan)</li>
                            <li>Baut : Import</li>
                            <li>Include : Sling / Pemukul</li>
                            <li>Color : Glitter gradalin silver, gold, red, green blue, purple, orange, or request</li>
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
                    {{-- <div class="img">
                        <img src="{{ asset('images/bass drum.png') }}" alt="Bass">
                    </div> --}}
                    <div class="title">
                        <h2>hadroh</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi3" class="spesifikasi">
                            <li>Size : 13", 14", 18", 20", 22", 24"</li>
                            <li>Body : Tube 4 plywood @ 2.2 mm </li>
                            <li>Lug : Cor alumunium chrome 13" & 14" jumlah 8, 16" & 20" jumlah 10, 22" & 24" jumlah 12 </li>
                            <li>Clow : Besi plat finishing chrom</li>
                            <li>Sing : Folk plat tebal 1.6 mm, finishing plating black</li>
                            <li>Head and Bottom : Maxtone / rolling (Taiwan)</li>
                            <li>Baut : Import</li>
                            <li>Include : Sling / Pemukul</li>
                            <li>Color : Glitter gradalin silver, gold, red, green blue, purple, orange, or request</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi3')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('Bass Drum')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#empat</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/quarto.png') }}" alt="snare">
                    </div> --}}
                    <div class="title">
                        <h2>Tam mika stell</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi4" class="spesifikasi">
                            <li>Size : [ 6", 8", 10", 12" ] & [ 8", 10", 12", 13" ]</li>
                            <li>Body : Tube 4 plywood @ 2.2 mm </li>
                            <li>Lug : Cor alumunium chrome 6" & 8" jumlah 4, 10" & 12" jumlah 6, 13" jumlah 8</li>
                            <li>Ring : Plat tebal 1.6 mm. finishing plating black</li>
                            <li>Head and Bottom : Maxtone / rolling (Taiwan)</li>
                            <li>Baut : Import</li>
                            <li>Include : Harnes/ sland % Pemukul</li>
                            <li>Color : Glitter gradalin silver, gold, red, green blue, purple, orange, or request</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi4')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('Quarto')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#lima</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Keprak</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Ukuran untuk TK : 44x58 cm (15 keys). Note range : G5 . A8</li>
                            <li>Ukuran untuk SD, SMP, SMA : 44x63 cm {32 Keys}. Note Range : G5 - c8 </li>
                            <li>Lug : Cor alumunium chrome jumlah 8</li>
                            <li>25 oktal . Ukuran Alumunium : 7x28 mm</li>
                            <li>Frame black wood with rubber feel syntetic on the bottom of stand</li>
                            <li>Include : Hammes plat besi & Pemukul</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
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



