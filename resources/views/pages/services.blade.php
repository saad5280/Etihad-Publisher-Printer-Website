<x-layouts.app>
    <x-slot:title>{{ __('site.nav_services_machinery') }} | {{ __('site.brand_name') }}</x-slot:title>

    <x-page-hero
        :eyebrow="__('site.services_hero_eyebrow')"
        :title="__('site.services_hero_title')"
        :subtitle="__('site.services_hero_subtitle')"
        :ctaHref="route('rfq')"
        :cta="__('site.services_hero_cta')"
        :image="asset('images/stock/hero-services.jpg')"
        :imageAlt="__('site.services_hero_title')"
    />

    <!-- COMBINED SERVICES & MACHINERY SECTION -->
    <section id="services-machinery" class="relative overflow-hidden scroll-mt-40 bg-[#fbfcfd] py-20 text-[#021070]">
        <div id="machinery" class="scroll-mt-40"></div>
        <div id="services" class="scroll-mt-40"></div>

        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 reveal-from-bottom">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#01188f]">{{ __('site.services_hero_eyebrow') }}</span>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl">{{ __('site.services_section_title') }}</h2>
                <p class="mt-3 max-w-2xl text-sm text-[#021070]/80 sm:text-base">{{ __('site.services_section_desc') }}</p>
            </div>

            <!-- Panoramic Production Showcase in Glass Frame -->
            <div class="glass-panel mb-14 overflow-hidden rounded-3xl p-2 shadow-md reveal-scale">
                <div class="relative aspect-[16/7] w-full overflow-hidden rounded-2xl bg-[#021070]">
                    <img src="{{ asset('images/stock/industrial-press-line.jpg') }}" alt="Etihad Plant High-Capacity Continuous Printing Press Line" class="h-full w-full object-cover" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 start-6">
                        <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-4 py-1 text-xs font-bold text-[#fbfcfd]">
                            {{ __('site.panoramic_badge') }}
                        </span>
                    </div>
                </div>
                <div class="grid divide-y divide-[#01188f]/15 bg-transparent p-5 sm:grid-cols-3 sm:divide-x sm:divide-y-0 text-center">
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]">{{ __('site.panoramic_col_1_tag') }}</span>
                        <p class="mt-1 text-sm font-bold text-[#021070]">{{ __('site.panoramic_col_1_title') }}</p>
                        <p class="mt-0.5 text-xs text-[#021070]/70">{{ __('site.panoramic_col_1_desc') }}</p>
                    </div>
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]">{{ __('site.panoramic_col_2_tag') }}</span>
                        <p class="mt-1 text-sm font-bold text-[#021070]">{{ __('site.panoramic_col_2_title') }}</p>
                        <p class="mt-0.5 text-xs text-[#021070]/70">{{ __('site.panoramic_col_2_desc') }}</p>
                    </div>
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]">{{ __('site.panoramic_col_3_tag') }}</span>
                        <p class="mt-1 text-sm font-bold text-[#021070]">{{ __('site.panoramic_col_3_title') }}</p>
                        <p class="mt-0.5 text-xs text-[#021070]/70">{{ __('site.panoramic_col_3_desc') }}</p>
                    </div>
                </div>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @php
                    $offerings = [
                        [
                            'id' => 'offset',
                            'service' => 'service_offset_title',
                            'machine' => 'service_offset_machine',
                            'category' => 'service_offset_category',
                            'badge' => 'service_offset_badge',
                            'image' => 'images/machinery/machine-heidelberg.jpg',
                            'description' => 'service_offset_desc',
                            'technical' => 'service_offset_tech',
                            'apps' => 'service_offset_apps',
                            'speed' => 'service_offset_speed',
                        ],
                        [
                            'id' => 'monochrome',
                            'service' => 'service_mono_title',
                            'machine' => 'service_mono_machine',
                            'category' => 'service_mono_category',
                            'badge' => 'service_mono_badge',
                            'image' => 'images/machinery/machine-monochrome.jpg',
                            'description' => 'service_mono_desc',
                            'technical' => 'service_mono_tech',
                            'apps' => 'service_mono_apps',
                            'speed' => 'service_mono_speed',
                        ],
                        [
                            'id' => 'ctp',
                            'service' => 'service_ctp_title',
                            'machine' => 'service_ctp_machine',
                            'category' => 'service_ctp_category',
                            'badge' => 'service_ctp_badge',
                            'image' => 'images/machinery/machine-ctp.jpg',
                            'description' => 'service_ctp_desc',
                            'technical' => 'service_ctp_tech',
                            'apps' => 'service_ctp_apps',
                            'speed' => 'service_ctp_speed',
                        ],
                        [
                            'id' => 'binding',
                            'service' => 'service_bind_title',
                            'machine' => 'service_bind_machine',
                            'category' => 'service_bind_category',
                            'badge' => 'service_bind_badge',
                            'image' => 'images/machinery/machine-perfect-binding.jpg',
                            'description' => 'service_bind_desc',
                            'technical' => 'service_bind_tech',
                            'apps' => 'service_bind_apps',
                            'speed' => 'service_bind_speed',
                        ],
                        [
                            'id' => 'folding',
                            'service' => 'service_fold_title',
                            'machine' => 'service_fold_machine',
                            'category' => 'service_fold_category',
                            'badge' => 'service_fold_badge',
                            'image' => 'images/machinery/machine-folding-cutting.jpg',
                            'description' => 'service_fold_desc',
                            'technical' => 'service_fold_tech',
                            'apps' => 'service_fold_apps',
                            'speed' => 'service_fold_speed',
                        ],
                        [
                            'id' => 'contract',
                            'service' => 'service_contract_title',
                            'machine' => 'service_contract_machine',
                            'category' => 'service_contract_category',
                            'badge' => 'service_contract_badge',
                            'image' => 'images/machinery/machine-contract-publishing.jpg',
                            'description' => 'service_contract_desc',
                            'technical' => 'service_contract_tech',
                            'apps' => 'service_contract_apps',
                            'speed' => 'service_contract_speed',
                        ],
                    ];
                @endphp

                @foreach ($offerings as $item)
                    @php
                        $revealClass = match ($loop->index % 3) {
                            0 => 'reveal-from-left delay-100 sda-slide-left',
                            1 => 'reveal-from-bottom delay-200 sda-slide-up',
                            2 => 'reveal-from-right delay-300 sda-slide-right',
                        };
                    @endphp
                    <article id="{{ $item['id'] }}" class="glass-card framer-card group flex flex-col justify-between overflow-hidden rounded-3xl {{ $revealClass }}">
                        <!-- Machinery Image -->
                        <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                            <img src="{{ asset($item['image']) }}" alt="{{ __('site.' . $item['machine']) }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                            <div class="absolute start-4 top-4">
                                <span class="glass-pill-dark rounded-full px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-[#fbfcfd]">{{ __('site.' . $item['badge']) }}</span>
                            </div>
                        </div>

                        <!-- Combined Service & Machine Specifications -->
                        <div class="flex flex-1 flex-col justify-between p-6 sm:p-7">
                            <div>
                                <div class="flex items-center justify-between gap-2">
                                    <span class="text-xs font-bold uppercase tracking-[0.16em] text-[#01188f]">{{ __('site.' . $item['category']) }}</span>
                                    <span class="rounded-md bg-[#01188f]/10 px-2 py-0.5 text-[11px] font-semibold text-[#01188f]">{{ __('site.' . $item['speed']) }}</span>
                                </div>

                                <h3 class="mt-2 text-xl font-bold leading-snug text-[#021070]">{{ __('site.' . $item['service']) }}</h3>
                                <p class="mt-1 text-xs font-semibold text-[#01188f]">{{ __('site.machinery_label') }} {{ __('site.' . $item['machine']) }}</p>

                                <p class="mt-3 text-xs leading-relaxed text-[#021070]/80 sm:text-sm">{{ __('site.' . $item['description']) }}</p>
                                <p class="mt-3 border-t border-[#01188f]/15 pt-3 text-xs leading-relaxed text-[#021070]/75">{{ __('site.' . $item['technical']) }}</p>
                            </div>

                            <div class="mt-6 border-t border-[#01188f]/15 pt-4">
                                <p class="text-xs text-[#021070]/70"><span class="font-bold uppercase tracking-wider text-[#021070]">{{ __('site.ideal_applications') }} </span>{{ __('site.' . $item['apps']) }}</p>
                                <div class="mt-4 flex items-center justify-between">
                                    <a href="{{ route('rfq') }}" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#01188f] transition-all hover:text-[#021070] hover:translate-x-1">
                                        <span>{{ __('site.request_quote_for_run') }}</span>
                                        <svg class="h-3.5 w-3.5 {{ app()->getLocale() === 'ur' ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                    <a href="{{ route('contact') }}" class="glass-pill rounded-full px-3.5 py-1 text-xs font-semibold text-[#021070] transition hover:bg-[#01188f] hover:text-[#fbfcfd]">{{ __('site.inquire_btn') }}</a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <!-- Conversion Banner with Glassmorphism Dark Panel -->
            <div class="glass-panel-dark mt-14 flex flex-col items-start justify-between gap-6 rounded-3xl p-8 text-[#fbfcfd] sm:p-10 md:flex-row md:items-center">
                <div>
                    <h3 class="font-serif text-2xl font-semibold">{{ __('site.planning_banner_title') }}</h3>
                    <p class="mt-2 text-sm text-[#fbfcfd]/85">{{ __('site.planning_banner_desc') }}</p>
                </div>
                <a href="{{ route('rfq') }}" class="shrink-0 rounded-full bg-[#01188f] px-6 py-3 text-sm font-bold text-[#fbfcfd] border border-[#fbfcfd]/25 shadow-lg transition-all duration-300 hover:bg-[#021070] hover:scale-105">{{ __('site.launch_rfq_calc') }}</a>
            </div>
        </div>
    </section>

    <!-- SECTION 2: PAPER & MATERIAL QUALITY STANDARDS -->
    <section id="materials" class="relative overflow-hidden scroll-mt-40 border-t border-[#01188f]/15 bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="ambient-glow top-1/2 right-0 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center reveal-from-bottom">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#01188f]">{{ __('site.materials_tag') }}</span>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl">{{ __('site.materials_title') }}</h2>
                <p class="mx-auto mt-3 max-w-2xl text-sm text-[#021070]/80">{{ __('site.materials_desc') }}</p>
            </div>

            <!-- Paper Substrates Visual Showcase in Glass Cards -->
            <div class="mb-12 grid gap-6 sm:grid-cols-2">
                <div class="glass-card group relative overflow-hidden rounded-3xl framer-card reveal-from-left sda-slide-left">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="{{ asset('images/stock/paper-selection-swatches.jpg') }}" alt="Paper grade selection and texture swatches" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold text-[#fbfcfd]">
                                {{ __('site.paper_swatches_badge') }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#021070]">{{ __('site.paper_swatches_title') }}</h3>
                        <p class="mt-1 text-xs leading-relaxed text-[#021070]/80">{{ __('site.paper_swatches_desc') }}</p>
                    </div>
                </div>

                <div class="glass-card group relative overflow-hidden rounded-3xl framer-card reveal-from-right sda-slide-right">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="{{ asset('images/stock/paper-textures.jpg') }}" alt="Paper textures, caliper weights, and finish standards" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold text-[#fbfcfd]">
                                {{ __('site.paper_textures_badge') }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#021070]">{{ __('site.paper_textures_title') }}</h3>
                        <p class="mt-1 text-xs leading-relaxed text-[#021070]/80">{{ __('site.paper_textures_desc') }}</p>
                    </div>
                </div>
            </div>

            <!-- Substrates Table in Glass Panel -->
            <div class="glass-panel overflow-x-auto rounded-3xl p-1 shadow-sm reveal-scale">
                <table class="w-full min-w-[720px] text-start text-sm">
                    <thead class="bg-[#021070] text-[#fbfcfd]">
                        <tr>
                            <th class="p-4 font-semibold text-start rounded-tl-2xl">{{ __('site.th_grade') }}</th>
                            <th class="p-4 font-semibold text-start">{{ __('site.th_weight') }}</th>
                            <th class="p-4 font-semibold text-start">{{ __('site.th_profile') }}</th>
                            <th class="p-4 font-semibold text-start">{{ __('site.th_formats') }}</th>
                            <th class="p-4 font-semibold text-start rounded-tr-2xl">{{ __('site.th_recommended') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#01188f]/10 text-[#021070]">
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]">{{ __('site.paper_row_1_name') }}</td>
                            <td class="p-4">{{ __('site.paper_row_1_weight') }}</td>
                            <td class="p-4">{{ __('site.paper_row_1_profile') }}</td>
                            <td class="p-4">{{ __('site.paper_row_1_formats') }}</td>
                            <td class="p-4">{{ __('site.paper_row_1_recommended') }}</td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]">{{ __('site.paper_row_2_name') }}</td>
                            <td class="p-4">{{ __('site.paper_row_2_weight') }}</td>
                            <td class="p-4">{{ __('site.paper_row_2_profile') }}</td>
                            <td class="p-4">{{ __('site.paper_row_2_formats') }}</td>
                            <td class="p-4">{{ __('site.paper_row_2_recommended') }}</td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]">{{ __('site.paper_row_3_name') }}</td>
                            <td class="p-4">{{ __('site.paper_row_3_weight') }}</td>
                            <td class="p-4">{{ __('site.paper_row_3_profile') }}</td>
                            <td class="p-4">{{ __('site.paper_row_3_formats') }}</td>
                            <td class="p-4">{{ __('site.paper_row_3_recommended') }}</td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]">{{ __('site.paper_row_4_name') }}</td>
                            <td class="p-4">{{ __('site.paper_row_4_weight') }}</td>
                            <td class="p-4">{{ __('site.paper_row_4_profile') }}</td>
                            <td class="p-4">{{ __('site.paper_row_4_formats') }}</td>
                            <td class="p-4">{{ __('site.paper_row_4_recommended') }}</td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]">{{ __('site.paper_row_5_name') }}</td>
                            <td class="p-4">{{ __('site.paper_row_5_weight') }}</td>
                            <td class="p-4">{{ __('site.paper_row_5_profile') }}</td>
                            <td class="p-4">{{ __('site.paper_row_5_formats') }}</td>
                            <td class="p-4">{{ __('site.paper_row_5_recommended') }}</td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]">{{ __('site.paper_row_6_name') }}</td>
                            <td class="p-4">{{ __('site.paper_row_6_weight') }}</td>
                            <td class="p-4">{{ __('site.paper_row_6_profile') }}</td>
                            <td class="p-4">{{ __('site.paper_row_6_formats') }}</td>
                            <td class="p-4">{{ __('site.paper_row_6_recommended') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <div class="glass-card rounded-2xl p-6"><h3 class="font-bold text-[#021070]">{{ __('site.certified_inks_title') }}</h3><p class="mt-1 text-sm text-[#021070]/80">{{ __('site.certified_inks_desc') }}</p></div>
                <div class="glass-card rounded-2xl p-6"><h3 class="font-bold text-[#021070]">{{ __('site.polymers_title') }}</h3><p class="mt-1 text-sm text-[#021070]/80">{{ __('site.polymers_desc') }}</p></div>
                <div class="glass-card rounded-2xl p-6"><h3 class="font-bold text-[#021070]">{{ __('site.responsible_prod_title') }}</h3><p class="mt-1 text-sm text-[#021070]/80">{{ __('site.responsible_prod_desc') }}</p></div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: DUAL WAREHOUSING INFRASTRUCTURE in Glass Cards -->
    <section id="warehousing" class="relative overflow-hidden scroll-mt-40 border-t border-[#01188f]/15 bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="ambient-glow bottom-0 left-10 h-80 w-80 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center reveal-from-bottom">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#01188f]">{{ __('site.warehousing_tag') }}</span>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl">{{ __('site.warehousing_title') }}</h2>
                <p class="mx-auto mt-3 max-w-2xl text-sm text-[#021070]/80">{{ __('site.warehousing_desc') }}</p>
            </div>

            <div class="grid gap-8 md:grid-cols-2">
                <article class="glass-card framer-card flex flex-col justify-between overflow-hidden rounded-3xl reveal-from-left sda-slide-left">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="{{ asset('images/facilities/facility-press-godown.jpg') }}" alt="Facility 1: Primary Press Godown" class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                        <div class="absolute start-4 top-4">
                            <span class="glass-pill-dark rounded-full px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-[#fbfcfd]">{{ __('site.facility_1_badge') }}</span>
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col justify-between p-6 sm:p-8">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.16em] text-[#01188f]">{{ __('site.facility_1_tag') }}</span>
                            <h3 class="mt-1 font-serif text-2xl font-bold text-[#021070]">{{ __('site.facility_1_title') }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-[#021070]/80">{{ __('site.facility_1_desc') }}</p>
                        </div>
                        <div class="mt-6 border-t border-[#01188f]/15 pt-5">
                            <ul class="space-y-2 text-xs font-medium text-[#021070]/80">
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span>{{ __('site.facility_1_feat_1') }}</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span>{{ __('site.facility_1_feat_2') }}</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span>{{ __('site.facility_1_feat_3') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="glass-card framer-card flex flex-col justify-between overflow-hidden rounded-3xl reveal-from-right sda-slide-right">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="{{ asset('images/facilities/facility-board-storage.jpg') }}" alt="Facility 2: Bulk Board & Reserve Storage" class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                        <div class="absolute start-4 top-4">
                            <span class="glass-pill-dark rounded-full px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-[#fbfcfd]">{{ __('site.facility_2_badge') }}</span>
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col justify-between p-6 sm:p-8">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.16em] text-[#01188f]">{{ __('site.facility_2_tag') }}</span>
                            <h3 class="mt-1 font-serif text-2xl font-bold text-[#021070]">{{ __('site.facility_2_title') }}</h3>
                            <p class="mt-3 text-sm leading-relaxed text-[#021070]/80">{{ __('site.facility_2_desc') }}</p>
                        </div>
                        <div class="mt-6 border-t border-[#01188f]/15 pt-5">
                            <ul class="space-y-2 text-xs font-medium text-[#021070]/80">
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span>{{ __('site.facility_2_feat_1') }}</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span>{{ __('site.facility_2_feat_2') }}</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span>{{ __('site.facility_2_feat_3') }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Bottom Action Banner with Ambient Glass -->
    <section class="relative overflow-hidden bg-[#021070] py-16 text-[#fbfcfd]">
        <div class="ambient-glow top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-80 w-80 bg-[#01188f]/40"></div>
        <div class="relative z-10 mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-4 text-center sm:px-6 md:flex-row md:text-start lg:px-8">
            <div>
                <h3 class="font-serif text-2xl font-bold sm:text-3xl">{{ __('site.bottom_banner_title') }}</h3>
                <p class="mt-2 text-sm text-[#fbfcfd]/85">{{ __('site.bottom_banner_desc') }}</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('contact') }}" class="rounded-full bg-[#01188f] px-6 py-3.5 text-sm font-bold text-[#fbfcfd] border border-[#fbfcfd]/25 shadow-lg transition-all duration-300 hover:bg-[#021070] hover:scale-105">{{ __('site.schedule_plant_visit') }}</a>
                <a href="{{ route('rfq') }}" class="glass-pill-dark rounded-full px-6 py-3.5 text-sm font-bold text-[#fbfcfd] transition-all duration-300 hover:bg-[#fbfcfd]/20 hover:scale-105">{{ __('site.request_machine_estimate') }}</a>
            </div>
        </div>
    </section>
</x-layouts.app>
