@extends('layouts.app')

@php
    $yearsExperience = $yearsExperience ?? 7;
    $projectContributions = $projectContributions ?? 12;
    $certificationsEarned = $certificationsEarned ?? 4;
@endphp

@section('content')

    <!-- SECTION 1: Hero Header (Text + Buttons + 3D Isometric Moving Graphic) -->
    <header class="relative z-0 bg-white overflow-hidden dark:bg-neutral-950 transition-colors duration-150">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <!-- Mobile Background Radial Grid -->
            <div class="absolute inset-0 origin-bottom scale-y-60 [mask-image:radial-gradient(70%_100%_at_50%_100%,black_25%,transparent)] min-[940px]:hidden">
                <svg class="pointer-events-none absolute inset-0 top-1/2 left-1/2 size-[1200px] -translate-x-1/2 -translate-y-1/2 rotate-45 text-black/10 dark:text-white/10" width="100%" height="100%">
                    <defs>
                        <pattern id="grid-mobile" x="-1" y="-1" width="40" height="40" patternUnits="userSpaceOnUse">
                            <path d="M 40 0 L 0 0 0 40" fill="transparent" stroke="currentColor" stroke-width="1"></path>
                        </pattern>
                    </defs>
                    <rect fill="url(#grid-mobile)" width="100%" height="100%"></rect>
                </svg>
            </div>

            <!-- Left: Hero Headline & Action Buttons -->
            <div class="relative z-10 flex max-w-[746px] flex-col items-center pt-24 pb-32 text-center max-[1100px]:py-20 md:items-start md:text-left sm:pt-32 sm:pb-44">
                <!-- Title in Archivo (Clean Normal Weight) -->
                <h1 class="font-archivo text-4xl tracking-tighter text-pretty text-neutral-900 dark:text-white sm:text-5xl md:text-7xl font-normal leading-[1.08]">
                    The clean stack for <br class="hidden sm:inline">
                    <span class="text-neutral-900 dark:text-white">Artisans and agents.</span>
                </h1>
                
                <!-- Paragraphs / Sentences in Inter -->
                <p class="mt-4 max-w-2xl font-inter text-lg tracking-normal text-balance text-neutral-500 dark:text-neutral-400 sm:text-xl leading-relaxed">
                    High-throughput distributed systems, Linux kernel eBPF acceleration, and scalable cloud-native architectures built for performance.
                </p>

                <!-- Buttons in Archivo (Clean Normal Weight) -->
                <div class="mt-8 flex flex-col items-center gap-4 sm:mt-10 sm:flex-row w-full sm:w-auto font-archivo">
                    <a class="group/button relative isolate inline-flex cursor-pointer items-center justify-center tracking-tight shadow-xs select-none border border-transparent text-center whitespace-nowrap transition-colors duration-150 ease-out focus:outline-hidden focus-visible:ring-3 bg-laravel-red text-white ring-laravel-red/40 hover:bg-laravel-red-darkened h-12 gap-2.5 rounded-lg px-6 text-lg font-normal max-sm:h-10 max-sm:px-4 max-sm:text-base w-full sm:w-auto"
                       href="/projects">
                        Explore Projects
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="size-4 transition-transform duration-100 ease-out group-hover/button:translate-x-0.5">
                            <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    
                    <a class="group/button relative isolate inline-flex cursor-pointer items-center justify-center tracking-tight shadow-xs select-none border text-center whitespace-nowrap transition-colors duration-150 ease-out focus:outline-hidden focus-visible:ring-3 border-neutral-200 bg-white text-neutral-900 ring-neutral-900/10 hover:bg-neutral-50 focus-visible:border-neutral-300 dark:border-neutral-800 dark:bg-neutral-900 dark:text-white dark:hover:bg-neutral-800 h-12 gap-2.5 rounded-lg px-6 text-lg font-normal max-sm:h-10 max-sm:px-4 max-sm:text-base w-full sm:w-auto"
                       href="/overview">
                        View Overview
                    </a>
                </div>
            </div>

            <!-- Right: 3D Isometric Moving Graphic (Absolute SVG Artwork) -->
            <div class="pointer-events-none absolute inset-y-0 left-1/2 w-[1512px] -translate-x-1/2" aria-hidden="true">
                <svg class="absolute right-0 bottom-0 h-full w-auto max-[1100px]:right-30 max-[940px]:hidden" viewBox="0 0 1512 896" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <pattern id="grid-_r_t_" x="-1" y="-1" width="53.5" height="53.5" patternUnits="userSpaceOnUse">
                            <path d="M 53.5 0 L 0 0 0 53.5" fill="transparent" stroke="#00000015" stroke-width="1.5" class="dark:stroke-white/10"></path>
                        </pattern>
                        <radialGradient id="_r_t_-radial-gradient" gradientUnits="userSpaceOnUse" cx="1200" cy="1000" r="1300">
                            <stop offset="0%" stop-color="white" stop-opacity="1"></stop>
                            <stop offset="50%" stop-color="white" stop-opacity="1"></stop>
                            <stop offset="100%" stop-color="white" stop-opacity="0"></stop>
                        </radialGradient>
                        <mask id="_r_t_-radial-mask" maskUnits="userSpaceOnUse" x="0" y="0" width="1512" height="896">
                            <rect x="0" y="0" width="1512" height="896" fill="url(#_r_t_-radial-gradient)"></rect>
                        </mask>
                        <linearGradient id="_r_t_-ai-gradient">
                            <stop offset="0%" stop-color="#f5b9ea"></stop>
                            <stop offset="50%" stop-color="#8d99ff"></stop>
                            <stop offset="100%" stop-color="#aa6eee"></stop>
                        </linearGradient>
                    </defs>

                    <!-- Background Radial Grid -->
                    <g mask="url(#_r_t_-radial-mask)">
                        <rect fill="url(#grid-_r_t_)" width="2000" height="2000" transform="matrix(0.865593 0.500749 -0.865593 0.500749 664 -703)"></rect>
                    </g>

                    <!-- Isometric Stacks & Floating Cards -->
                    <g transform="translate(-160 0)">
                        <!-- Branch Tracks -->
                        <g>
                            <path d="m915.712 531.55-3.557-2.054c-25.228-14.564-66.131-14.564-91.359 0L566.214 676.468c-22.074 12.744-22.074 33.406 0 46.149l9.268 5.35" stroke="#171717" stroke-width="2.472" class="dark:stroke-neutral-600"></path>
                            <path d="m729.583 639.004 49.893 28.803c47.303 27.308 47.298 71.58-.004 98.888L419.778 974.349c-22.074 12.744-57.864 12.744-79.938 0l-95.568-55.171" stroke="#d97757" stroke-width="2.472"></path>
                            <path d="m52.417 1026.35 861.05-496.709" stroke="#FF5500" stroke-width="2.472"></path>
                        </g>

                        <!-- Layered Card 0 (Blue) -->
                        <g class="animate-float">
                            <g style="--index: 0;" transform="translate(0 -0)">
                                <rect width="159.971" height="320.106" transform="matrix(0.865593 0.500749 -0.865593 0.500749 1147.77 514.102)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <rect width="159.949" height="57.6556" transform="matrix(0.865561 0.500804 3.17692e-05 1 1147.79 456.391)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <g>
                                    <rect width="302.5" height="39.7538" transform="matrix(0.865561 -0.500804 -3.17692e-05 1 1008.46 696.568)" fill="#2563EB" stroke="#171717" class="dark:stroke-neutral-700"></rect>
                                </g>
                                <rect width="160.198" height="57.6556" transform="matrix(0.865561 0.500804 -3.17692e-05 -1 870.492 674.273)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <rect width="320.02" height="159.937" transform="matrix(0.865593 -0.500749 0.865593 0.500749 870.781 616.576)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                            </g>

                            <!-- Layered Card 1 (Black/Dark) -->
                            <g style="--index: 1;" transform="translate(0 -57.72)">
                                <rect width="159.971" height="320.106" transform="matrix(0.865593 0.500749 -0.865593 0.500749 1147.77 514.102)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <rect width="159.949" height="57.6556" transform="matrix(0.865561 0.500804 3.17692e-05 1 1147.79 456.391)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <g>
                                    <rect width="302.5" height="39.7538" transform="matrix(0.865561 -0.500804 -3.17692e-05 1 1008.46 696.568)" fill="#171717" stroke="#171717" class="dark:stroke-neutral-700"></rect>
                                </g>
                                <rect width="160.198" height="57.6556" transform="matrix(0.865561 0.500804 -3.17692e-05 -1 870.492 674.273)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <rect width="320.02" height="159.937" transform="matrix(0.865593 -0.500749 0.865593 0.500749 870.781 616.576)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                            </g>

                            <!-- Layered Card 2 (Vivid Blaze Orange #FF5500) -->
                            <g style="--index: 2;" transform="translate(0 -115.44)">
                                <rect width="159.971" height="320.106" transform="matrix(0.865593 0.500749 -0.865593 0.500749 1147.77 514.102)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <rect width="159.949" height="172.9668" transform="matrix(0.865561 0.500804 3.17692e-05 1 1147.79 341.08)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <g>
                                    <rect width="302.5" height="155.065" transform="matrix(0.865561 -0.500804 -3.17692e-05 1 1008.46 581.257)" fill="#FF5500" stroke="#171717" class="dark:stroke-neutral-700"></rect>
                                </g>
                                <rect width="160.198" height="172.9668" transform="matrix(0.865561 0.500804 -3.17692e-05 -1 870.492 674.273)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <rect width="320.02" height="159.937" transform="matrix(0.865593 -0.500749 0.865593 0.500749 870.781 501.265)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                            </g>

                            <!-- Layered Card 3 (AI Violet Gradient) -->
                            <g style="--index: 3;" transform="translate(0 -288.6)">
                                <rect width="159.971" height="320.106" transform="matrix(0.865593 0.500749 -0.865593 0.500749 1147.77 514.102)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <rect width="159.949" height="57.6556" transform="matrix(0.865561 0.500804 3.17692e-05 1 1147.79 456.391)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <g>
                                    <rect width="302.5" height="39.7538" transform="matrix(0.865561 -0.500804 -3.17692e-05 1 1008.46 696.568)" fill="url(#_r_t_-ai-gradient)" stroke="#171717" class="dark:stroke-neutral-700"></rect>
                                </g>
                                <rect width="160.198" height="57.6556" transform="matrix(0.865561 0.500804 -3.17692e-05 -1 870.492 674.273)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                                <rect width="320.02" height="159.937" transform="matrix(0.865593 -0.500749 0.865593 0.500749 870.781 616.576)" fill="white" fill-opacity="0.85" stroke="#171717" stroke-linejoin="bevel" class="dark:fill-neutral-900/90 dark:stroke-neutral-700"></rect>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>

            <!-- Noise Texture Overlay Filter -->
            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="pointer-events-none absolute inset-0 z-[99] overflow-hidden mix-blend-overlay opacity-25 dark:opacity-40" width="100%" height="100%" preserveAspectRatio="none">
                <defs>
                    <filter id="_r_f_-noise-filter">
                        <feTurbulence type="turbulence" baseFrequency="3" numOctaves="1" stitchTiles="stitch" result="noise"></feTurbulence>
                        <feColorMatrix type="matrix" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 0.8 0" result="coloredNoise"></feColorMatrix>
                    </filter>
                </defs>
                <rect width="100%" height="100%" filter="url(#_r_f_-noise-filter)"></rect>
            </svg>
        </div>
    </header>


    <!-- SECTION 2: Divider Strip Cutting Between Sections (Full-Width Top & Bottom Line, Flush Badges) -->
    <section class="w-full border-y border-neutral-200 bg-white dark:border-neutral-800 dark:bg-neutral-950 transition-colors duration-150">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 divide-y divide-neutral-200 border-x border-neutral-200 sm:grid-cols-3 sm:divide-y-0 sm:divide-x dark:divide-neutral-800 dark:border-neutral-800">
                
                <!-- 1. Years of Working Experience -->
                <div class="flex flex-col p-6 sm:p-8 text-left">
                    <div class="font-archivo text-3xl sm:text-4xl font-normal tracking-tight text-[#FF5500]">
                        {{ $yearsExperience }}{{ $yearsExperience > 0 ? '+' : '' }}
                    </div>
                    <span class="mt-2 font-archivo text-xs font-normal uppercase tracking-wider text-neutral-600 dark:text-neutral-400">
                        Years of Working Experience
                    </span>
                </div>

                <!-- 2. Project Contribution -->
                <div class="flex flex-col p-6 sm:p-8 text-left">
                    <div class="font-archivo text-3xl sm:text-4xl font-normal tracking-tight text-[#FF5500]">
                        {{ $projectContributions }}
                    </div>
                    <span class="mt-2 font-archivo text-xs font-normal uppercase tracking-wider text-neutral-600 dark:text-neutral-400">
                        Project Contribution
                    </span>
                </div>

                <!-- 3. Certification Earned -->
                <div class="flex flex-col p-6 sm:p-8 text-left">
                    <div class="font-archivo text-3xl sm:text-4xl font-normal tracking-tight text-[#FF5500]">
                        {{ $certificationsEarned }}
                    </div>
                    <span class="mt-2 font-archivo text-xs font-normal uppercase tracking-wider text-neutral-600 dark:text-neutral-400">
                        Certification Earned
                    </span>
                </div>

            </div>
        </div>
    </section>

@endsection
