<!DOCTYPE html>
<html lang="pt" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    


    <!-- Tailwind (Admin One) -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <!-- Ícones e imagens -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}" />
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#00b4b6" />

</head>

<body>
    <div id="app">
        {{-- Navbar --}}
        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
                <a href="{{ url('/') }}" class="navbar-item">
                    <img src="{{ asset('img/justboil-logo.svg') }}" alt="Logo" class="h-8 w-auto">
                </a>
                <a class="navbar-item mobile-aside-button">
                    <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
                </a>
            </div>

            <div class="navbar-brand is-right">
                <a class="navbar-item --jb-navbar-menu-toggle" data-target="navbar-menu">
                    <span class="icon"><i class="mdi mdi-dots-vertical mdi-24px"></i></span>

                </a>
            </div>
        </nav>

        {{-- Sidebar --}}
        <aside class="aside is-placed-left is-expanded">
            <div class="aside-tools flex flex-col items-center py-4">
                <div class="text-white text-lg font-bold">Admin <span class="font-black">One</span></div>


            </div>

            {{-- Menu principal --}}
            <div class="menu is-menu-main">
                <p class="menu-label">Geral</p>
                <ul class="menu-list">
                    <li class="--set-active-tables-html">
                        <a href="{{ route('items.index') }}">
                            <span class="icon"><i class="mdi mdi-table"></i></span>
                            <span class="menu-item-label">Items</span>
                        </a>
                    </li>
                    <li class="--set-active-tables-html">
                        <a href="{{ route('categories.index') }}">
                            <span class="icon"><i class="mdi mdi-tag-multiple"></i></span>
                            <span class="menu-item-label">Categories</span>
                        </a>
                    </li>
                    <li class="--set-active-tables-html">
                        <a href="{{ route('brands.index') }}">
                            <span class="icon"><i class="mdi mdi-store"></i></span>
                            <span class="menu-item-label">Brands</span>
                        </a>
                    </li>
                    <li class="--set-active-tables-html">   
                        <a href="{{ route('suppliers.index') }}">
                            <span class="icon"><i class="mdi mdi-truck"></i></span>
                            <span class="menu-item-label">Suppliers</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        {{-- Conteúdo principal --}}
        <section class="section main-section">
            @yield('content')
        </section>

        {{-- Footer --}}
        <footer class="footer">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
            </div>
        </footer>
    </div>

    <!-- Scripts Admin One -->
    <script src="{{ asset('js/main.min.js') }}"></script>
</body>

</html>