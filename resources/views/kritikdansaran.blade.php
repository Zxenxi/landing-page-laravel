<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
</head>
<body>
    <header>
        @include('navigation')
    </header>
    <main>
        <h1>Kotak Kritik dan Saran</h1>
        <div class="form-kontak">
            <form action="/kirim-testimoni" method="post">
                @csrf
                <input type="hidden" name="phone" value="08122884003"> 
                <input type="hidden" name="text" id="whatsappMessage" value="">
                <input type="text" id="nama" name="nama" placeholder="Nama" required>
                <input type="text" id="email" name="email" placeholder="Email" required>
                <textarea id="kritikdansaran" name="kritikdansaran" placeholder="Kritik dan Saran" style="height:100px;" required></textarea>
                <textarea id="testimoni" name="testimoni" placeholder="Testimoni" style="height:100px;" required></textarea>
                <button type="submit">Kirim</button>
            </form>   
        </div>
        
    </main>
</body>
</html>