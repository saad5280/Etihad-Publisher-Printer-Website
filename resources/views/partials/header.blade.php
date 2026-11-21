<div class="border-b border-[#fbfcfd]/10 bg-[#021070]/80 backdrop-blur-xl text-[12px] text-[#fbfcfd]/90 relative z-50">
    <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-2 px-4 py-2 sm:px-6 lg:flex-row lg:px-8">
        <div class="flex flex-wrap items-center justify-center gap-x-5 gap-y-1">
            <a href="mailto:{{ __('site.email') }}" class="hover:text-[#fbfcfd] transition">{{ __('site.email') }}</a>
            <span class="hidden sm:inline text-[#fbfcfd]/30">|</span>
            <span>{{ __('site.hours_short') }}</span>
        </div>
        <p class="font-urdu text-[#fbfcfd] font-semibold">{{ __('site.urdu_tagline') }}</p>
    </div>
</div>

<header class="site-header sticky top-0 z-50 border-b border-white/45 bg-white/55 backdrop-blur-2xl shadow-[0_8px_30px_rgb(2,16,112,0.08)] transition-all duration-300" data-site-header>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-[5.5rem] items-center gap-3 2xl:gap-6">
            <a href="{{ route('home') }}" class="group flex w-auto shrink-0 items-center gap-3 sm:w-[19rem] 2xl:w-[20rem]">
                <div class="relative size-14 shrink-0 overflow-hidden rounded-xl shadow-md">
                    <img src="{{ asset('images/logo.jpg') }}" alt="{{ __('site.brand_name') }}" class="size-full rounded-lg object-cover object-center">
                </div>
                <span class="site-wordmark hidden flex-col whitespace-nowrap text-start font-extrabold tracking-tight leading-tight transition-colors sm:flex">
                    <span class="text-[15px] 2xl:text-base">ETIHAD</span>
                    <span class="text-[13px] font-semibold 2xl:text-sm">Publishers &amp; Printers</span>
                </span>
            </a>

            <nav aria-label="Main navigation" class="hidden min-w-0 flex-1 -translate-x-4 items-center justify-evenly gap-1 text-[#fbfcfd] lg:flex">
                <a href="{{ route('home') }}" @class(['site-nav-link group flex min-w-[3.8rem] flex-col items-center justify-center gap-1 rounded-xl px-2.5 py-2 transition-all duration-300 hover:-translate-y-0.5 hover:bg-[#fbfcfd]/15', 'site-nav-current' => request()->routeIs('home')]) @if (request()->routeIs('home')) aria-current="page" @endif>
                    <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 9-7 9 7"/><path d="M5 9v12h14V9M9 21v-7h6v7"/></svg>
                    <span class="text-[10px] font-semibold leading-none">{{ __('site.nav_home') }}</span>
                </a>
                <a href="{{ route('about') }}" @class(['site-nav-link group flex min-w-[3.8rem] flex-col items-center justify-center gap-1 rounded-xl px-2.5 py-2 transition-all duration-300 hover:-translate-y-0.5 hover:bg-[#fbfcfd]/15', 'site-nav-current' => request()->routeIs('about')]) @if (request()->routeIs('about')) aria-current="page" @endif>
                    <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="10" cy="7" r="4"/><path d="M20 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    <span class="text-[10px] font-semibold leading-none">{{ __('site.nav_about') }}</span>
                </a>
                <a href="{{ route('publications') }}" @class(['site-nav-link group flex min-w-[3.8rem] flex-col items-center justify-center gap-1 rounded-xl px-2.5 py-2 transition-all duration-300 hover:-translate-y-0.5 hover:bg-[#fbfcfd]/15', 'site-nav-current' => request()->routeIs('publications')]) @if (request()->routeIs('publications')) aria-current="page" @endif>
                    <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7v14"/><path d="M3 18V5a2 2 0 0 1 2-2h4a3 3 0 0 1 3 3 3 3 0 0 1 3-3h4a2 2 0 0 1 2 2v13h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3H3Z"/></svg>
                    <span class="text-[10px] font-semibold leading-none">{{ __('site.nav_publications') }}</span>
                </a>
                <a href="{{ route('services') }}" @class(['site-nav-link group flex min-w-[3.8rem] flex-col items-center justify-center gap-1 rounded-xl px-2.5 py-2 transition-all duration-300 hover:-translate-y-0.5 hover:bg-[#fbfcfd]/15', 'site-nav-current' => request()->routeIs('services', 'machinery')]) @if (request()->routeIs('services', 'machinery')) aria-current="page" @endif>
                    <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M9 3.5h6M8 10l1.5 1.5L12 9M14 11h3M8 16l1.5 1.5L12 15M14 17h3"/></svg>
                    <span class="text-[10px] font-semibold leading-none">{{ __('site.nav_services') }}</span>
                </a>
                <a href="{{ route('distribution') }}" @class(['site-nav-link group flex min-w-[3.8rem] flex-col items-center justify-center gap-1 rounded-xl px-2.5 py-2 transition-all duration-300 hover:-translate-y-0.5 hover:bg-[#fbfcfd]/15', 'site-nav-current' => request()->routeIs('distribution')]) @if (request()->routeIs('distribution')) aria-current="page" @endif>
                    <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-5 5"/><path d="M15 9h4v4"/></svg>
                    <span class="text-[10px] font-semibold leading-none">{{ __('site.nav_distribution') }}</span>
                </a>
            </nav>

            <div class="ml-auto hidden shrink-0 items-center gap-2 sm:flex lg:ml-0 2xl:gap-3">
                <div class="site-language-control">
                    <a href="{{ route('lang.switch', app()->getLocale() === 'ur' ? 'en' : 'ur') }}" aria-label="{{ app()->getLocale() === 'ur' ? 'زبان انگریزی میں تبدیل کریں' : 'Switch language to Urdu' }}" title="{{ app()->getLocale() === 'ur' ? 'Switch to English' : 'Switch to Urdu' }}" class="inline-flex items-center gap-1.5 rounded-full border border-white/30 bg-[#021070]/25 px-2.5 py-2 text-xs font-bold text-[#fbfcfd] backdrop-blur-md transition hover:bg-[#021070]/40">
                        <svg aria-hidden="true" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10Z"/></svg>
                        <span>{{ app()->getLocale() === 'ur' ? 'اردو' : 'EN' }}</span>
                    </a>
                </div>
                <a href="{{ route('contact') }}" title="Contact Us" aria-label="Contact Us" class="inline-flex size-10 items-center justify-center rounded-full bg-[#021070]/20 text-[#fbfcfd] transition-all duration-300 hover:scale-105 hover:bg-[#021070]/40 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                    <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                </a>
            </div>

            <a href="{{ route('contact') }}" title="Contact Us" aria-label="Contact Us" class="ml-auto inline-flex size-10 shrink-0 items-center justify-center rounded-full bg-[#021070]/20 text-[#fbfcfd] transition-all duration-300 hover:scale-105 hover:bg-[#021070]/40 hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white sm:hidden">
                <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
            </a>

            <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="site-menu-toggle rounded-xl border border-[#fbfcfd]/30 bg-[#021070]/25 p-2 text-[#fbfcfd] backdrop-blur-md transition hover:bg-[#021070]/40 lg:hidden" aria-label="Menu" :aria-expanded="mobileMenuOpen.toString()">
                <svg x-show="!mobileMenuOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="mobileMenuOpen" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    <div x-show="mobileMenuOpen" x-cloak x-transition class="border-t border-[#fbfcfd]/15 bg-[#021070]/95 px-4 py-4 backdrop-blur-2xl lg:hidden">
        <nav aria-label="Mobile navigation" class="grid grid-cols-6 gap-2 sm:grid-cols-5">
            <a href="{{ route('home') }}" @class(['site-nav-link col-span-2 flex flex-col items-center justify-center gap-1.5 rounded-xl px-2 py-3 text-[#fbfcfd] transition hover:bg-white/10 sm:col-span-1', 'site-nav-current' => request()->routeIs('home')]) @if (request()->routeIs('home')) aria-current="page" @endif>
                <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 9-7 9 7"/><path d="M5 9v12h14V9M9 21v-7h6v7"/></svg><span class="text-[10px] font-semibold leading-none">{{ __('site.nav_home') }}</span>
            </a>
            <a href="{{ route('about') }}" @class(['site-nav-link col-span-2 flex flex-col items-center justify-center gap-1.5 rounded-xl px-2 py-3 text-[#fbfcfd] transition hover:bg-white/10 sm:col-span-1', 'site-nav-current' => request()->routeIs('about')]) @if (request()->routeIs('about')) aria-current="page" @endif>
                <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="10" cy="7" r="4"/><path d="M20 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/></svg><span class="text-[10px] font-semibold leading-none">{{ __('site.nav_about') }}</span>
            </a>
            <a href="{{ route('publications') }}" @class(['site-nav-link col-span-2 flex flex-col items-center justify-center gap-1.5 rounded-xl px-2 py-3 text-[#fbfcfd] transition hover:bg-white/10 sm:col-span-1', 'site-nav-current' => request()->routeIs('publications')]) @if (request()->routeIs('publications')) aria-current="page" @endif>
                <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 7v14"/><path d="M3 18V5a2 2 0 0 1 2-2h4a3 3 0 0 1 3 3 3 3 0 0 1 3-3h4a2 2 0 0 1 2 2v13h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3H3Z"/></svg><span class="text-[10px] font-semibold leading-none">{{ __('site.nav_publications') }}</span>
            </a>
            <a href="{{ route('services') }}" @class(['site-nav-link col-span-2 col-start-2 flex flex-col items-center justify-center gap-1.5 rounded-xl px-2 py-3 text-[#fbfcfd] transition hover:bg-white/10 sm:col-span-1 sm:col-start-auto', 'site-nav-current' => request()->routeIs('services', 'machinery')]) @if (request()->routeIs('services', 'machinery')) aria-current="page" @endif>
                <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="3" width="16" height="18" rx="2"/><path d="M9 3.5h6M8 10l1.5 1.5L12 9M14 11h3M8 16l1.5 1.5L12 15M14 17h3"/></svg><span class="text-[10px] font-semibold leading-none">{{ __('site.nav_services') }}</span>
            </a>
            <a href="{{ route('distribution') }}" @class(['site-nav-link col-span-2 col-start-4 flex flex-col items-center justify-center gap-1.5 rounded-xl px-2 py-3 text-[#fbfcfd] transition hover:bg-white/10 sm:col-span-1 sm:col-start-auto', 'site-nav-current' => request()->routeIs('distribution')]) @if (request()->routeIs('distribution')) aria-current="page" @endif>
                <svg aria-hidden="true" class="size-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m19 9-5 5-4-4-5 5"/><path d="M15 9h4v4"/></svg><span class="text-[10px] font-semibold leading-none">{{ __('site.nav_distribution') }}</span>
            </a>
        </nav>
        <div class="mt-3 flex items-center justify-between border-t border-[#fbfcfd]/15 pt-3">
            <div class="site-language-control">
                <a href="{{ route('lang.switch', app()->getLocale() === 'ur' ? 'en' : 'ur') }}" aria-label="{{ app()->getLocale() === 'ur' ? 'زبان انگریزی میں تبدیل کریں' : 'Switch language to Urdu' }}" title="{{ app()->getLocale() === 'ur' ? 'Switch to English' : 'Switch to Urdu' }}" class="inline-flex items-center gap-1.5 rounded-full border border-white/30 bg-white/10 px-2.5 py-2 text-xs font-bold text-[#fbfcfd] transition hover:bg-white/20">
                    <svg aria-hidden="true" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10Z"/></svg>{{ app()->getLocale() === 'ur' ? 'اردو' : 'EN' }}
                </a>
            </div>
            <span class="flex flex-col text-end font-semibold leading-tight text-[#fbfcfd]/80"><span class="text-[11px] font-extrabold tracking-tight">ETIHAD</span><span class="text-[10px]">Publishers &amp; Printers</span></span>
        </div>
    </div>
</header>
