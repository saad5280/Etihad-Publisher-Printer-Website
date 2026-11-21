@props([
    'title',
    'urdu',
    'klass',
    'subject',
    'image' => null,
    'from' => '#021070',
    'to' => '#01188f',
])

@if ($image && file_exists(public_path($image)))
    <div class="group relative aspect-[3/4] w-full overflow-hidden rounded-2xl bg-[#fbfcfd] shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl">
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="h-full w-full object-contain" loading="lazy">
        <div class="pointer-events-none absolute inset-0 rounded-2xl ring-1 ring-inset ring-[#01188f]/20"></div>
    </div>
@else
    <div class="book-spine relative aspect-[3/4] w-full overflow-hidden rounded-2xl text-[#fbfcfd] shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl" style="background: linear-gradient(160deg, {{ $from }} 0%, {{ $to }} 100%);">
        <div class="absolute inset-y-0 left-0 w-3 bg-[#021070]/40"></div>
        <div class="absolute right-4 top-4 h-10 w-10 overflow-hidden rounded-xl border border-[#fbfcfd]/20 bg-[#fbfcfd]/10 p-1 shadow">
            <img src="{{ asset('images/logo.png') }}" alt="" class="h-full w-full object-contain">
        </div>
        <div class="absolute inset-x-0 top-0 h-1.5 bg-[#01188f]"></div>
        <div class="flex h-full flex-col justify-between p-6 ps-8">
            <div class="inline-block">
                <span class="inline-block rounded-md bg-[#01188f] px-2.5 py-1 text-[11px] font-black uppercase tracking-wider text-[#fbfcfd]">{{ $klass }}</span>
            </div>
            <div>
                <h3 class="font-serif text-2xl font-bold leading-tight">{{ $title }}</h3>
                <p class="font-urdu mt-2 text-base text-[#fbfcfd]/90">{{ $urdu }}</p>
                <div class="mt-4 border-t border-[#fbfcfd]/20 pt-3">
                    <p class="text-[11px] font-bold uppercase tracking-wider text-[#fbfcfd]">{{ $subject }}</p>
                </div>
            </div>
        </div>
    </div>
@endif
