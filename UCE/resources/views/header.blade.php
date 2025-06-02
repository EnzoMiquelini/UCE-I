<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', '2J Engenharia')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
</head>

<body>
    <header class="container py-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary w-100 h-25">
            <div class="container">
                <!-- Logo à esquerda -->
                <a class="navbar-brand" href="/" >
                    <img src="{{asset('img/logo.png')}}" alt="logo" width="100%" height="70px">
                </a>

                <!-- Botão do menu para dispositivos móveis -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Itens do menu alinhados à direita -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sobre">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#services">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#obras">Obras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/fale-conosco">Fale Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn" id="entrar" href="/entrar">Entrar</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="btn" id="cadastrar" href="/registrar">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


    </header>
