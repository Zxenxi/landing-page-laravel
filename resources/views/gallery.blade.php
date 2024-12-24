<link rel="stylesheet" href="{{ asset('css/testimoni.css') }}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<h1 class="text-center mb-5">Gallery</h1>

<section class="gallery" id="gallery">
    <div class="gallery-grid">
        @foreach($galleries as $gallery)
            <div class="gallery-item">
                <div class="image-container">
                    <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="img-responsive">
                    <div class="overlay">
                        <h3>{{ $gallery->title }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<style>
    .gallery {
        background-color: #f8f8f8; /* Light gray background for the gallery section */
        padding: 20px;
        border-radius: 5px;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Responsive grid */
        gap: 20px; /* Increased space between grid items */
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border: 2px solid #ccc; /* Light gray border around each gallery item */
        border-radius: 10px;
        transition: transform 0.3s; /* Smooth transition for hover effect */
    }

    .gallery-item:hover {
        transform: scale(1.02); /* Slight scale effect on hover for a dynamic interaction */
    }

    .image-container {
        position: relative;
        height: 100%; /* Ensure full height */
    }

    .img-responsive {
        width: 100%;
        height: 200px; /* Set a fixed height for images */
        object-fit: cover; /* Cover ensures the image fits within the square/rectangle */
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.8); /* White background with transparency */
        text-align: center;
        padding: 10px 0;
        border-radius: 0 0 10px 10px; /* Rounded corners on the bottom */
    }

    h3 {
        margin: 0; /* Remove default margins */
        font-size: 18px; /* Change font size if needed */
    }
</style>
