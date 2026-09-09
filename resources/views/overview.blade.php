@extends('layouts.app')

@section('content')
<main class="space-y-0">
    <!-- ========================================================================================= -->
    <!-- SECTION 0: HERO HEADER (Photo Placeholder Strip & Name Banner)                           -->
    <!-- ========================================================================================= -->
    <header class="relative z-0 bg-white dark:bg-neutral-950 transition-colors duration-150 border-b border-neutral-200 dark:border-neutral-800 overflow-hidden h-[calc(100vh-4rem)] h-[calc(100dvh-4rem)] min-h-[480px] flex flex-col">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full h-full flex flex-col justify-between pt-4 pb-6 sm:pt-6 sm:pb-8">
            
            <!-- Full-Width Name Banner on top -->
            <div class="w-full shrink-0 mb-4 sm:mb-6">
                <h1 class="sr-only">TUBAGUS AULIA AARIZ HIBATULLAH HAYKEL</h1>
                <svg viewBox="0 0 1350 64" class="w-full h-auto max-h-16 sm:max-h-20 block select-none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <text x="0" y="48"
                          class="font-archivo font-medium fill-[#FF5500]"
                          font-size="52"
                          textLength="1350"
                          lengthAdjust="spacing">
                        TUBAGUS AULIA AARIZ HIBATULLAH HAYKEL
                    </text>
                </svg>
            </div>

            <!-- 5 High Vertical Rectangles with 3:1 photo-to-gap ratio (Static Visual Placeholders) -->
            <div class="grid grid-cols-5 w-full grow min-h-0" style="gap: calc(100% / 19);">
                @foreach($heroPhotos as $photo)
                    <div class="group relative flex flex-col justify-end overflow-hidden border border-neutral-200 dark:border-neutral-800 bg-neutral-100 dark:bg-neutral-900/60 shadow-2xs transition-all duration-300 hover:border-[#FF5500] dark:hover:border-[#FF5500] h-full w-full">
                        <!-- Static Visual Photo Placeholder Canvas -->
                        <div class="absolute inset-0 flex flex-col items-center justify-center p-2 text-center bg-neutral-50/60 dark:bg-neutral-900/50">
                            <div class="rounded-full bg-neutral-200/70 dark:bg-neutral-800/80 p-2 sm:p-2.5 mb-1.5 text-neutral-400 dark:text-neutral-500 group-hover:text-[#FF5500] group-hover:scale-110 transition-all duration-300">
                                <svg class="size-4 sm:size-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                </svg>
                            </div>
                            <span class="font-mono text-[9px] sm:text-[11px] text-neutral-400 dark:text-neutral-500 tracking-wider uppercase font-medium">
                                Photo 0{{ $photo['id'] }}
                            </span>
                        </div>

                        <!-- Bottom Monospace Label Overlay -->
                        <div class="relative z-10 p-2 sm:p-3 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white w-full">
                            <p class="font-mono text-[9px] sm:text-[11px] md:text-xs font-medium tracking-tight truncate text-neutral-200">
                                {{ $photo['label'] }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </header>

    <!-- ========================================================================================= -->
    <!-- SECTION 1: BIO / DESCRIPTION                                                             -->
    <!-- ========================================================================================= -->
    <section class="relative z-0 bg-white dark:bg-neutral-950 transition-colors duration-150 border-b border-neutral-200 dark:border-neutral-800" id="bio">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="pt-12 pb-16 sm:pt-16 sm:pb-20">
                <div class="grid grid-cols-12 gap-4 lg:gap-6 xl:gap-x-10">
                    
                    <h2 class="col-span-12 mb-8 text-3xl md:text-4xl lg:text-5xl font-medium tracking-tight text-neutral-900 dark:text-white font-archivo">
                        Description
                    </h2>

                    <div class="col-span-12 w-full space-y-4">
                        @foreach($bio as $paragraph)
                            <p class="text-base sm:text-lg md:text-xl text-neutral-600 dark:text-neutral-300 font-inter leading-relaxed text-justify w-full">
                                {{ $paragraph }}
                            </p>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================================= -->
    <!-- SECTION 2: EXPERIENCE ACCORDION                                                           -->
    <!-- ========================================================================================= -->
    <section class="relative z-0 bg-white dark:bg-neutral-950 transition-colors duration-150 border-b border-neutral-200 dark:border-neutral-800" id="experience">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="pt-12 pb-16 sm:pt-16 sm:pb-24">
                <div class="grid grid-cols-12 gap-4 lg:gap-6 xl:gap-x-10">
                    
                    <h2 class="col-span-12 mb-8 text-3xl md:text-4xl lg:text-5xl font-medium tracking-tight text-neutral-900 dark:text-white font-archivo">
                        Experience
                    </h2>

                    <div class="col-span-12 space-y-4" x-data="{ activeIndex: 0 }">
                        @foreach($experiences as $index => $item)
                            <div class="rounded-xl border bg-white p-5 sm:p-6 shadow-2xs transition-colors duration-150 hover:border-[#FF5500] dark:hover:border-[#FF5500] dark:bg-neutral-900/50"
                                 :class="activeIndex === {{ $index }} ? 'border-[#FF5500]/40 dark:border-[#FF5500]/50 ring-1 ring-[#FF5500]/20' : 'border-neutral-200 dark:border-neutral-800'">
                                
                                <!-- Card Header (Clickable toggle) -->
                                <div @click="activeIndex = activeIndex === {{ $index }} ? null : {{ $index }}" class="flex items-center justify-between gap-6 cursor-pointer select-none">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-white font-archivo text-base sm:text-lg">
                                            {{ $item['role'] }}
                                        </p>
                                        <p class="text-neutral-500 dark:text-neutral-400 font-inter text-sm mt-0.5">
                                            {{ $item['institution'] }}
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-4 shrink-0">
                                        <span class="font-archivo text-lg sm:text-2xl font-medium tracking-tight text-neutral-500 dark:text-neutral-400 select-none">
                                            {{ $item['date_range'] }}
                                        </span>
                                        <button type="button" class="text-neutral-400 hover:text-neutral-700 dark:text-neutral-500 dark:hover:text-neutral-200 transition-transform duration-200" :class="activeIndex === {{ $index }} ? 'rotate-180 text-[#FF5500] dark:text-[#FF5500]' : 'rotate-0'" aria-label="Toggle details">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Accordion Dropdown Content -->
                                <div class="grid transition-all duration-300 ease-out" :class="activeIndex === {{ $index }} ? 'grid-rows-[1fr] opacity-100 mt-5 pt-5 border-t border-neutral-100 dark:border-neutral-800/80' : 'grid-rows-[0fr] opacity-0'">
                                    <div class="overflow-hidden space-y-4">
                                        <!-- Description -->
                                        <div>
                                            <h4 class="text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 font-semibold mb-1.5">
                                                Description
                                            </h4>
                                            <p class="text-sm text-neutral-600 dark:text-neutral-300 font-inter leading-relaxed text-justify">
                                                {{ $item['description'] }}
                                            </p>
                                        </div>

                                        <!-- Tag Categories: Domain, Skills, Technology (Plain Static Badges) -->
                                        <div class="space-y-2.5 pt-2 border-t border-neutral-100/70 dark:border-neutral-800/40">
                                            @if(!empty($item['tags']['domain']))
                                                <div class="flex flex-col sm:flex-row sm:items-center gap-1.5 sm:gap-3">
                                                    <span class="w-28 shrink-0 text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 font-semibold">
                                                        Domain
                                                    </span>
                                                    <div class="flex flex-wrap gap-1.5">
                                                        @foreach($item['tags']['domain'] as $tag)
                                                            <span class="inline-flex items-center rounded-md bg-neutral-100 dark:bg-neutral-800 px-2.5 py-0.5 text-xs font-mono font-medium text-neutral-700 dark:text-neutral-300 border border-neutral-200/80 dark:border-neutral-700/60 transition-colors duration-150 hover:bg-orange-500/10 hover:text-[#FF5500] dark:hover:text-orange-400 hover:border-[#FF5500]/30 select-none cursor-default">
                                                                {{ $tag }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif

                                            @if(!empty($item['tags']['skills']))
                                                <div class="flex flex-col sm:flex-row sm:items-center gap-1.5 sm:gap-3">
                                                    <span class="w-28 shrink-0 text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 font-semibold">
                                                        Skills
                                                    </span>
                                                    <div class="flex flex-wrap gap-1.5">
                                                        @foreach($item['tags']['skills'] as $tag)
                                                            <span class="inline-flex items-center rounded-md bg-neutral-100 dark:bg-neutral-800 px-2.5 py-0.5 text-xs font-mono font-medium text-neutral-700 dark:text-neutral-300 border border-neutral-200/80 dark:border-neutral-700/60 transition-colors duration-150 hover:bg-orange-500/10 hover:text-[#FF5500] dark:hover:text-orange-400 hover:border-[#FF5500]/30 select-none cursor-default">
                                                                {{ $tag }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif

                                            @if(!empty($item['tags']['technology']))
                                                <div class="flex flex-col sm:flex-row sm:items-center gap-1.5 sm:gap-3">
                                                    <span class="w-28 shrink-0 text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 font-semibold">
                                                        Technology
                                                    </span>
                                                    <div class="flex flex-wrap gap-1.5">
                                                        @foreach($item['tags']['technology'] as $tag)
                                                            <span class="inline-flex items-center rounded-md bg-neutral-100 dark:bg-neutral-800 px-2.5 py-0.5 text-xs font-mono font-medium text-neutral-700 dark:text-neutral-300 border border-neutral-200/80 dark:border-neutral-700/60 transition-colors duration-150 hover:bg-orange-500/10 hover:text-[#FF5500] dark:hover:text-orange-400 hover:border-[#FF5500]/30 select-none cursor-default">
                                                                {{ $tag }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ========================================================================================= -->
    <!-- SECTION 3: EDUCATION ACCORDION                                                            -->
    <!-- ========================================================================================= -->
    <section class="relative z-0 bg-white dark:bg-neutral-950 transition-colors duration-150" id="education">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="pt-12 pb-16 sm:pt-16 sm:pb-24">
                <div class="grid grid-cols-12 gap-4 lg:gap-6 xl:gap-x-10">
                    
                    <h2 class="col-span-12 mb-8 text-3xl md:text-4xl lg:text-5xl font-medium tracking-tight text-neutral-900 dark:text-white font-archivo">
                        Education
                    </h2>

                    <div class="col-span-12 space-y-4" x-data="{ activeIndex: 0 }">
                        @foreach($educations as $index => $item)
                            <div class="rounded-xl border bg-white p-5 sm:p-6 shadow-2xs transition-colors duration-150 hover:border-[#FF5500] dark:hover:border-[#FF5500] dark:bg-neutral-900/50"
                                 :class="activeIndex === {{ $index }} ? 'border-[#FF5500]/40 dark:border-[#FF5500]/50 ring-1 ring-[#FF5500]/20' : 'border-neutral-200 dark:border-neutral-800'">
                                
                                <!-- Card Header (Clickable toggle) -->
                                <div @click="activeIndex = activeIndex === {{ $index }} ? null : {{ $index }}" class="flex items-center justify-between gap-6 cursor-pointer select-none">
                                    <div>
                                        <p class="font-medium text-neutral-900 dark:text-white font-archivo text-base sm:text-lg">
                                            {{ $item['role'] }}
                                        </p>
                                        <p class="text-neutral-500 dark:text-neutral-400 font-inter text-sm mt-0.5">
                                            {{ $item['institution'] }}
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-4 shrink-0">
                                        <span class="font-archivo text-lg sm:text-2xl font-medium tracking-tight text-neutral-500 dark:text-neutral-400 select-none">
                                            {{ $item['date_range'] }}
                                        </span>
                                        <button type="button" class="text-neutral-400 hover:text-neutral-700 dark:text-neutral-500 dark:hover:text-neutral-200 transition-transform duration-200" :class="activeIndex === {{ $index }} ? 'rotate-180 text-[#FF5500] dark:text-[#FF5500]' : 'rotate-0'" aria-label="Toggle details">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <!-- Accordion Dropdown Content -->
                                <div class="grid transition-all duration-300 ease-out" :class="activeIndex === {{ $index }} ? 'grid-rows-[1fr] opacity-100 mt-5 pt-5 border-t border-neutral-100 dark:border-neutral-800/80' : 'grid-rows-[0fr] opacity-0'">
                                    <div class="overflow-hidden space-y-4">
                                        <!-- Description -->
                                        <div>
                                            <h4 class="text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 font-semibold mb-1.5">
                                                Description
                                            </h4>
                                            <p class="text-sm text-neutral-600 dark:text-neutral-300 font-inter leading-relaxed text-justify">
                                                {{ $item['description'] }}
                                            </p>
                                        </div>

                                        <!-- Tag Categories: Domain, Skills, Technology (Plain Static Badges) -->
                                        <div class="space-y-2.5 pt-2 border-t border-neutral-100/70 dark:border-neutral-800/40">
                                            @if(!empty($item['tags']['domain']))
                                                <div class="flex flex-col sm:flex-row sm:items-center gap-1.5 sm:gap-3">
                                                    <span class="w-28 shrink-0 text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 font-semibold">
                                                        Domain
                                                    </span>
                                                    <div class="flex flex-wrap gap-1.5">
                                                        @foreach($item['tags']['domain'] as $tag)
                                                            <span class="inline-flex items-center rounded-md bg-neutral-100 dark:bg-neutral-800 px-2.5 py-0.5 text-xs font-mono font-medium text-neutral-700 dark:text-neutral-300 border border-neutral-200/80 dark:border-neutral-700/60 transition-colors duration-150 hover:bg-orange-500/10 hover:text-[#FF5500] dark:hover:text-orange-400 hover:border-[#FF5500]/30 select-none cursor-default">
                                                                {{ $tag }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif

                                            @if(!empty($item['tags']['skills']))
                                                <div class="flex flex-col sm:flex-row sm:items-center gap-1.5 sm:gap-3">
                                                    <span class="w-28 shrink-0 text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 font-semibold">
                                                        Skills
                                                    </span>
                                                    <div class="flex flex-wrap gap-1.5">
                                                        @foreach($item['tags']['skills'] as $tag)
                                                            <span class="inline-flex items-center rounded-md bg-neutral-100 dark:bg-neutral-800 px-2.5 py-0.5 text-xs font-mono font-medium text-neutral-700 dark:text-neutral-300 border border-neutral-200/80 dark:border-neutral-700/60 transition-colors duration-150 hover:bg-orange-500/10 hover:text-[#FF5500] dark:hover:text-orange-400 hover:border-[#FF5500]/30 select-none cursor-default">
                                                                {{ $tag }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif

                                            @if(!empty($item['tags']['technology']))
                                                <div class="flex flex-col sm:flex-row sm:items-center gap-1.5 sm:gap-3">
                                                    <span class="w-28 shrink-0 text-xs font-mono uppercase tracking-wider text-neutral-400 dark:text-neutral-500 font-semibold">
                                                        Technology
                                                    </span>
                                                    <div class="flex flex-wrap gap-1.5">
                                                        @foreach($item['tags']['technology'] as $tag)
                                                            <span class="inline-flex items-center rounded-md bg-neutral-100 dark:bg-neutral-800 px-2.5 py-0.5 text-xs font-mono font-medium text-neutral-700 dark:text-neutral-300 border border-neutral-200/80 dark:border-neutral-700/60 transition-colors duration-150 hover:bg-orange-500/10 hover:text-[#FF5500] dark:hover:text-orange-400 hover:border-[#FF5500]/30 select-none cursor-default">
                                                                {{ $tag }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection
