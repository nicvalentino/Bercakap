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
    <title>Register</title>
</head>
<body>

    @if (session()->has('RegistFailed'))
        <div class="alert alert-danger">
            {{ session('RegistFailed') }}
        </div>
    @endif
    
    <!-- Logo -->

    

    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-7 card flex-row mx-auto px-0">
                <!-- Banner -->

                <!-- Form -->
                <div class="card-body">
                    <div style="text-align: center;">
                        <img src="images/Logo-Bercakap-Hitam.png" style="width:50%;margin-left:20px;padding-bottom:20px;" alt="">
                    </div>
                    <h4 class="title text-center mb-2">
                        Daftar
                    </h4>
                    <form class="form-box px-3" method = "POST" action = "/register">
                        @csrf
                        Name
                        <div class="form-input-reg" style="">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="text" name="name" class="form-control @error('name') 
                            is-invalid @enderror" id="name" placeholder="Name" tabindex="10" required value="{{ old('name') }}">
                            @error('name') 
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div> 
                            @enderror
                        </div>
                        Email
                        <div class="form-input-reg">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="email" name="email" class="form-control @error('email') 
                            is-invalid @enderror" id="email" placeholder="Email" tabindex="10" required value="{{ old('email') }}">
                            @error('email') 
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div> 
                            @enderror
                        </div>
                        Password
                        <div class="form-input-reg">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="password" name="password" class="form-control @error('password') 
                            is-invalid @enderror" id="password" placeholder="Password" required>
                            @error('password') 
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div> 
                            @enderror
                        </div>
                        Confirm Password
                        <div class="form-input-reg">
                            <span><i class="fa fa-envelope-o"></i></span>
                            <input type="password" name="confirm_password" class="form-control @error('confirm_password') 
                            is-invalid @enderror" id="confirm_password" placeholder="Confirm Password" required>
                            @error('confirm_password')  
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div> 
                            @enderror
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-block">
                                <div class="text-light">
                                    Daftar
                                </div>
                            </button>
                        </div>
                        <div class="sebelahan">
                            <div class="border" style="width: 14%;"></div>
                            <span>&nbsp;&nbsp;Atau&nbsp;&nbsp;</span>
                            <div class="border" style="width: 14%;"></div>
                        </div>
                        <div class="text-center mb-2" style="padding-top:10px;">
                            Sudah punya akun?
                            <a href="/login" class="register-link">Masuk</a>
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