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
    {!! config('constant.resources.css.app') !!}

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

                        <form class="parsley-examples" action="{{ route('auth.login') }}" method="POST">
                            @csrf

                            @error('wrong_password')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="form-group row">
                                <div class="col-12">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" parsley-trigger="change" id="email"
                                        name="email" required placeholder="Masukkan email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <a href="#" class="text-muted float-right"><small>Lupa
                                            password?</small></a>
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required id="password" name="password"
                                        placeholder="Masukkan password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">

                                    <div class="checkbox checkbox-primary">
                                        <input id="remember" name="remember" type="checkbox" value="true" checked>
                                        <label for="remember">
                                            Ingat saya
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group row text-center">
                                <div class="col-12">
                                    <button type="submit"
                                        class="btn btn-block btn-primary waves-effect waves-light">Masuk</button>
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
    {!! config('constant.resources.js.vendor') !!}

    {!! config('constant.resources.js.parsley') !!}

    <script>
        $(document).ready(function () {
            $(".parsley-examples").parsley()
        });

    </script>

    <!-- App js -->
    {!! config('constant.resources.js.app') !!}

</body>

</html>
