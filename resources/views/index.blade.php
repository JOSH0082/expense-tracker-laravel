<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/img/logo-neo1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Catat Pengeluaran keuangan</title>
</head>
<body>

<nav class="navbar">
    <div class="logo">
        <img src="{{ asset('/img/neoone-logo-properties.png') }}" alt="">

    </div>
    <div class="con-nav">
        <div class="nav-links">
            <a href="#" id="signup">Sign Up</a>
            <a href="#" id="login">Login</a>
        </div>
        <div class="burger">
            <a href="#" id="signup">Sign Up</a>
        </div>
    </div>

</nav>

<div class="thumbnail">
    <div class="thumbnail-img">
        <img src="{{ asset('/img/thumbnail.png') }}" alt="">
    </div>
    <div class="thumbnail-text">
        <span>Kamu Ngerasa Pengeluaran Bulananmu Cepat Habis? </span>
        <p>Kamu bisa catat pengeluaran keuangan kamu disini secara mendetail dan rasakan manfaatnya</p>
        <a href="/home">Coba Sekarang</a>
        <a href="#" id="login-add">Login</a>
    </div>
</div>


<footer class="footer">
    <div class="footer-logo">
        <img src="{{ asset('/img/neoone-logo-properties.png') }}" alt="Logo">
        <div class="logo-text">
        </div>
    </div>
    <div class="footer-credit">
        <a href="https://www.instagram.com/neo1.indonesia/" id="ig"><i class='bx bxl-instagram' ></i> Instagram</a>
        <a href="https://github.com/saka-C" id="github"><i class='bx bxl-github'></i> Creator Github</a>
        <a href="https://github.com/NeoOne-Team" id="github"><i class='bx bxl-github'></i> Community Team Github</a>
    </div>
</footer>
<div class="footer-copyright">
    <p>© 2023 WEB. All rights reserved.</p>
</div>

<script src="{{ asset('/js/script.js') }}"></script>
</body>
</html>
