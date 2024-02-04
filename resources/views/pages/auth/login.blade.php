<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}} - Giriş Yap</title>
    <link rel="icon" type="image/x-icon" href="{{asset('src/assets/img/favicon.ico')}}"/>
    <link href="{{asset('layouts/modern-dark-menu/css/light/loader.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('layouts/modern-dark-menu/css/dark/loader.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('layouts/modern-dark-menu/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('src/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('layouts/modern-dark-menu/css/light/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('src/assets/css/light/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css"/>

    <link href="{{asset('layouts/modern-dark-menu/css/dark/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('src/assets/css/dark/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="form">

<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<div class="auth-container d-flex">
    <div class="container mx-auto align-self-center">
        <div class="row">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h2>Giriş Yap</h2>
                                    <p>Email ve şifrenizi girerek giriş yapın</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">E-Posta</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                               value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label" for="password">Şifre</label>
                                        <input type="text" name="password" id="password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3"
                                                   type="checkbox"
                                                   id="form-check-default"
                                                   name="remember">
                                            <label class="form-check-label" for="form-check-default">
                                                Beni Hatırlar mısın? Sanmam
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-4">
                                        <button class="btn btn-secondary w-100" type="submit">Giriş Yap</button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">
                                            Hesabın yokmu?
                                            <a href="javascript:void(0);" class="text-warning">E aç bi tane?</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
