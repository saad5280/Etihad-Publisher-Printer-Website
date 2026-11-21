<x-layouts.app>
    <x-slot:title>{{ __('site.nav_about') }} | {{ __('site.brand_name') }}</x-slot:title>

    <x-page-hero
        :eyebrow="__('site.about_hero_eyebrow')"
        :title="__('site.about_hero_title')"
        :subtitle="__('site.about_hero_subtitle')"
        :ctaHref="route('contact')"
        :cta="__('site.about_cta')"
        :image="asset('images/stock/hero-about.jpg')"
        :imageAlt="__('site.about_hero_title')"
    />

    <section class="relative overflow-hidden bg-[#fbfcfd] py-16 sm:py-20 text-[#021070]">
        <!-- Subtle Ambient Refraction Orbs -->
        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/10"></div>
        <div class="ambient-glow bottom-10 right-0 h-80 w-80 bg-[#01188f]/10"></div>

        <div class="relative z-10 mx-auto grid max-w-7xl items-stretch gap-8 px-4 sm:px-6 lg:grid-cols-12 lg:px-8">
            <!-- Left Column: Corporate Narrative & Strategic Pillars -->
            <div class="flex flex-col justify-between space-y-5 lg:col-span-7 reveal-from-left sda-slide-left">
                <div>
                    <div class="flex items-center gap-3">
                        <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#01188f]">{{ __('site.about_tag') }}</span>
                        <span class="h-0.5 w-10 bg-[#01188f]"></span>
                    </div>
                    <h2 class="mt-2.5 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl">{{ __('site.corporate_narrative_title') }}</h2>
                    <p class="mt-2.5 text-sm leading-relaxed text-[#021070]/85 sm:text-base">
                        {{ __('site.corporate_narrative_p1') }}
                    </p>
                </div>

                <!-- Structured Glass Cards: Sleek, High-Impact & Balanced -->
                <div class="space-y-4">
                    <!-- Single-Roof Guarantee Card -->
                    <div class="glass-card rounded-2xl p-5 sm:p-6 framer-card">
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#01188f] text-[#fbfcfd] shadow-sm">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            </span>
                            <div class="flex-1">
                                <h3 class="text-base font-bold text-[#021070] sm:text-lg">{{ __('site.single_roof_guarantee_title') }}</h3>
                                <p class="mt-1 text-xs leading-relaxed text-[#021070]/80 sm:text-sm">{{ __('site.single_roof_guarantee_desc') }}</p>
                                <div class="mt-3 flex flex-wrap gap-2 pt-2 border-t border-[#01188f]/10 text-xs">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-[#01188f]/10 px-3 py-1 font-semibold text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                        {{ __('site.single_roof_point_1') }}
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-[#01188f]/10 px-3 py-1 font-semibold text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                        {{ __('site.single_roof_point_2') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Strategic Material Advantage Card -->
                    <div class="glass-card rounded-2xl p-5 sm:p-6 framer-card">
                        <div class="flex items-start gap-4">
                            <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-[#01188f] text-[#fbfcfd] shadow-sm">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            </span>
                            <div class="flex-1">
                                <h3 class="text-base font-bold text-[#021070] sm:text-lg">{{ __('site.strategic_material_title') }}</h3>
                                <p class="mt-1 text-xs leading-relaxed text-[#021070]/80 sm:text-sm">{{ __('site.strategic_material_desc') }}</p>
                                <div class="mt-3 flex flex-wrap gap-2 pt-2 border-t border-[#01188f]/10 text-xs">
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-[#01188f]/10 px-3 py-1 font-semibold text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                        {{ __('site.material_point_1') }}
                                    </span>
                                    <span class="inline-flex items-center gap-1.5 rounded-full bg-[#01188f]/10 px-3 py-1 font-semibold text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                        {{ __('site.material_point_2') }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Three Key Pillars Badge Row -->
                <div class="grid grid-cols-1 gap-3 pt-1 sm:grid-cols-3">
                    <div class="glass-pill rounded-xl px-3.5 py-2.5 text-center">
                        <span class="block text-xs font-bold text-[#021070]">{{ __('site.about_highlight_1') }}</span>
                    </div>
                    <div class="glass-pill rounded-xl px-3.5 py-2.5 text-center">
                        <span class="block text-xs font-bold text-[#021070]">{{ __('site.about_highlight_2') }}</span>
                    </div>
                    <div class="glass-pill rounded-xl px-3.5 py-2.5 text-center">
                        <span class="block text-xs font-bold text-[#021070]">{{ __('site.about_highlight_3') }}</span>
                    </div>
                </div>

            </div>

            <!-- Right Column: Pre-Press Studio & Institutional Profile in Glass Panels -->
            <aside class="flex flex-col justify-between space-y-5 lg:col-span-5 reveal-from-right sda-slide-right">
                <div class="glass-card overflow-hidden rounded-3xl framer-card">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="{{ asset('images/stock/editorial-publishing-studio.jpg') }}" alt="Etihad Editorial and Pre-Press Operations Studio" class="h-full w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold text-[#fbfcfd]">
                                {{ __('site.editorial_studio_badge') }}
                            </span>
                        </div>
                    </div>
                    <div class="p-5 sm:p-6">
                        <p class="text-xs font-bold uppercase tracking-wider text-[#01188f]">{{ __('site.single_roof_badge') }}</p>
                        <h4 class="mt-1 text-base font-bold text-[#021070]">{{ __('site.pedagogical_review_title') }}</h4>
                        <p class="mt-2 text-xs leading-relaxed text-[#021070]/80">{{ __('site.pedagogical_review_desc') }}</p>
                    </div>
                </div>

                <div class="glass-card rounded-3xl p-6 framer-card">
                    <div class="flex items-center gap-4">
                        <img src="{{ asset('images/logo.jpg') }}" alt="{{ __('site.brand_name') }}" class="h-14 w-14 rounded-2xl shadow-sm border border-[#01188f]/20">
                        <div>
                            <h3 class="text-lg font-bold text-[#021070]">{{ __('site.brand_name') }}</h3>
                            <p class="text-xs font-bold text-[#01188f] uppercase tracking-wider">{{ __('site.dl_industry_val') }}</p>
                        </div>
                    </div>
                    <dl class="mt-5 space-y-2 text-xs sm:text-sm">
                        <div class="flex justify-between gap-4 border-b border-[#01188f]/10 pb-2"><dt class="text-[#021070]/70">{{ __('site.dl_industry') }}</dt><dd class="text-end font-semibold text-[#021070]">{{ __('site.dl_industry_val') }}</dd></div>
                        <div class="flex justify-between gap-4 border-b border-[#01188f]/10 pb-2"><dt class="text-[#021070]/70">{{ __('site.dl_leadership') }}</dt><dd class="text-end font-semibold text-[#021070]">{{ __('site.dl_leadership_val') }}</dd></div>
                        <div class="flex justify-between gap-4 border-b border-[#01188f]/10 pb-2"><dt class="text-[#021070]/70">{{ __('site.dl_plant') }}</dt><dd class="text-end font-semibold text-[#021070]">{{ __('site.dl_plant_val') }}</dd></div>
                        <div class="flex justify-between gap-4 pt-1"><dt class="text-[#021070]/70">{{ __('site.dl_trade') }}</dt><dd class="text-end font-semibold text-[#021070]">{{ __('site.dl_trade_val') }}</dd></div>
                    </dl>
                    <a href="{{ route('contact') }}" class="mt-5 block rounded-full bg-[#01188f] py-2.5 text-center text-xs sm:text-sm font-bold text-[#fbfcfd] transition-all duration-300 hover:bg-[#021070] hover:scale-[1.02]">{{ __('site.inquire_school_supply') }}</a>
                </div>
            </aside>
        </div>
    </section>

    <!-- Manufacturing Floor & Press Highlights -->
    <section class="relative overflow-hidden border-t border-[#01188f]/15 bg-[#fbfcfd] py-16 text-[#021070]">
        <div class="ambient-glow top-1/2 left-1/3 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center reveal-from-bottom">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#01188f]">{{ __('site.mfg_floor_tag') }}</span>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl">{{ __('site.mfg_floor_title') }}</h2>
                <p class="mx-auto mt-3 max-w-2xl text-sm text-[#021070]/80 sm:text-base">{{ __('site.mfg_floor_desc') }}</p>
            </div>

            <div class="glass-panel overflow-hidden rounded-3xl shadow-md reveal-scale">
                <div class="relative aspect-[16/8] w-full overflow-hidden bg-[#021070]">
                    <img src="{{ asset('images/stock/pressmaster-inspection.jpg') }}" alt="Master Press Operator Inspecting Production Signatures at Etihad Plant" class="h-full w-full object-cover" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 start-6">
                        <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-4 py-1.5 text-xs font-bold text-[#fbfcfd]">
                            {{ __('site.mfg_floor_badge') }}
                        </span>
                    </div>
                </div>
                <div class="grid divide-y divide-[#01188f]/15 bg-transparent p-6 text-center sm:grid-cols-3 sm:divide-x sm:divide-y-0">
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]">{{ __('site.mfg_col_1_tag') }}</span>
                        <p class="mt-1 text-base font-bold text-[#021070]">{{ __('site.mfg_col_1_title') }}</p>
                        <p class="mt-1 text-xs text-[#021070]/70">{{ __('site.mfg_col_1_desc') }}</p>
                    </div>
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]">{{ __('site.mfg_col_2_tag') }}</span>
                        <p class="mt-1 text-base font-bold text-[#021070]">{{ __('site.mfg_col_2_title') }}</p>
                        <p class="mt-1 text-xs text-[#021070]/70">{{ __('site.mfg_col_2_desc') }}</p>
                    </div>
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]">{{ __('site.mfg_col_3_tag') }}</span>
                        <p class="mt-1 text-base font-bold text-[#021070]">{{ __('site.mfg_col_3_title') }}</p>
                        <p class="mt-1 text-xs text-[#021070]/70">{{ __('site.mfg_col_3_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Customer Segments -->
    <section class="border-t border-[#01188f]/15 bg-[#fbfcfd] py-16 text-[#021070]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center font-serif text-3xl font-semibold text-[#021070] reveal-from-bottom">{{ __('site.customer_segments_title') }}</h2>
            <div class="mt-10 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['site.segment_1_title', 'site.segment_1_desc'],
                    ['site.segment_2_title', 'site.segment_2_desc'],
                    ['site.segment_3_title', 'site.segment_3_desc'],
                    ['site.segment_4_title', 'site.segment_4_desc'],
                ] as $i => $segment)
                    <article class="glass-card rounded-2xl p-6 framer-card reveal-from-bottom delay-{{ ($i + 1) * 100 }}">
                        <span class="font-serif text-3xl font-bold text-[#01188f]">0{{ $i + 1 }}</span>
                        <h3 class="mt-3 font-bold text-[#021070]">{{ __($segment[0]) }}</h3>
                        <p class="mt-2 text-sm text-[#021070]/80">{{ __($segment[1]) }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.app>
