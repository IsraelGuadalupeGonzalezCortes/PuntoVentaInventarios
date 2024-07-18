<nav x-data="{ open: false, openVentas: false, compras: false, cliente: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('productos.index')" :active="request()->routeIs('productos.index')">
                        {{ __('Productos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('categorias.index')" :active="request()->routeIs('categorias.index')">
                        {{ __('Categorías') }}
                    </x-nav-link>
                    <!-- Sales Dropdown -->
                    <div class="relative">
                        <button @click="openVentas = !openVentas" class="flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition duration-150 ease-in-out">
                            <div>{{ __('Ventas') }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div x-show="openVentas" @click.away="openVentas = false" class="absolute mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                            <div class="py-1">
                                <x-dropdown-link :href="route('ventas.index')" :active="request()->routeIs('ventas.index')" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900">
                                    {{ __('Ventas') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('cotizaciones.index')" :active="request()->routeIs('cotizaciones.index')" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900">
                                    {{ __('Cotizaciones') }}
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>
                    <!-- Compras y Proveedores Dropdown -->
                    <div class="relative">
                        <button @click="compras = !compras" class="flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition duration-150 ease-in-out">
                            <div>{{ __('Compras y Proveedores') }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div x-show="compras" @click.away="compras = false" class="absolute mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                            <div class="py-1">
                                <x-dropdown-link :href="route('compras.index')" :active="request()->routeIs('compras.index')" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900">
                                    {{ __('Compras') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('proveedores.index')" :active="request()->routeIs('proveedores.index')" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900">
                                    {{ __('Proveedores') }}
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>

                    <x-nav-link :href="route('inventarios.index')" :active="request()->routeIs('inventarios.index')">
                        {{ __('Inventarios') }}
                    </x-nav-link>

                    <div class="relative">
                        <button @click="cliente = !cliente" class="flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition duration-150 ease-in-out">
                            <div>{{ __('Clientes y Vendedores') }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                        <div x-show="cliente" @click.away="cliente = false" class="absolute mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                            <div class="py-1">
                                <x-dropdown-link :href="route('clientes.index')" :active="request()->routeIs('clientes.index')" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900">
                                    {{ __('Clientes') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('vendedores.index')" :active="request()->routeIs('vendedores.index')" class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-900">
                                    {{ __('Vendedores') }}
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('productos.index')" :active="request()->routeIs('productos.index')">
                    {{ __('Productos') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('categorias.index')" :active="request()->routeIs('categorias.index')">
                    {{ __('Categorías') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('ventas.index')" :active="request()->routeIs('ventas.index')">
                    {{ __('Ventas') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('cotizaciones.index')" :active="request()->routeIs('cotizaciones.index')">
                    {{ __('Cotizaciones') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('compras.index')" :active="request()->routeIs('compras.index')">
                    {{ __('Compras') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('proveedores.index')" :active="request()->routeIs('proveedores.index')">
                    {{ __('Proveedores') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('inventarios.index')" :active="request()->routeIs('inventarios.index')">
                    {{ __('Inventarios') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('clientes.index')" :active="request()->routeIs('clientes.index')">
                    {{ __('Clientes') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('vendedores.index')" :active="request()->routeIs('vendedores.index')">
                    {{ __('Vendedores') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                <div class="flex items-center px-4">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>

                    <div class="ml-3">
                        <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
