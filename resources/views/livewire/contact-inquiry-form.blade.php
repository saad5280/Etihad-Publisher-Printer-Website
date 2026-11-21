<div class="glass-card framer-card is-revealed rounded-3xl p-6 sm:p-8 text-[#021070] shadow-xl">
    @if($isSent)
        <div class="text-center py-10">
            <div class="w-16 h-16 bg-[#01188f]/10 text-[#01188f] rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            </div>
            <h3 class="text-2xl font-bold text-[#021070]">{{ __('site.contact_form_sent_title') }}</h3>
            <p class="text-[#021070]/80 text-sm mt-2 max-w-md mx-auto">
                {{ __('site.contact_form_sent_desc') }}
            </p>
            <button type="button" wire:click="$set('isSent', false)" class="mt-6 px-6 py-2.5 bg-[#01188f] text-[#fbfcfd] rounded-full text-xs font-bold transition-all duration-300 hover:bg-[#021070] hover:scale-105">
                {{ __('site.send_another_msg') }}
            </button>
        </div>
    @else
        <form wire:submit="submit" class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                        {{ __('site.label_your_name') }} <span class="text-[#01188f]">*</span>
                    </label>
                    <input type="text" wire:model="name" placeholder="{{ __('site.placeholder_your_name') }}" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/20 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd]/80 backdrop-blur-md text-[#021070] text-sm transition">
                    @error('name') <span class="text-[#01188f] font-semibold text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                        {{ __('site.label_inst_name') }}
                    </label>
                    <input type="text" wire:model="organization" placeholder="{{ __('site.placeholder_inst_name') }}" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/20 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd]/80 backdrop-blur-md text-[#021070] text-sm transition">
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                        {{ __('site.label_email') }} <span class="text-[#01188f]">*</span>
                    </label>
                    <input type="email" wire:model="email" placeholder="contact@example.com" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/20 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd]/80 backdrop-blur-md text-[#021070] text-sm transition">
                    @error('email') <span class="text-[#01188f] font-semibold text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                        {{ __('site.label_phone') }} <span class="text-[#01188f]">*</span>
                    </label>
                    <input type="text" wire:model="phone" placeholder="0300 0000000" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/20 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd]/80 backdrop-blur-md text-[#021070] text-sm transition">
                    @error('phone') <span class="text-[#01188f] font-semibold text-xs mt-1 block">{{ $message }}</span> @enderror
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                    {{ __('site.label_inquiry_type') }} <span class="text-[#01188f]">*</span>
                </label>
                <select wire:model="inquiry_type" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/20 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd]/80 backdrop-blur-md text-[#021070] text-sm font-medium transition">
                    <option value="School Supply / Textbook Order">{{ __('site.opt_inquiry_1') }}</option>
                    <option value="Wholesale Dealership / Book Depot Distribution">{{ __('site.opt_inquiry_2') }}</option>
                    <option value="Custom Offset Commercial Print Run">{{ __('site.opt_inquiry_3') }}</option>
                    <option value="Schedule a Plant Tour (Ravi Road Press)">{{ __('site.opt_inquiry_4') }}</option>
                    <option value="Author Manuscript / Editorial Publishing">{{ __('site.opt_inquiry_5') }}</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                    {{ __('site.label_inquiry_msg') }} <span class="text-[#01188f]">*</span>
                </label>
                <textarea wire:model="message" rows="4" placeholder="{{ __('site.placeholder_msg') }}" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd] text-[#021070] text-sm"></textarea>
                @error('message') <span class="text-[#01188f] font-semibold text-xs mt-1 block">{{ $message }}</span> @enderror
            </div>

            <button type="submit" wire:loading.attr="disabled" class="w-full py-3.5 bg-[#01188f] hover:bg-[#021070] text-[#fbfcfd] font-bold rounded-xl text-sm transition-all shadow-md flex items-center justify-center gap-2">
                <span wire:loading.remove>{{ __('site.submit_inquiry_btn') }}</span>
                <span wire:loading class="flex items-center gap-2">
                    <svg class="animate-spin h-4 w-4 text-[#fbfcfd]" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                    {{ __('site.dispatching_btn') }}
                </span>
            </button>
        </form>
    @endif
</div>
