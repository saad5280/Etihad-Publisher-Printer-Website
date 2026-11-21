<x-layouts.app>
    <x-slot:title>{{ __('site.nav_contact') }} | {{ __('site.brand_name') }}</x-slot:title>

    <x-page-hero
        :eyebrow="__('site.contact_hero_eyebrow')"
        :title="__('site.contact_hero_title')"
        :subtitle="__('site.contact_hero_subtitle')"
        :ctaHref="route('rfq')"
        :cta="__('site.contact_hero_cta')"
        :image="asset('images/stock/hero-contact.jpg')"
        :imageAlt="__('site.contact_hero_title')"
    />

    <section class="relative overflow-hidden bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-12 lg:px-8">
            <div class="space-y-6 lg:col-span-5 reveal-from-left">
                <!-- Headquarters Facility Showcase Glass Card -->
                <div class="glass-card framer-card overflow-hidden rounded-3xl shadow-md">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="{{ asset('images/stock/contact-headquarters.jpg') }}" alt="Etihad Publishers & Printers Press Headquarters" class="h-full w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3.5 py-1 text-[11px] font-bold text-[#fbfcfd]">
                                <span class="h-2 w-2 rounded-full bg-[#fbfcfd] animate-pulse"></span>
                                {{ __('site.contact_facility_badge') }}
                            </span>
                        </div>
                    </div>
                    <div class="p-7">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/logo.jpg') }}" alt="{{ __('site.brand_name') }}" class="h-12 w-12 rounded-xl shadow-xs border border-[#01188f]/20">
                            <div>
                                <h2 class="text-lg font-bold text-[#021070]">{{ __('site.press_hq') }}</h2>
                                <p class="text-sm font-bold text-[#01188f]">{{ __('site.city_country') }}</p>
                            </div>
                        </div>
                        <dl class="mt-6 space-y-4 text-sm">
                            <div>
                                <dt class="font-bold text-[#021070]">{{ __('site.plant_godowns_label') }}</dt>
                                <dd class="text-[#021070]/80">{{ __('site.plant_godowns_val') }}</dd>
                            </div>
                            <div>
                                <dt class="font-bold text-[#021070]">{{ __('site.wholesale_hub_label') }}</dt>
                                <dd class="text-[#021070]/80">{{ __('site.wholesale_hub_val') }}</dd>
                            </div>
                            <div>
                                <dt class="font-bold text-[#021070]">{{ __('site.email_label') }}</dt>
                                <dd><a class="font-medium text-[#01188f] hover:underline" href="mailto:info@etihadpublishers.com">info@etihadpublishers.com</a></dd>
                            </div>
                            <div>
                                <dt class="font-bold text-[#021070]">{{ __('site.whatsapp_desk_label') }}</dt>
                                <dd class="text-[#021070]/80">{{ __('site.whatsapp_desk_val') }}</dd>
                            </div>
                        </dl>
                        <div class="glass-pill mt-6 rounded-2xl p-4 text-sm">
                            <p class="font-bold text-[#021070]">{{ __('site.operating_hours_label') }}</p>
                            <p class="text-[#021070]/80">{{ __('site.operating_hours_val') }}</p>
                            <p class="mt-1 font-medium text-[#01188f]">{{ __('site.operating_hours_note') }}</p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel overflow-hidden rounded-3xl p-1 shadow-xs reveal-scale">
                    <iframe title="Lahore press location" class="h-60 w-full rounded-2xl" loading="lazy" src="https://www.openstreetmap.org/export/embed.html?bbox=74.28%2C31.54%2C74.36%2C31.61&amp;layer=mapnik"></iframe>
                </div>
            </div>
            <div class="lg:col-span-7 reveal-from-right">
                <livewire:contact-inquiry-form />
            </div>
        </div>
    </section>
</x-layouts.app>
