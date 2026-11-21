<div class="space-y-8 text-[#021070]">
    @php
        $isUrdu = app()->getLocale() === 'ur';
    @endphp

    @unless ($preview)
        <div class="glass-panel is-revealed flex flex-col items-stretch justify-between gap-4 rounded-2xl p-4 sm:flex-row sm:items-center sm:p-5 shadow-xs">
            <div class="flex flex-wrap gap-2">
                <button type="button" wire:click="filterCategory('all')" class="rounded-full px-4 py-2 text-sm font-bold transition-all duration-300 {{ $selectedCategory === 'all' ? 'bg-[#01188f] text-[#fbfcfd] shadow-sm' : 'glass-pill text-[#021070] hover:bg-[#01188f] hover:text-[#fbfcfd]' }}">{{ __('site.all_series') }}</button>
                <button type="button" wire:click="filterCategory('primary')" class="rounded-full px-4 py-2 text-sm font-bold transition-all duration-300 {{ $selectedCategory === 'primary' ? 'bg-[#01188f] text-[#fbfcfd] shadow-sm' : 'glass-pill text-[#021070] hover:bg-[#01188f] hover:text-[#fbfcfd]' }}">{{ __('site.primary') }}</button>
                <button type="button" wire:click="filterCategory('middle')" class="rounded-full px-4 py-2 text-sm font-bold transition-all duration-300 {{ $selectedCategory === 'middle' ? 'bg-[#01188f] text-[#fbfcfd] shadow-sm' : 'glass-pill text-[#021070] hover:bg-[#01188f] hover:text-[#fbfcfd]' }}">{{ __('site.middle') }}</button>
                <button type="button" wire:click="filterCategory('secondary')" class="rounded-full px-4 py-2 text-sm font-bold transition-all duration-300 {{ $selectedCategory === 'secondary' ? 'bg-[#01188f] text-[#fbfcfd] shadow-sm' : 'glass-pill text-[#021070] hover:bg-[#01188f] hover:text-[#fbfcfd]' }}">{{ __('site.secondary') }}</button>
            </div>
            <input type="text" wire:model.live.debounce.250ms="search" placeholder="{{ __('site.search_pub_placeholder') }}" class="w-full rounded-full border border-[#01188f]/20 bg-[#fbfcfd]/80 backdrop-blur-md px-4 py-2.5 text-sm text-[#021070] placeholder-[#021070]/50 focus:border-[#01188f] focus:outline-none md:w-72">
        </div>
    @endunless

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 {{ $preview ? 'lg:grid-cols-4' : 'lg:grid-cols-3' }}">
        @forelse ($books as $book)
            <article wire:key="publication-{{ $book['title'] }}" class="glass-card framer-card is-revealed flex flex-col justify-between overflow-hidden rounded-2xl">
                <div class="p-4 sm:p-5">
                    <x-book-cover
                        :title="$isUrdu ? $book['urdu_title'] : $book['title']"
                        :urdu="$isUrdu ? $book['title'] : $book['urdu_title']"
                        :klass="$isUrdu ? $book['urdu_class'] : $book['class']"
                        :subject="$isUrdu ? $book['urdu_subject'] : $book['subject']"
                        :image="$book['image']"
                        :from="$book['from']"
                        :to="$book['to']"
                    />
                </div>
                @unless ($preview)
                    <div class="space-y-3 border-t border-[#01188f]/10 bg-transparent p-5">
                        <p class="text-sm leading-relaxed text-[#021070]/80">{{ $isUrdu ? $book['urdu_content'] : $book['content'] }}</p>
                        <p class="text-xs text-[#021070]/70">{{ $isUrdu ? $book['urdu_publisher'] : $book['publisher'] }}</p>
                        @if ($book['paper_specs'] !== '')
                            <p class="text-xs text-[#021070]/70"><span class="font-bold text-[#021070]">{{ __('site.paper_label') }}</span> {{ $isUrdu ? $book['urdu_paper_specs'] : $book['paper_specs'] }}</p>
                        @endif
                        @if ($book['finishing'] !== '')
                            <p class="text-xs text-[#021070]/70"><span class="font-bold text-[#021070]">{{ __('site.finishing_label') }}</span> {{ $isUrdu ? $book['urdu_finishing'] : $book['finishing'] }}</p>
                        @endif
                        <div class="flex items-center justify-between pt-2">
                            <a href="{{ route('rfq') }}" class="text-sm font-bold text-[#01188f] hover:underline">
                                {{ __('site.request_quote') }} {{ $isUrdu ? '←' : '→' }}
                            </a>
                            <a href="{{ route('contact') }}" class="glass-pill rounded-full px-3.5 py-1.5 text-xs font-semibold text-[#021070] transition hover:bg-[#01188f] hover:text-[#fbfcfd]">{{ __('site.request_samples_btn') }}</a>
                        </div>
                    </div>
                @endunless
            </article>
        @empty
            <div class="glass-card is-revealed col-span-full rounded-2xl py-12 text-center">
                <p class="font-bold text-[#021070]">{{ __('site.no_pub_match') }}</p>
                <button type="button" wire:click="$set('search', '')" class="mt-4 rounded-full bg-[#01188f] px-4 py-2 text-xs font-bold text-[#fbfcfd] transition hover:bg-[#021070]">{{ __('site.clear_search') }}</button>
            </div>
        @endforelse
    </div>
</div>
