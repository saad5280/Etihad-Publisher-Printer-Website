<x-layouts.app>
    <x-slot:title>{{ __('site.rfq_calculator') }} | {{ __('site.brand_name') }}</x-slot:title>

    <x-page-hero
        :eyebrow="__('site.rfq_hero_eyebrow')"
        :title="__('site.rfq_hero_title')"
        :subtitle="__('site.rfq_hero_subtitle')"
        :image="asset('images/stock/hero-rfq.jpg')"
        :imageAlt="__('site.rfq_hero_title')"
    />

    <section class="relative overflow-hidden bg-[#fbfcfd] py-16">
        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/10"></div>
        <div class="ambient-glow bottom-0 right-10 h-80 w-80 bg-[#01188f]/10"></div>

        <div class="relative z-10 mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 reveal-scale">
            <livewire:request-quote-form />
        </div>
    </section>
</x-layouts.app>
