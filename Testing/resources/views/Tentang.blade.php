<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/Tentang.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    
    <title>PsyChore</title>

</head>
<body>

    <!-- NAVBAR -->
    @extends('navbar')
    <!-- Content -->
    <div class="layar-dalam">
        <section id="gambar">
            <div class="apa">
                <h4>Apa Itu Bercakap ?</h4>
                <br>
                <p>Bercakap adalah Proyek Tugas Besar Mata Kuliah Pemrograman Berorientasi Objek pada Semester 5 kami yang saat ini(Januari 2023) berkuliah di Telkom University Jurusan S1 Informatika</p>
                <p>Anggota Kelompok :</p>
                <p>- Imas Mahardika (1301200199)</p>
                <p>- Muhammad Raihan Fauzi (1301200487)</p>
                <p>- Nico Valentino (1301204351)</p>
                <p>- Reynhard Powiwi (1301204091)</p>
                <p>Kelas IF4411</p>
            </div>
        </section>
        <div class="map">
            <h2>Alamat Kampus</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.229817161331!2d107.6316854!3d-6.973007!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x437398556f9fa03!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1670838387075!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <br>

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

    <script src="js/jQuery/jquery.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"> </script>
</body>
</html>