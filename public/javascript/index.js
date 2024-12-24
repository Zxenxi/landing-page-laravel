  function menuTogle() {
      let navbar = document.getElementById("navbar");
      navbar.classList.toggle('navOpen');
    }
    
    document.addEventListener('DOMContentLoaded', function() {
      let listItems = document.querySelectorAll('.navList ul li a');
      
      listItems.forEach(function(item) {
        item.addEventListener('click', function() {
          let navbar = document.getElementById("navbar");
          navbar.classList.remove('navOpen');
        });
      });
    });
    
      function show(elementID) {
        let description = document.getElementById(elementID);
        description.classList.toggle('expanded');
    }
    
    
    // Inisialisasi Swiper
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 'auto', // Menggunakan 'auto' agar Swiper menyesuaikan jumlah slide yang tampil
        spaceBetween: 20,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          // Untuk layar yang lebih kecil dari 768px (tampilan mobile)
          768: {
            slidesPerView: 1,
            spaceBetween: 0,
          },
          // Untuk layar yang lebih besar dari 1200px (tampilan desktop)
          1200: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
        },
      });
    
      
      
      
      function sendMessageToWhatsApp(title) {
        let phoneNumber = '08122884003'; // Ganti dengan nomor WhatsApp tujuan Anda
        let message = 'Halo, saya tertarik dengan ' + title + '. Apakah masih tersedia?'; // Pesan yang akan dikirim
      
        // Mengganti spasi dengan karakter '%20' agar sesuai dengan URL
        title = title.replace(/\s+/g, '%20');
        message = message.replace(/\s+/g, '%20');
      
        // URL untuk membuka WhatsApp dengan nomor tujuan dan pesan tertentu
        let whatsappURL = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + message;
      
        // Membuka link WhatsApp menggunakan window.open()
        window.open(whatsappURL);
      }
      
    
      function prepareWhatsAppMessage() {
        let nama = document.getElementById('nama').value;
        let noHp = document.getElementById('no-hp').value;
        let pesan = document.getElementById('pesan').value;
      
        let phoneNumber = '08122884003'; // Ganti dengan nomor WhatsApp tujuan Anda
      
        let message = 'Halo, saya ' + nama + '. ' + pesan + '.';
      
        // Mengganti spasi dengan karakter '%20' agar sesuai dengan URL
        message = message.replace(/\s+/g, '%20');
      
        // Mengubah nomor handphone yang dimasukkan dalam format URL
        noHp = noHp.replace(/\s+/g, '');
      
        // Membuat URL WhatsApp dengan nomor tujuan dan pesan
        let whatsappURL = 'https://api.whatsapp.com/send?phone=' + phoneNumber + '&text=' + message;
      
        // Mengisi nilai input hidden dengan pesan yang telah disiapkan
        document.getElementById('whatsappMessage').value = message;
      
        // Membuka link WhatsApp menggunakan window.open()
        window.open(whatsappURL);
      }
      
      