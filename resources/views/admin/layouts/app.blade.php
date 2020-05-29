<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title') - Painel Administrativo</title>

    <link rel="stylesheet" href="{{ url(mix('assets/admin/css/bootstrap.css')) }}">
    <link rel="stylesheet" href="{{ url(mix('assets/admin/css/style.css')) }}">
</head>
<body>

    <nav class="navbar navbar-dark bg-dark p-0 shadow">
        
        <a class="navbar-brand px-3" href="{{ route('panel') }}">Loja Laravel</a>

        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
      
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky py-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ (Route::currentRouteName() === 'panel' ? 'active' : '') }}" href="{{ route('panel') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                Painel
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (explode('.', Route::currentRouteName())[0] === 'categories' ? 'active' : '') }}" href="{{ route('categories.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                Categorias
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (explode('.', Route::currentRouteName())[0] === 'products' ? 'active' : '') }}" href="{{ route('products.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                Produtos
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ (explode('.', Route::currentRouteName())[0] === 'clients' ? 'active' : '') }}" href="{{ route('clients.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                Clientes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (explode('.', Route::currentRouteName())[0] === 'users' ? 'active' : '') }}" href="{{ route('users.index') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                Usuários
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </nav>
      
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('title')</h1>
                </div>
                @yield('content')
            </main>

        </div>
    </div>

    <script src="{{ url(mix('assets/admin/js/jquery.js')) }}"></script>
    <script src="{{ url(mix('assets/admin/js/bootstrap.js')) }}"></script>
</body>
</html>