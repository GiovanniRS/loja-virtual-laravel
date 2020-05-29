<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Loja Laravel</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <a class="navbar-brand" href="{{ route('home') }}">Loja Laravel</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 ml-auto">
                <input class="form-control mr-sm-2" type="search" placeholder="O que está procurando?" aria-label="Barra de pesquisa">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Lista de desejos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrinho</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Entrar</a>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="nav bg-light justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="#">Masculino</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Feminino</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Infantil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Acessorios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Marcas</a>
        </li>
    </ul>

    <div class="container">
        @yield('content')
    </div>
    
</html>