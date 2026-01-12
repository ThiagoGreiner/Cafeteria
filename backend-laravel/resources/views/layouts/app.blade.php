<!-- Estrutura paginas internas -->
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Best Coffee')</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    </head>
    <body class="overflow-hidden">
        <!--Navbar -->
        @include('components.admin-navbar')

        <div class="d-flex admin-layout">
            <!-- Sidebar desktop -->
            <aside class="bg-dark text-white d-none d-lg-flex flex-column admin-sidebar">
                @include('components.admin-sidebar')
            </aside>

            <div class="flex-grow-1 d-flex flex-column">
                <!-- Conteúdo -->
                <main class="flex-grow-1 p-4 overflow-auto">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @yield('content')
                </main>
        

                <!-- Footer -->
                @include('components.footer')
            </div>
        </div>

        <!-- Bootstrap JS -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
