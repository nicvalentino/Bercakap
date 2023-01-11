<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
        rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Ask Page</title>
</head>
<body>
    @extends('navbar')
    <!-- NAVBAR SEARCH -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #E5E6FF; padding-bottom: .1rem">
        <div class="container-fluid" style="margin-left: 8.5rem; padding-right: 2rem" id="header">
            <ul class="navbar-nav">
                <li class="nav-item pt-2">
                    <a href="/home" class="nav-link text-muted"> Beranda</a>
                </li>

                <!-- SLASH -->
                <p class="pt-3 text-muted">/</p>
                <!-- SLASH -->

                <li class="nav-item pt-2">
                    <a href="/psyask" class="nav-link text-muted"> PsyAsk </a>
                </li>

                 <!-- SLASH -->
                <p class="pt-3 text-muted">/</p>
                <!-- SLASH -->

                <li class="nav-item pt-2">
                    <a href="/addask" class="nav-link text-dark"> Pertanyaan Baru </a>
                </li>
            </ul>

            <!-- SEARCH BAR -->
            <form action="/psyask">
                <div class="input-box" style="margin-right:5rem">
                    <input type="text" placeholder="Cari Pertanyaan" class = "form-control" name="search" value = "{{ request('search') }}">
                    <i class="bi bi-search"></i>
                </div>
            </form>
            <!-- SEARCH BAR -->
        </div>
    </nav>
    <!-- NAVBAR SEARCH -->

    <div class="container-fluid" style="background: #F6F7FF; padding: 2.3rem;">
        <div class="box mx-auto" style="background-color: rgb(112, 116, 232, 0.8); width: 600px; height: 250px; margin-bottom:250px;">
            <h2 class="text-center p-4 text-light">
                Pertanyaan Baru
            </h2>
            <div class="box mx-auto" style="background-color: #ffffff; width: 570px; height: 120px;">
                <!-- ASK SUBJECT -->
                <form method="POST" action="/ask">
                    @csrf
                    <div class="form-group" style="padding: 1.2rem; padding-bottom: 0;">
                        <input type="text" name="body" class="form-control" id="#" placeholder="Judul">
                        <input type="hidden" name="user_id" class="form-control" value="{{ Auth::id() }}">
                    </div>
                    <!-- PUBLISH BUTTON -->
                    <div style="margin-left: 29.2rem;">
                        <button type="submit" class="btn text-light" style="background: #7074E8; width: relative; height: 20px; font-size: 12px; margin-right: .4rem; padding-bottom: 1.3rem; padding-top: .2rem; padding-left: .8rem; padding-right: .8rem; border-radius: 0.5rem;">
                            <i class="bi bi-send"></i>
                            Publish
                        </button>
                    </div>
                    <!-- PUBLISH BUTTON -->
                </form>
                <!-- ASK SUBJECT -->

            </div>
        </div>
    </div>
</body>
</html>