<link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
<nav id="navbar">
    <div class="logo">
        <p>Izuzu Music.</p>
    </div>
    <div class="navList">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="{{ url('/#layanan') }}">Layanan</a></li>
            <li>
            <a href="#" class="dropdown-toggle" onclick="toggleDropdown(event)">Produk</a></li>
           <div class="dropdown-menu" id="produk-menu">
                <ul>
                    <li><a href="/marchingband">marching band</a></li>
                    <li><a href="/drumb">drumb band</a></li>
                    <li><a href="/gamelan">gamelan</a></li>
                    <li><a href="/kolintang">kolintang</a></li>
                    <li><a href="/angklung">angklung</a></li>
                    <li><a href="/hadroh">hadroh</a></li>
                    <li><a href="/semuakategori">Lihat Semua Kategori</a></li>
                </ul>
            </div>
            {{-- <div> --}}
                <li><a href="{{ url('/#gallery') }}">Gallery</a></li>
                <li><a href="{{ url('/#testimoni') }}">Testimoni</a></li>
                <li><a href="{{ url('/#contact') }}">Kontak</a></li>
                <li><a href="/kritikdansaran">Kritik dan Saran</a></li>
            {{-- </div> --}}
        </ul>
    </div>
    <div class="menu" onclick="menuTogle()" id="menu-togle">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>
<style>
    .dropdown-menu {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    /* min-width: 160px; */
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

   .dropdown-menu.show {
    display: flex;
    flex-direction: column-reverse;

    /* or inline-block depending on your layout */
}

</style>
<script>
function toggleDropdown(event) {
    event.preventDefault();
    console.log('Dropdown toggle clicked'); // Debugging log
    const dropdownMenu = document.getElementById('produk-menu');

    // Toggle the "show" class on the dropdown menu
    dropdownMenu.classList.toggle('show');
    console.log('Dropdown toggled'); // Debugging log
}



// Close the dropdown if clicking outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropdown-toggle')) {
        const dropdowns = document.getElementsByClassName("dropdown-menu");
        for (let i = 0; i < dropdowns.length; i++) {
            const openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
</script>
