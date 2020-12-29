<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SEMAR | {{ $subtitle }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="account-pages">

    <!-- Begin page -->
    <div class="accountbg"
        style="background: url('{{ asset('images/female-doctor-working-medicine-specialist.jpg') }}'); background-size: cover">
    </div>

    <div class="wrapper-page account-page-full">

        <div class="card shadow-none">
            <div class="card-block">

                <div class="account-box">

                    <div class="card-box shadow-none p-4 mt-2">
                        <h2 class="text-uppercase text-center pb-3">
                            <a href="index.html" class="text-success">
                                <span><img src="{{ asset('images/semar-logo-dark.png') }}" alt="" height="26"></span>
                            </a>
                        </h2>

                        <form class="" action="#">

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="emailaddress">Email/Username</label>
                                    <input class="form-control" type="text" id="emailaddress" required=""
                                        placeholder="Masukkan email atau username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <a href="page-recoverpw.html" class="text-muted float-right"><small>Lupa
                                            password?</small></a>
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" id="password"
                                        placeholder="Masukkan password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">

                                    <div class="checkbox checkbox-primary">
                                        <input id="remember" type="checkbox" checked="">
                                        <label for="remember">
                                            Ingat saya
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row text-center">
                                <div class="col-12">
                                    <a href="/" class="btn btn-block btn-primary waves-effect waves-light">Masuk</a>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>

        <div class="text-center">
            <p class="account-copyright">2018 - 2019 © Highdmin. <span class="d-none d-sm-inline-block"> -
                    Coderthemes.com</span></p>
        </div>

    </div>

    <!-- Vendor js -->
    <script src="{{ asset('js/vendor.min.js') }}" `></script>

    <!-- App js -->
    <script src="{{ asset('js/app.min.js') }}" `></script>

</body>

</html>
