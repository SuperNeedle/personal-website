<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'TBA DEV' }}</title>
    <meta name="description" content="Portfolio, systems architecture registry, and engineering telemetry by TBA.">

    <!-- Fonts: Archivo, Inter, JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">

    <!-- Theme Initialization Script (prevents theme flicker) -->
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- Alpine.js (reactive navigation & theme toggling) -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @endif

    <style>
        [x-cloak] { display: none !important; }

        /* Font definitions */
        .font-archivo { font-family: 'Archivo', ui-sans-serif, system-ui, sans-serif; }
        .font-inter { font-family: 'Inter', ui-sans-serif, system-ui, sans-serif; }
        .font-mono { font-family: 'JetBrains Mono', ui-monospace, monospace; }

        /* Brand Colors & Animation */
        .bg-laravel-red { background-color: #FF5500; }
        .hover\:bg-laravel-red-darkened:hover { background-color: #E04B00; }
        .ring-laravel-red\/40 { --tw-ring-color: rgba(255, 85, 0, 0.4); }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        /* Selection colors */
        ::selection {
            background-color: #FFD5B8;
            color: #171717;
        }
        .dark ::selection {
            background-color: rgba(255, 120, 40, 0.35);
            color: #ffffff;
        }
    </style>
</head>

<body class="bg-white font-inter text-neutral-900 antialiased dark:bg-neutral-950 dark:text-neutral-100 min-h-screen flex flex-col transition-colors duration-150"
      x-data="{
          mobileMenuOpen: false,
          darkMode: document.documentElement.classList.contains('dark'),
          toggleTheme() {
              this.darkMode = !this.darkMode;
              if (this.darkMode) {
                  document.documentElement.classList.add('dark');
                  localStorage.theme = 'dark';
              } else {
                  document.documentElement.classList.remove('dark');
                  localStorage.theme = 'light';
              }
          }
      }">

    <!-- Reusable Top Navigation Bar -->
    <nav aria-label="Main" class="sticky top-0 z-50 w-full dark:text-white [--accent-color:#FF5500] [--bg-color:var(--color-white,#ffffff)] dark:[--bg-color:#0a0a0a] [--border-color:rgba(0,0,0,0.08)] dark:[--border-color:rgba(255,255,255,0.1)] [--active-color:rgba(255,85,0,0.07)] dark:[--active-color:rgba(255,85,0,0.15)]">
        <div class="flex h-16 items-center border-b border-neutral-200/80 dark:border-neutral-800 bg-white/80 dark:bg-neutral-950/80 backdrop-blur-md transition-colors duration-150 ease-out">
            <div class="container mx-auto flex h-full max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
                
                <!-- Left: Brand Logo & Navigation Links -->
                <div class="flex h-full items-center">
                    <!-- Brand: TBA DEV (#FF5500) -->
                    <div class="shrink-0 pr-8">
                        <a class="font-archivo font-medium text-lg tracking-tight text-[#FF5500] hover:opacity-90 transition-opacity block py-1" aria-label="TBA DEV Home" href="/">
                            TBA DEV
                        </a>
                    </div>

                    <!-- Desktop Nav Links (Archivo for Menu Buttons) -->
                    <ul class="hidden items-center gap-1 lg:flex font-archivo" dir="ltr">
                        <li>
                            <a class="flex h-9 items-center rounded-lg px-3.5 text-[15px] font-normal tracking-tight text-neutral-800 hover:bg-[#FF5500]/10 dark:text-neutral-300 dark:hover:text-white transition-colors"
                               href="/overview">
                                Overview
                            </a>
                        </li>
                        <li>
                            <a class="flex h-9 items-center rounded-lg px-3.5 text-[15px] font-normal tracking-tight text-neutral-800 hover:bg-[#FF5500]/10 dark:text-neutral-300 dark:hover:text-white transition-colors"
                               href="/projects">
                                Projects
                            </a>
                        </li>
                        <li>
                            <a class="flex h-9 items-center rounded-lg px-3.5 text-[15px] font-normal tracking-tight text-neutral-800 hover:bg-[#FF5500]/10 dark:text-neutral-300 dark:hover:text-white transition-colors"
                               href="/certifications">
                                Certifications
                            </a>
                        </li>
                        <li>
                            <a class="flex h-9 items-center rounded-lg px-3.5 text-[15px] font-normal tracking-tight text-neutral-800 hover:bg-[#FF5500]/10 dark:text-neutral-300 dark:hover:text-white transition-colors"
                               href="/insights">
                                Insights
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Right Actions: Extended Search Bar & Theme Mode Toggle -->
                <div class="flex items-center gap-3">
                    <!-- Extended Search Bar -->
                    <form action="/search" method="GET"
                          x-data="{ query: '' }"
                          @submit.prevent="
                              if (query.trim().toLowerCase() === 'i am tba') {
                                  window.location.href = '/admin/login';
                              } else if (query.trim().length > 0) {
                                  window.location.href = '/search?q=' + encodeURIComponent(query.trim());
                              }
                          "
                          class="relative hidden sm:flex items-center w-64 md:w-80 lg:w-96 font-archivo">
                        <div class="relative flex h-9 w-full items-center justify-between rounded-lg border border-neutral-200 bg-neutral-50/80 px-3.5 shadow-2xs transition hover:bg-white hover:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-900/90 dark:hover:border-neutral-700 dark:hover:bg-neutral-800 focus-within:border-[#FF5500] dark:focus-within:border-[#FF5500] focus-within:ring-1 focus-within:ring-[#FF5500]">
                            <input type="text"
                                   name="q"
                                   x-model="query"
                                   placeholder="Search projects, docs, tags..."
                                   class="w-full bg-transparent text-xs tracking-tight text-neutral-900 dark:text-neutral-100 placeholder-neutral-500 dark:placeholder-neutral-400 font-inter outline-none border-none p-0 focus:outline-none focus:ring-0"
                                   autocomplete="off"
                                   spellcheck="false" />
                            <button type="submit" class="shrink-0 text-neutral-400 hover:text-[#FF5500] dark:text-neutral-500 dark:hover:text-[#FF5500] ml-2 transition-colors" aria-label="Submit search">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-4">
                                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </form>

                    <!-- Dark / Light Theme Mode Toggle Button -->
                    <button type="button"
                            @click="toggleTheme()"
                            class="flex h-9 w-9 items-center justify-center rounded-lg border border-neutral-200 bg-white text-neutral-600 transition hover:bg-neutral-50 dark:border-neutral-800 dark:bg-neutral-900 dark:text-neutral-300 dark:hover:bg-neutral-800 cursor-pointer"
                            :title="darkMode ? 'Switch to Light Mode' : 'Switch to Dark Mode'"
                            aria-label="Toggle Theme Mode">
                        <!-- Sun Icon (shown in Dark Mode) -->
                        <svg x-show="darkMode" x-cloak class="size-4 text-amber-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                        </svg>
                        <!-- Moon Icon (shown in Light Mode) -->
                        <svg x-show="!darkMode" class="size-4 text-neutral-700" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                        </svg>
                    </button>

                    <!-- Mobile Hamburger Button -->
                    <button type="button"
                            @click="mobileMenuOpen = !mobileMenuOpen"
                            class="flex items-center justify-center rounded-lg p-1.5 text-neutral-700 hover:bg-neutral-100 lg:hidden dark:text-neutral-300 dark:hover:bg-neutral-800 cursor-pointer"
                            aria-label="Toggle navigation menu">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5"></path>
                            <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Drawer -->
        <div x-show="mobileMenuOpen" x-cloak
             x-transition:enter="transition ease-out duration-150"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-100"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden border-b border-neutral-200 dark:border-neutral-800 bg-white/95 px-6 py-4 backdrop-blur-md dark:bg-neutral-900/95 font-archivo">
            <ul class="flex flex-col gap-2">
                <li><a href="/overview" class="block py-2 text-base font-normal text-neutral-800 hover:text-[#FF5500] dark:text-neutral-200">Overview</a></li>
                <li><a href="/projects" class="block py-2 text-base font-normal text-neutral-800 hover:text-[#FF5500] dark:text-neutral-200">Projects</a></li>
                <li><a href="/certifications" class="block py-2 text-base font-normal text-neutral-800 hover:text-[#FF5500] dark:text-neutral-200">Certifications</a></li>
                <li><a href="/insights" class="block py-2 text-base font-normal text-neutral-800 hover:text-[#FF5500] dark:text-neutral-200">Insights</a></li>
            </ul>
        </div>
    </nav>

    <!-- Main Page Content Slot -->
    <main class="grow">
        @yield('content')
    </main>

</body>
</html>
