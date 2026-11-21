<x-layouts.app>
    <x-slot:title>{{ __('site.nav_distribution') }} | {{ __('site.brand_name') }}</x-slot:title>

    <x-page-hero
        :eyebrow="__('site.dist_hero_eyebrow')"
        :title="__('site.dist_hero_title')"
        :subtitle="__('site.dist_hero_subtitle')"
        :ctaHref="route('contact')"
        :cta="__('site.dist_hero_cta')"
        :image="asset('images/stock/hero-distribution.jpg')"
        :imageAlt="__('site.dist_hero_title')"
    />

    <section class="relative overflow-hidden bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-12 lg:px-8">
            <div class="lg:col-span-7 reveal-from-left">
                <h2 class="font-serif text-3xl font-semibold text-[#021070]">{{ __('site.lahore_hub_title') }}</h2>
                <p class="mt-4 text-base leading-relaxed text-[#021070]/85">{{ __('site.lahore_hub_desc') }}</p>
                <div class="glass-card mt-6 rounded-2xl p-6 shadow-xs framer-card">
                    <h3 class="font-bold text-[#021070]">{{ __('site.safe_freight_title') }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-[#021070]/80">{{ __('site.safe_freight_desc') }}</p>
                </div>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="rounded-full bg-[#01188f] px-6 py-3 text-sm font-bold text-[#fbfcfd] shadow-sm transition-all duration-300 hover:bg-[#021070] hover:scale-105">{{ __('site.trade_registration') }}</a>
                    <a href="{{ route('rfq') }}" class="glass-pill rounded-full px-6 py-3 text-sm font-bold text-[#021070] transition-all duration-300 hover:bg-[#01188f] hover:text-[#fbfcfd] hover:scale-105">{{ __('site.request_freight_quote') }}</a>
                </div>
            </div>
            <div class="lg:col-span-5 reveal-from-right">
                <div class="glass-card-dark overflow-hidden rounded-3xl p-1 text-[#fbfcfd] shadow-xl framer-card">
                    <div class="relative aspect-[16/10] w-full overflow-hidden rounded-2xl bg-[#021070]">
                        <img src="{{ asset('images/stock/distribution-logistics.jpg') }}" alt="Etihad High-Capacity Logistics & Warehouse Distribution Hub" class="h-full w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070] via-[#021070]/30 to-transparent"></div>
                        <div class="absolute bottom-4 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3.5 py-1 text-xs font-bold text-[#fbfcfd]">
                                <span class="h-2 w-2 rounded-full bg-[#fbfcfd] animate-pulse"></span>
                                {{ __('site.freight_badge') }}
                            </span>
                        </div>
                    </div>
                    <div class="p-6 sm:p-7">
                        <h3 class="border-b border-[#fbfcfd]/15 pb-3 text-lg font-bold text-[#fbfcfd]">{{ __('site.dist_coverage_title') }}</h3>
                        <ul class="mt-4 space-y-3.5 text-sm text-[#fbfcfd]/85">
                            <li class="flex items-start gap-2.5">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#01188f]"></span>
                                <span><strong class="text-[#fbfcfd]">{{ __('site.dist_point_1_title') }}</strong> {{ __('site.dist_point_1_desc') }}</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#01188f]"></span>
                                <span><strong class="text-[#fbfcfd]">{{ __('site.dist_point_2_title') }}</strong> {{ __('site.dist_point_2_desc') }}</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#01188f]"></span>
                                <span><strong class="text-[#fbfcfd]">{{ __('site.dist_point_3_title') }}</strong> {{ __('site.dist_point_3_desc') }}</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#01188f]"></span>
                                <span><strong class="text-[#fbfcfd]">{{ __('site.dist_point_4_title') }}</strong> {{ __('site.dist_point_4_desc') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden border-t border-[#01188f]/15 bg-[#fbfcfd] py-16 text-[#021070]">
        <div class="ambient-glow top-1/2 right-10 h-80 w-80 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center font-serif text-3xl font-semibold text-[#021070] reveal-from-bottom">{{ __('site.glossary_title') }}</h2>
            <div class="mt-10 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                @php
                    $isUrdu = app()->getLocale() === 'ur';
                @endphp
                @foreach ([
                    ['Etihad Publishers & Printers', 'اتحاد پبلشرز اینڈ پرنٹرز', 'Official corporate title', 'باضابطہ اشاعتی و طباعتی نام'],
                    ['Offset Printing Press', 'آفسیٹ پرنٹنگ پریس', 'Lithographic high-speed press technology', 'تیز رفتار لیتھوگرافک پرنٹنگ ٹیکنالوجی'],
                    ['Book Signature', 'فارمہ', 'Folded sheet section assembled into books', 'موڑی گئی شیٹس جو کتاب کی شکل میں جڑتی ہیں'],
                    ['Paper Unit (Rim)', 'رم', 'Standard packaging unit for printing sheets', 'کاغذ کی معیاری پیکیجنگ اکائی (500 شیٹس)'],
                    ['Warehouse Facility', 'گودام', 'Dedicated paper and book storage', 'کاغذ اور کتب کا محفوظ اسٹوریج'],
                    ['CTP Digital Plates', 'سی ٹی پی پلیٹیں', 'Computer-to-Plate aluminium imaging', 'کمپیوٹر سے ایلومینیم پلیٹوں پر براہ راست امیجنگ'],
                    ['Perfect Binding', 'پرفیکٹ بائنڈنگ', 'Thermal spine binding for softcovers', 'سافٹ کور کتب کے لیے پائیدار ہاٹ میلٹ بائنڈنگ'],
                    ['Folding Line', 'فولڈنگ مشین', 'Automated signature folding', 'خودکار طریقے سے فارمے بنانے والی مشین'],
                    ['Bleach Card Cover', 'بلیچ کارڈ', 'Protective card stock for textbook covers', 'درسی کتب کے سرورق کے لیے مضبوط کارڈ بورڈ'],
                    ['Protective Bundling', 'کتابوں کا بنڈل', 'Secure packing for freight to book markets', 'مارکیٹوں تک محفوظ ترسیل کے لیے پیکیجنگ'],
                    ['Request a Quote', 'کوٹیشن کی درخواست کریں', 'Primary call-to-action for estimates', 'پرنٹ تخمینہ اور ریٹس حاصل کرنے کا طریقہ'],
                    ['Textbook Publications', 'درسی و نصابی کتب', 'Curriculum catalog category', 'قومی و نجی تعلیمی نصاب کی مطبوعات'],
                ] as $index => $item)
                    <div class="glass-card framer-card rounded-2xl p-5 shadow-xs reveal-from-bottom delay-{{ (($index % 4) + 1) * 100 }}">
                        <div class="flex items-start justify-between gap-3">
                            <p class="text-sm font-bold text-[#021070]">{{ $isUrdu ? $item[1] : $item[0] }}</p>
                            <p class="text-xs font-semibold text-[#01188f]">{{ $isUrdu ? $item[0] : $item[1] }}</p>
                        </div>
                        <p class="mt-2 text-xs text-[#021070]/70">{{ $isUrdu ? $item[3] : $item[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
