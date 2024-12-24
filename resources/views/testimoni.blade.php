<link rel="stylesheet" href="{{ asset('css/testimoni.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<section class="testimoni" id="testimoni">
    <h1>Testimoni</h1>
    <div class="testimoni-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($terverifikasis as $terverifikasi)
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <p>{{ $terverifikasi->testimoni }}</p>
                            <span class="author">{{ $terverifikasi->nama }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    
</section>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
