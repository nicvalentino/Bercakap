<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tempat</title>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/PengaturanAkun.css">
</head>

<body>
    <!-- NAVBAR -->
    @extends('navbar')
    <div class="popup-olahraga" id="popup-olahraga">
        <div class="popupcontent-olahraga">
            <div class="popupimg">
                <a href="#" class="popupclose-olahraga">&times;</a>
            </div>
            <div class="popupheader">
                <h4>PILIH TEMPAT OLAHRAGA</h4>
            </div>
            <div class="popuptext">
                <div class="sebelahan">
                    <a href="/Badminton" class="booknow"><button class="normall">Badminton</button></a>
                    <a href="/Basket" class="booknow"><button class="normall">Basket</button></a>
                    <a href="/Futsal" class="booknow"><button class="normall">Futsal</button></a>
                </div>
                <div class="sebelahan">
                    <a href="/Golf" class="booknow"><button class="normall">Golf</button></a>
                    <a href="/Tenis" class="booknow"><button class="normall">Tenis</button></a>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="layar-penuh">
        <br>
        <br>
        <br>
        <br>
        <h3 style="text-align: center;font-size:25px;padding-left:9px;">Pengaturan Akun</h3>
        <p class="ringkasan" style="text-align: center;font-size:17px;">
            Data-mu Aman Bersama Kami
        </p>
        <br>
        <form action="/profil/{{ $user->id }}/edit" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <br>
            <label for="name">Nama :</label>
            <input type="text" id="nama" name="name" value="{{ $user->name }}"><br>
            <br>
            <label for="desc">Email :</label>
            <input type="email" id="email" name="email" value="{{ $user->email }}"><br>
            <br>
            <button type="submit" style="margin-bottom : 200px;"> Submit </button>
        </form>
        <br>
        <br>
        <!--Footer-->
        <footer id = "contact">
            <div style="text-align: center;margin-bottom:10px;">
                <img src="images/logo.png" style="width:7%;margin-left:10px;" alt="">
            </div>
            <div class = "layar-dalam">
                <div class="footerproduk">
                    <h5 onclick="window.location.href='/home'" style="font-weight: 400;cursor:pointer;">Beranda</h5>
                </div>
                <div class="footerpembayaran">
                    <h5 onclick="window.location.href='/PengaturanAkun'" style="font-weight: 400;cursor:pointer;">Pengaturan</h5>
                </div>
                <div class="footers">
                    <h5 onclick="window.location.href='/Profil'" style="font-weight: 400;cursor:pointer;">Profil</h5>
                </div>
                <div class="footertentang">
                    <h5 onclick="window.location.href='/Tentang'" style="font-weight: 400;cursor:pointer;">Tentang</h5>
                </div>
            </div>
            <div class="layar-dalam">
                <div class="copyright">
                    &copy; 2023 Bercakap
                </div>
            </div>
        </footer>
    </div>
    <script src="Rentify.js"></script>
</body>
</html>