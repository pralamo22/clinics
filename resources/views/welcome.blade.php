<x-layout>

    <x-slot:metaTitle>
        index
    </x-slot>
    <x-slot:metaDescription>
        Pagina de inicio de la aplicacion Clinics
    </x-slot>

    <h1 class="mt-5 mb-10">
        index
    </h1>
    <div style="height: 250px;">
    </div>

    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clinics App</title>

        <link rel="stylesheet" href="<?php echo asset('css/login.css'); ?>" type="text/css">
        {{-- resources\css\login.css --}}
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
            <header class="grid items-center grid-cols-2 gap-2 py-10 lg:grid-cols-3">

                @if (Route::has('login'))
                    <nav class="flex justify-end flex-1 -mx-3">
                        @auth
                            <a href="{{ url('/dashboard') }}">

                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}">

                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">

                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>


        </div>
        <div>
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
                id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->

            <!-- new login start -->
            <section class="login-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 banner-sec">
                            <div class="signup__overlay"></div>
                            <div class="banner">
                                <div id="demo" class="carousel slide carousel-fade" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                                        <li data-target="#demo" data-slide-to="1"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="mx-auto m-4 bg-white rounded-circle shadow-1-strong d-flex align-items-center justify-content-center"
                                                style="width: 100px; height: 100px;">
                                                <img src="{{ Vite::asset('resources/images/logo_ayudante.svg') }}"
                                                    height="70" alt="Ayudante Logo" />

                                            </div>

                                            <h1>CRECIENDO con tecnología</h1>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="@/assets/images/footer_logo.png" class="img-fluid">
                                            <h1>AYUDANTE</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 login-sec">
                            <h2 class="text-center">Login </h2>
                            <form class="login100-form validate-form">
                                <div class="wrap-input100 validate-input">
                                    <span class="label-input100">Usuario</span>
                                    <input class="input100" type="text" name="username"
                                        placeholder="Type your username">
                                    <span class="focus-input100"></span>
                                </div>

                                <div class="wrap-input100 validate-input">
                                    <span class="label-input100">Password</span>
                                    <input class="input100" type="password" name="pass"
                                        placeholder="Type your password">
                                    <span class="focus-input100 password"></span>
                                </div>

                                <div class="text-right p-t-8 p-b-31">
                                    <a href="#">
                                        ¿Password olvidada?
                                    </a>
                                </div>

                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <button class="btn btn-primary mr-2">
                                            Login
                                        </button>
                                        <button class="btn btn-primary mr-2">
                                            Registro
                                        </button>
                                    </div>
                                </div>

                                <div class="txt1 text-center p-t-54 p-b-20">
                                    <span>
                                        Or Sign Up Using
                                    </span>
                                </div>

                                <div class="flex-c-m">
                                    <a href="#" class="login100-social-item bg1">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#" class="login100-social-item bg3">
                                        <i class="fa fa-google"></i>
                                    </a>
                                </div>
                            </form>

                            <div class="copy-text">Powered
                                <i class="fa fa-heart"></i> by
                                <a href="http://elayudante.es">El Ayudante</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- new login end -->
        </div>
    </body>

    </html>
</x-layout>
