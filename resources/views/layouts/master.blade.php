<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>ROCit</title>
    
        <style>
            [wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid] {
                display: none;
            }

            [wire\:offline] {
                display: none;
            }

            [wire\:dirty]:not(textarea):not(input):not(select) {
                display: none;
            }

            input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {
                animation-duration: 50000s;
                animation-name: livewireautofill;
            }

            @keyframes livewireautofill { from {} }
        </style>

        <!-- Scripts -->
        <script src="/js/app.js" defer></script>
</head>
 <body>
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-9xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-jet-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>
    
            @if (Auth::user()->role_id === 1)

                    <!-- Navigation Links -->
                    <div class="hidden space-x-14 sm:-my-px sm:ml-14 sm:flex">
                        <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="homebutton">
                            {{ __('Home') }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('cars.index') }}" :active="request()->routeIs('cars.index')" class="homebutton">
                            {{ __("De auto's") }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')" class="homebutton">
                            {{ __("De accounts") }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('dealers.index') }}" :active="request()->routeIs('dealers.index')" class="homebutton">
                            {{ __("De dealers") }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('autodealers.index') }}" :active="request()->routeIs('autodealers.index')" class="homebutton">
                            {{ __("Kijken naar de auto's die al bezet zijn") }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('repairandmaintenances.index') }}" :active="request()->routeIs('repairandmaintenances.index')" class="homebutton">
                            {{ __("Meldingen van de reparatie en/of onderhoud van auto's") }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('workorders.index') }}" :active="request()->routeIs('workorders.index')" class="homebutton">
                            {{ __("Alle werkbonnen") }}
                        </x-jet-nav-link>
                        <x-jet-nav-link href="{{ route('workorders.create') }}" :active="request()->routeIs('workorders.create')" class="homebutton">
                            {{ __("Een werkbon maken") }}
                        </x-jet-nav-link>
                    </div>
                </div>

            @elseif (Auth::user()->role_id === 2)
            
            <div class="hidden space-x-20 sm:-my-px sm:ml-20 sm:flex">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="homebutton">
                    {{ __('Home') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('cars.index') }}" :active="request()->routeIs('cars.index')" class="homebutton">
                    {{ __("auto's") }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('autodealers.index') }}" :active="request()->routeIs('autodealers.index')" class="homebutton">
                    {{ __("Een auto verwijderen") }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('autodealers.create') }}" :active="request()->routeIs('autodealers.create')" class="homebutton">
                    {{ __("Een auto dealen") }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('repairandmaintenances.index') }}" :active="request()->routeIs('repairandmaintenances.index')" class="homebutton">
                    {{ __("Meldingen van de reparatie en/of onderhoud van auto's") }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('repairandmaintenances.create') }}" :active="request()->routeIs('repairandmaintenances.create')" class="homebutton">
                    {{ __("Een reparatie en/of onderhoud van uw auto melden") }}
                </x-jet-nav-link>
                <x-jet-nav-link href="{{ route('workorders.index') }}" :active="request()->routeIs('workorders.index')" class="homebutton">
                    {{ __("Alle werkbonnen") }}
                </x-jet-nav-link>
            </div>
        </div>

            @endif
    
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ml-3 relative">
                            <x-jet-dropdown align="right" width="60">
                                <x-slot name="trigger">
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                            {{ Auth::user()->currentTeam->name }}
    
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>
    
                                <x-slot name="content">
                                    <div class="w-60">
                                        <!-- Team Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Manage Team') }}
                                        </div>
    
                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('Team Settings') }}
                                        </x-jet-dropdown-link>
    
                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('Create New Team') }}
                                            </x-jet-dropdown-link>
                                        @endcan
    
                                        <div class="border-t border-gray-100"></div>
    
                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>
    
                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" />
                                        @endforeach
                                    </div>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    @endif
    
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                            {{ Auth::user()->username }}
    
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>
    
                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>
    
                                <x-jet-dropdown-link href="{{ route('profile.show') }}" class="homebutton">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>
    
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif
    
                                <div class="border-t border-gray-100"></div>
    
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();" class="homebutton">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>
    
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-responsive-nav-link>
            </div>
    
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="flex-shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif
    
                    <div>
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->username }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>
                </div>
    
                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" class="homebutton">
                        {{ __('Profile') }}
                    </x-jet-responsive-nav-link>
    
                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                    @endif
    
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        this.closest('form').submit();" class="homebutton">
                            {{ __('Log Out') }}
                        </x-jet-responsive-nav-link>
                    </form>
    
                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>
    
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Team') }}
                        </div>
    
                        <!-- Team Settings -->
                        <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('Team Settings') }}
                        </x-jet-responsive-nav-link>
    
                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('Create New Team') }}
                            </x-jet-responsive-nav-link>
                        @endcan
    
                        <div class="border-t border-gray-200"></div>
    
                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>
    
                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <section class="content">
        <div class="container">
            @yield('content')
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>