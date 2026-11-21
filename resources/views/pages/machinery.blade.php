<x-layouts.app>
    <x-slot:title>{{ __('site.nav_machinery') }} | {{ __('site.brand_name') }}</x-slot:title>

    <script>window.location.replace("{{ route('services') }}#machinery");</script>

    <x-page-hero
        :eyebrow="__('site.services_hero_eyebrow')"
        :title="__('site.services_section_title')"
        :subtitle="__('site.services_section_desc')"
        :ctaHref="route('services') . '#machinery'"
        :cta="__('site.nav_services_machinery')"
    />

    <section class="bg-[#fbfcfd] py-12 text-center text-[#021070]">
        <p class="text-sm text-[#021070]/80">
            <a href="{{ route('services') }}#machinery" class="font-bold text-[#01188f] underline">{{ __('site.nav_services_machinery') }}</a>
        </p>
    </section>
</x-layouts.app>
