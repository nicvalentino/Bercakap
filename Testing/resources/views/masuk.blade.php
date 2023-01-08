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
    <link rel="stylesheet" href="css/stylelogreg.css">
    <title>Masuk</title>
    
</head>
<body>

    @if(session()->has('loginError'))
        <div class="alert alert-danger" role="alert">
            {{ session('loginError') }}
        </div>
    @endif

    @if (session()->has('RegistSuccess'))
        <div class="alert alert-success">
            {{ session('RegistSuccess') }}
        </div>
    @endif


    <!-- Logo -->
    <div style="text-align: center;">
        <img src="images/LogoWhite.png" style="width: 60%; margin-bottom: 20px;" alt="">
    </div>
    <!-- Logo -->

    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <!-- Banner -->
                <div class="img-left d-none d-md-flex"></div>
                <!-- Banner -->

                <!-- Form -->
                <div class="card-body">
                    <h4 class="title text-center mt-4">
                        Masuk
                    </h4>
                    <form class="form-box px-3" method="POST" action="/login">
                        @csrf
                        Email
                        <div class="form-input">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="email" class="form-control @error('email') is-invalid"
                            @enderror  id="email" placeholder="Email Address" autofocus tabindex="10" required value = "{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <h1></h1> 
                        Password
                        <div class="form-input">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="password" name="password" class="form-control @error('password') is-invalid" 
                            @enderror id="password" placeholder="Password" required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-block">
                                <div class="text-light">
                                    Masuk
                                </div>
                            </button>
                        </div>

                        <div class="text-center mb-2">
                            Belum punya akun?
                            <a href="/register" class="register-link">
                                <u>Daftar di sini</u>
                            </a>
                        </div>
                    </form>
                </div>
                <!-- Form -->
            </div>
        </div>
    </div>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"
    ></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>