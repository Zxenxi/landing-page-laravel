<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
<script src="{{ asset('javascript/index.js') }}" defer></script>

<section class="contact-section" id="contact">
    <div class="text">
        <h3>Mari berkomunikasi</h3>
        <p>Sampaikan Ke kita kebutuhan anda</p>
    </div>
    <div class="form-kontak">
        <form action="https://api.whatsapp.com/send" method="get" target="_blank">
            <input type="hidden" name="phone" value="08122884003"> <!-- Ganti dengan nomor WhatsApp tujuan Anda -->
            <input type="hidden" name="text" id="whatsappMessage" value=""> <!-- Akan diisi oleh JavaScript -->
            <input type="text" id="nama" name="nama" placeholder="Nama" required>
            <input type="text" id="no-hp" name="no-hp" placeholder="Nomor Handphone / WhatsApp" required>
            <textarea id="pesan" name="pesan" placeholder="Pesan" style="height:200px;" required></textarea>
            <input type="button" value="Pratinjau Pesan" onclick="prepareWhatsAppMessage()">
          </form>   
    </div>
</section>