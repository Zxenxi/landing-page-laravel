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
                <h1>Gamelan</h1>
            </div>
            <img src="{{asset('images/Gamelan.png')  }}" alt="" srcset="">
            <div class="card-product">
                <div class="card">
                    <div class="number">
                        <p>#satu</p>
                    </div>
                    {{-- <div class="img"> --}}
                        {{-- <img src="{{ asset('images/snare.png') }}" alt="snare"> --}}
                    {{-- </div> --}}
                    <div class="title">
                        <h2>Slenten</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi1" class="spesifikasi">
                            <li>Bahan : Wilahan Besi 7 bilah</li>
                            <li>Size : P = 32cm - 36cm</li>
                            <li>Tebal : 2,5 - 3mm</li>
                            <li>Body : Sanggan kayu, bumbungan dari seng</li>
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
                        <h2>Gender</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi2" class="spesifikasi">
                            <li>Bahan : Wilahan Besi 14 bilah</li>
                            <li>Size : P =19cm - 27cm</li>
                            <li>Tebal : 2 - 3mm</li>
                            <li>Body : Sanggan kayu, bumbungan dari seng</li>
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
                        <h2>Saron</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi3" class="spesifikasi">
                            <li>Bahan : Wilahan Besi 7 bilah</li>
                            <li>Size : P = 23cm - 28cm</li>
                            <li>Tebal : 6mm - 8mm</li>
                            <li>Body : Sanggan kayu, bumbungan dari seng</li>
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
                        <h2>Demung</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi4" class="spesifikasi">
                            <li>Bahan : Wilahan Besi 7 bilah</li>
                            <li>Size : P = 19cm - 27cm</li>
                            <li>Tebal : 6mm - 8mm</li>
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
                        <h2>Peking</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Wilahan Besi 7 bilah</li>
                            <li>Size : P = 19cm - 23cm</li>
                            <li>Tebal : 6mm - 8mm</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#enam</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Bonang barung</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Plat Besi, Pencu dari kuningan</li>
                            <li>Size : D = 21cm - 23cm</li>
                            <li>Tebal : 1,5mm - 2mm</li>
                            <li>Slendro 12 pencon</li>
                            <li>Pelog 14 pencon</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#tujuh</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Bonang penerus</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : PLat  Besi </li>
                            <li>Size : D = 19cm - 21cm</li>
                            <li>Tebal : 1,5mm - 2mm</li>
                            <li>Slendro 12 pencon</li>
                            <li>Pelog 14 pencon</li>
                            <li>Pencu dari kuningan</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#Delapan</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Kethuk</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Plat Besi </li>
                            <li>Size : D = 19cm - 23cm</li>
                            <li>Tebal : 1,5mm - 2mm</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#Sembilan</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Kempul</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Plat Besi </li>
                            <li>Tebal : 1,5mm - 2mm</li>
                            <li>Pencu dari kuningan</li>
                            <li>Laras Slendro 3,5,6,1,2 Laras Pelog 3,5,6,7,1</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#sepuluh</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Gong suwukan</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Plat Besi </li>
                            <li>Tebal : 1,5mm - 2mm</li>
                            <li>Laras 2, Laras 1, Laras 6</li>
                            <li>Pencu dari kuningan</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#sebelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Gong Besar</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Plat Besi </li>
                            <li>Size : D = 1m</li>
                            <li>Tebal : 2mm</li>
                            <li>Laras 3</li>
                            <li>Pencu dari kuningan</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#duabelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Kendang Bem</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Bahan kayu munggur/Mahoni berukir naga.</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#tigabelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Kendang Ciblon</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan dari kayu mahoni/ munggur tebakan dari kulit sapi. </li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#empatbelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Kendang Ketipung</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan :Bahan dari kayu Munggur/Mahoni Tebakan dari kulit Sapi. </li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#limabelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Gambang</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Bahan Kayu pelog 11 bilah, slendro 11 bilah.</li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#enambelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Tabuh</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Bahan kayu dan benang lawe </li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#tujuhbelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Rebab</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Watangan dan Bathokan dari kayu. </li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#Delapanbelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Siter</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan :Kawat dari baja bermutu, Kotak dari kayu. </li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#Sembilanbelas</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Suling</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan :bahan dari bambu gading, Uwer/Jumang dari rotan </li>
                        </ul>
                    </div>
                    <div class="btn-show">
                        <button onclick="show('spesifikasi5')">Lihat Lebih Lengkap</button>
                    </div>
                    <div class="btn-pesan">
                        <button onclick="sendMessageToWhatsApp('marching_bell')">Pesan</button>
                    </div>
                </div>
                <div class="card">
                    <div class="number">
                        <p>#duapuluh</p>
                    </div>
                    {{-- <div class="img">
                        <img src="{{ asset('images/marching_bell.png') }}" alt="marching_bell">
                    </div> --}}
                    <div class="title">
                        <h2>Kenong</h2>
                    </div>
                    <div class="description">
                        <ul id="spesifikasi5" class="spesifikasi">
                            <li>Bahan : Plat Besi </li>
                            <li>Size : D = 36cm</li>
                            <li>Tebal : 1,5mm - 2mm</li>
                            <li>Pencu dari kuningan</li>
                            <li>Laras Slendro 3, 5, 6, 1, 2.</li>
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



