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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script src="https://kit.fontawesome.com/4456df0b79.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    
    <title>PsyChore</title>

</head>
<body>

    <!-- NAVBAR -->
    @extends('navbar')
    <br><br><br><br>

        <!-- POPUP -->

    <!-- POPUP BUAT POSTINGAN BARU -->
    <div class="popup-form" id="popup-buat">
        <div class="popupcontent-form">
            <div class="popupheader">
                <a href="#" class="popupclose" style="margin-top: -15px;">&times;</a>
            </div>
            <form action="???" method="post" enctype="multipart/form-data" style="margin-left: 10px;margin-right:10px;">
                <h4 style="margin-top: 20px;text-align:center;">Buat Postingan</h4>
                <input type="text" id="name" name="name" placeholder="Judul" style="margin-bottom: 15px;">
                <textarea id="desc" name="desc" placeholder="Apa yang anda pikirkan ?" style="margin-bottom: 15px;"></textarea>
                <a href="#" value="Kirim" style="justify-content: center; margin-left:40%;"><button class="normal" style="margin-bottom: 20px;">Kirim</button></a>
            </form>
        </div>
    </div>

    <!-- POPUP EDIT POSTINGAN -->
    <div class="popup-form" id="popup-edit">
        <div class="popupcontent-form">
            <div class="popupheader">
                <a href="#" class="popupclose" style="margin-top: -15px;">&times;</a>
            </div>
            <form action="???" method="post" enctype="multipart/form-data" style="margin-left: 10px;margin-right:10px;">
                <h4 style="margin-top: 20px;text-align:center;">Edit Postingan</h4>
                <input type="text" id="name" name="name" placeholder="Judul" style="margin-bottom: 15px;">
                <textarea id="desc" name="desc" placeholder="Apa yang anda pikirkan ?" style="margin-bottom: 15px;"></textarea>
                <a href="#" value="Kirim" style="justify-content: center; margin-left:40%;"><button class="normal" style="margin-bottom: 20px;">Kirim</button></a>
            </form>
        </div>
    </div>

    <!-- POPUP HAPUS POSTINGAN -->
    <div class="popup-form" id="popup-hapus">
        <div class="popupcontent-form">
            <div class="popupheader">
                <a href="#" class="popupclose">&times;</a>
            </div>
            <form action="???" method="post" enctype="multipart/form-data" style="margin-left: 10px;margin-right:10px;">
                <h5 style="margin-top: 20px;text-align:center;margin-left:5%;">Apakah Anda Yakin Ingin Menghapus Postingan Tersebut ?"</h5>
                <a href="#" value="Kirim" style="justify-content: center; margin-left:40%;"><button class="normall" style="margin-bottom: 20px;">Hapus</button></a>
            </form>
        </div>
    </div>

    <!-- POPUP BAN USER -->
    <div class="popup-form" id="popup-ban-user">
        <div class="popupcontent-form">
            <div class="popupheader">
                <a href="#" class="popupclose">&times;</a>
            </div>
            <form action="???" method="post" enctype="multipart/form-data" style="margin-left: 10px;margin-right:10px;">
                <h5 style="margin-top: 20px;margin-left:10%;">Apakah Anda Yakin ingin Mem-ban "Nama User ?"</h5>
                <a href="#" value="Ban" style="justify-content: center; margin-left:40%;"><button class="normall" style="margin-bottom: 20px;">Ban User</button></a>
            </form>
        </div>
    </div>

    <!-- ISI KONTEN -->

    <!-- POSTINGAN -->
    <div class ="postingan" style="padding-bottom: 10px;">
        <div class="keterangann">
            <div class="sebelahan">
                <div class="content">
                    <div class="sebelahan" style="justify-content: space-between;">
                        <!-- JUDUL POSTINGAN -->
                        <h4 style="justify-content: left;">Judul 1</h4>
                        <div class="sebelahan" style="justify-content: right;">
                            <!-- FITUR EDIT POST, HAPUS POST, BAN USER, NAMA USER -->
                            <div class="pulpen" style="background-color: #4E9BB9; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='/EditPostingan'"><i class="fa-regular fa-pen-to-square"></i></div>
                            <div class="hapus" style="background-color: #ED6571; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='#popup-hapus'"><i class="fa-regular fa-trash-can"></i></div>
                            <div class="banuser" style="background-color: #ED6571; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='#popup-ban-user'">Ban User</div>
                            <div class="user" style="background-color: #4E9BB9; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;">Test1</div>
                        </div>
                    </div>
                    <!-- JAM POSTING -->
                    <h5>18.00 wib</h5>
                    <!-- ISI POSTINGAN -->
                    <h5 style="text-align: justify;font-weight:360;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eveniet aliquid quibusdam veritatis mollitia, commodi et, est consequuntur sequi voluptates soluta vitae iusto architecto laborum maiores, doloribus laudantium recusandae quae minus! Odio velit obcaecati expedita eum at hic minus deserunt culpa non corporis ullam, aliquam sit natus voluptatibus facilis eaque possimus consectetur facere labore quae iusto! Sit velit ratione repellat. Voluptatibus repellendus similique numquam, adipisci ratione ipsam, voluptatum sequi doloribus facere atque incidunt molestiae blanditiis iste aspernatur sunt expedita? Cupiditate sint similique reprehenderit animi a architecto quibusdam culpa sunt ad, hic illum dolor excepturi deleniti. Earum totam natus porro repellendus!</h5>
                    <div class="sebelahan" style="justify-content: space-between;">
                        <span style="opacity: 0;margin:0px;padding-bottom:0px;">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span>
                        <div class="icon" style="justify-content: right; display:flex;">
                            <!-- JUMLAH LIKE -->
                            <i class="fa-solid fa-thumbs-up" style="color: green;padding-top:2px;cursor:pointer;"></i>
                            <span style="font-weight: 550;padding-right:10px;">&nbsp;20&nbsp;</span>
                            <!-- JUMLAH DISLIKE -->
                            <i class="fa-solid fa-thumbs-down" style="color:#ff5050;padding-top:4px;cursor:pointer;"></i>
                            <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                            <!-- JUMLAH YANG LIAT -->
                            <i class="fa-regular fa-eye" style="padding-top:3px;"></i>
                            <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                            <!-- JUMLAH KOMENTAR -->
                            <i class="fa-regular fa-comment" style="padding-top:2px;"></i>
                            <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ISI KOMENTAR -->
    <h4 style="margin-left:5.3%">Komentar</h4>
    <input type="text" id="name" name="name" style="margin-bottom: 15px;margin-left:5.3%;border-radius:10px;width:30%;">
    <a href="#" value="Kirim" style=" margin-left:1%;"><button class="normal" style="border-radius:50px;">Kirim</button></a>
    <div class="komentar">
    <!-- KOMENTAR 1 -->
        <div class ="postingan" style="padding-bottom: 10px;">
            <div class="keterangann">
                <div class="sebelahan">
                    <div class="content">
                        <div class="sebelahan" style="justify-content: space-between;">
                            <!-- JUDUL KOMENTAR -->
                            <h4 style="justify-content: left;">Komentar 1</h4>
                            <div class="sebelahan" style="justify-content: right;">
                                <!-- FITUR EDIT POST, HAPUS POST, BAN USER, NAMA USER -->
                                <div class="pulpen" style="background-color: #4E9BB9; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='/EditKomentar'"><i class="fa-regular fa-pen-to-square"></i></div>
                                <div class="hapus" style="background-color: #ED6571; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='#popup-hapus'"><i class="fa-regular fa-trash-can"></i></div>
                                <div class="banuser" style="background-color: #ED6571; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='#popup-ban-user'">Ban User</div>
                                <div class="user" style="background-color: #4E9BB9; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;">Test1</div>
                            </div>
                        </div>
                        <!-- JAM POSTING -->
                        <h5>18.00 wib</h5>
                        <!-- ISI KOMENTAR -->
                        <h5 style="text-align: justify;font-weight:360;">Lorem ipsum dolor sit amet.</h5>
                        <div class="sebelahan" style="justify-content: space-between;">
                            <span style="opacity: 0;margin:0px;padding-bottom:0px;">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span>
                            <div class="icon" style="justify-content: right; display:flex;">
                                <!-- JUMLAH LIKE -->
                                <i class="fa-solid fa-thumbs-up" style="color: green;padding-top:2px;cursor:pointer;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;20&nbsp;</span>
                                <!-- JUMLAH DISLIKE -->
                                <i class="fa-solid fa-thumbs-down" style="color:#ff5050;padding-top:4px;cursor:pointer;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                                <!-- JUMLAH YANG LIAT -->
                                <i class="fa-regular fa-eye" style="padding-top:3px;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                                <!-- JUMLAH KOMENTAR -->
                                <i class="fa-regular fa-comment" style="padding-top:2px;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KOMENTAR 2 -->
    <div class ="postingan" style="padding-bottom: 10px;">
            <div class="keterangann">
                <div class="sebelahan">
                    <div class="content">
                        <div class="sebelahan" style="justify-content: space-between;">
                            <!-- JUDUL KOMENTAR -->
                            <h4 style="justify-content: left;">Lorem, ipsum dolor.</h4>
                            <div class="sebelahan" style="justify-content: right;">
                                <!-- FITUR EDIT POST, HAPUS POST, BAN USER, NAMA USER -->
                                <div class="pulpen" style="background-color: #4E9BB9; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='/EditKomentar'"><i class="fa-regular fa-pen-to-square"></i></div>
                                <div class="hapus" style="background-color: #ED6571; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='#popup-hapus'"><i class="fa-regular fa-trash-can"></i></div>
                                <div class="banuser" style="background-color: #ED6571; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='#popup-ban-user'">Ban User</div>
                                <div class="user" style="background-color: #4E9BB9; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;">Test1</div>
                            </div>
                        </div>
                        <!-- JAM POSTING -->
                        <h5>18.00 wib</h5>
                        <!-- ISI KOMENTAR -->
                        <h5 style="text-align: justify;font-weight:360;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, explicabo.</h5>
                        <div class="sebelahan" style="justify-content: space-between;">
                            <span style="opacity: 0;margin:0px;padding-bottom:0px;">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span>
                            <div class="icon" style="justify-content: right; display:flex;">
                                <!-- JUMLAH LIKE -->
                                <i class="fa-solid fa-thumbs-up" style="color: green;padding-top:2px;cursor:pointer;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;20&nbsp;</span>
                                <!-- JUMLAH DISLIKE -->
                                <i class="fa-solid fa-thumbs-down" style="color:#ff5050;padding-top:4px;cursor:pointer;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                                <!-- JUMLAH YANG LIAT -->
                                <i class="fa-regular fa-eye" style="padding-top:3px;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                                <!-- JUMLAH KOMENTAR -->
                                <i class="fa-regular fa-comment" style="padding-top:2px;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KOMENTAR 3 -->
    <div class ="postingan" style="padding-bottom: 10px;">
            <div class="keterangann">
                <div class="sebelahan">
                    <div class="content">
                        <div class="sebelahan" style="justify-content: space-between;">
                            <!-- JUDUL KOMENTAR -->
                            <h4 style="justify-content: left;">Komentar 3</h4>
                            <div class="sebelahan" style="justify-content: right;">
                                <!-- FITUR EDIT POST, HAPUS POST, BAN USER, NAMA USER -->
                                <div class="pulpen" style="background-color: #4E9BB9; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='/EditKomentar'"><i class="fa-regular fa-pen-to-square"></i></div>
                                <div class="hapus" style="background-color: #ED6571; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='#popup-hapus'"><i class="fa-regular fa-trash-can"></i></div>
                                <div class="banuser" style="background-color: #ED6571; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;" onclick="window.location.href='#popup-ban-user'">Ban User</div>
                                <div class="user" style="background-color: #4E9BB9; padding:7px 10px 5px 10px;color:#ffff;border-radius:8px;margin-right:5px;">Test1</div>
                            </div>
                        </div>
                        <!-- JAM POSTING -->
                        <h5>18.00 wib</h5>
                        <!-- ISI KOMENTAR -->
                        <h5 style="text-align: justify;font-weight:360;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui eveniet aliquid quibusdam veritatis mollitia, commodi et, est consequuntur sequi voluptates soluta vitae iusto architecto laborum maiores, doloribus laudantium recusandae quae minus! Odio velit obcaecati expedita eum at hic minus deserunt culpa non corporis ullam, aliquam sit natus voluptatibus facilis eaque possimus consectetur facere labore quae iusto! Sit velit ratione repellat. Voluptatibus repellendus similique numquam, adipisci ratione ipsam, voluptatum sequi doloribus facere atque incidunt molestiae blanditiis iste aspernatur sunt expedita? Cupiditate sint similique reprehenderit animi a architecto quibusdam culpa sunt ad, hic illum dolor excepturi deleniti. Earum totam natus porro repellendus!</h5>
                        <div class="sebelahan" style="justify-content: space-between;">
                            <span style="opacity: 0;margin:0px;padding-bottom:0px;">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------</span>
                            <div class="icon" style="justify-content: right; display:flex;">
                                <!-- JUMLAH LIKE -->
                                <i class="fa-solid fa-thumbs-up" style="color: green;padding-top:2px;cursor:pointer;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;20&nbsp;</span>
                                <!-- JUMLAH DISLIKE -->
                                <i class="fa-solid fa-thumbs-down" style="color:#ff5050;padding-top:4px;cursor:pointer;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                                <!-- JUMLAH YANG LIAT -->
                                <i class="fa-regular fa-eye" style="padding-top:3px;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                                <!-- JUMLAH KOMENTAR -->
                                <i class="fa-regular fa-comment" style="padding-top:2px;"></i>
                                <span style="font-weight: 550;padding-right:10px;">&nbsp;30&nbsp;</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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