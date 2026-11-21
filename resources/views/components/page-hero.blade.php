@props([
    'eyebrow' => '',
    'title' => '',
    'subtitle' => '',
    'ctaHref' => null,
    'cta' => null,
    'image' => null,
    'imageAlt' => '',
])

<section class="site-hero relative overflow-hidden bg-[#021070] text-[#fbfcfd]">
    @if ($image)
        <!-- High-Resolution Hero Background Image with Gradient Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <img src="{{ $image }}" alt="{{ $imageAlt ?: $title }}" class="h-full w-full object-cover object-center filter brightness-90 transition-transform duration-1000" loading="eager">
            <div class="absolute inset-0 bg-gradient-to-r from-[#010817]/80 via-[#010817]/42 to-[#010817]/10"></div>
            <div class="absolute inset-0 bg-[#021070]/10"></div>
        </div>
    @else
        <div class="absolute inset-0 paper-grid opacity-70"></div>
    @endif

    <!-- Ambient Back-Glow for Glass Refraction -->
    <div class="ambient-glow -top-24 -left-24 h-96 w-96 bg-[#01188f]/40"></div>
    <div class="ambient-glow bottom-0 right-1/4 h-80 w-80 bg-[#01188f]/30"></div>

    <div class="relative z-10 mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-4 pt-44 pb-16 sm:px-6 lg:flex-row lg:items-end lg:px-8 lg:pt-48 lg:pb-20">
        <div class="max-w-3xl reveal-from-bottom">
            @if ($eyebrow)
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#fbfcfd]/80">{{ $eyebrow }}</p>
            @endif
            <h1 class="mt-3 font-serif text-4xl font-semibold tracking-tight text-[#fbfcfd] sm:text-5xl drop-shadow-sm">{{ $title }}</h1>
            @if ($subtitle)
                <p class="mt-4 max-w-2xl text-base leading-relaxed text-[#fbfcfd]/85 drop-shadow-xs">{{ $subtitle }}</p>
            @endif
        </div>

        @if ($cta && $ctaHref)
            <a href="{{ $ctaHref }}" class="inline-flex shrink-0 items-center gap-2 rounded-full bg-[#01188f] px-6 py-3 text-sm font-bold text-[#fbfcfd] border border-[#fbfcfd]/25 shadow-lg transition-all duration-300 hover:bg-[#021070] hover:scale-105 active:scale-95">
                {{ $cta }}
            </a>
        @endif
    </div>
</section>
