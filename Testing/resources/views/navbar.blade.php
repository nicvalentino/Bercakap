<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Navbar</title>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background: #fff;box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);">
        <div class="container-fluid pr-5 pl-5" id="header">
    
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <img src="images/Logo-Bercakap-Hitam.png" style="width:35%;" alt="">
                    </li>
                    <li class="nav-item">
                        <a href="/home" class="nav-link text-light pr-5"><h5 style="color: #6FC7E9;margin-top:15px;padding-right:30px;">Beranda</h5></a>
                    </li>
                    <li class="nav-item">
                        <a href="/profil/{{ $user->id }}/setting" class="nav-link text-light pr-5"><h5 style="color: #6FC7E9;margin-top:15px;padding-right:30px;">Pengaturan</h5></a>
                    </li>
                    <li class="nav-item">
                        <a href="/profil" class="nav-link text-light pr-5"><h5 style="color: #6FC7E9;margin-top:15px;padding-right:30px;">Profil</h5></a>
                    </li>
                    <li class="nav-item">
                        <a href="/tentang" class="nav-link text-light pr-5"><h5 style="color: #6FC7E9;margin-top:15px;padding-right:30px;">Tentang</h5></a>
                    </li>
                </ul>
            </div>

            <!-- Masuk Button -->
            @if($isLoggedIn)
                {{-- <p id="nama_container" class="d-flex text-center mt-2">Hi, {{ "nama disini" }}</p> --}}
                <div class="dropdown p-0 m-0">
                    <button class="btn btn-secondary dropdown-toggle" style="background: transparent; border-color: transparent;" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="/images/user.png" style="width: 18px; margin-right: 10px">
                        {{ $user->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                        <a href="/logout" class="dropdown-item" style="background: transparent;">
                            <img src="images/logout.png" style="width: 18px; margin-right: 15px;">
                            <p class="nav-btn">Keluar</p>
                        </a>
                    </div>
                </div>
            @else
                <a href="/login"><button class="nav-btn">Masuk</button></a>
            @endif
        </div>
        
    </nav>
    
</body>
</html>