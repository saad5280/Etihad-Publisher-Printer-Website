<div class="glass-card framer-card is-revealed rounded-3xl shadow-2xl overflow-hidden text-[#021070]">
    <?php
        $isUrdu = app()->getLocale() === 'ur';
    ?>

    <!-- Header with Progress -->
    <div class="glass-panel-dark p-6 sm:p-8 text-[#fbfcfd] relative border-b border-[#fbfcfd]/15">
        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <span class="glass-pill-dark inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-semibold text-[#fbfcfd]">
                    <?php echo e(__('site.rfq_badge')); ?>

                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#fbfcfd] mt-2"><?php echo e(__('site.rfq_form_title')); ?></h2>
                <p class="text-[#fbfcfd]/85 text-sm mt-1 max-w-xl">
                    <?php echo e(__('site.rfq_form_desc')); ?>

                </p>
            </div>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$isSubmitted): ?>
            <div class="flex items-center gap-2">
                <span class="text-xs uppercase tracking-wider text-[#fbfcfd]/70"><?php echo e(__('site.step_indicator', ['current' => $currentStep])); ?></span>
                <div class="flex gap-1.5">
                    <span class="w-8 h-2 rounded-full <?php echo e($currentStep >= 1 ? 'bg-[#01188f]' : 'bg-[#021070]/60 border border-[#fbfcfd]/20'); ?> transition-colors"></span>
                    <span class="w-8 h-2 rounded-full <?php echo e($currentStep >= 2 ? 'bg-[#01188f]' : 'bg-[#021070]/60 border border-[#fbfcfd]/20'); ?> transition-colors"></span>
                    <span class="w-8 h-2 rounded-full <?php echo e($currentStep >= 3 ? 'bg-[#01188f]' : 'bg-[#021070]/60 border border-[#fbfcfd]/20'); ?> transition-colors"></span>
                </div>
            </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>
    </div>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($isSubmitted): ?>
        <!-- Success Screen -->
        <div class="p-8 sm:p-12 text-center bg-[#fbfcfd]">
            <div class="w-20 h-20 bg-[#01188f]/10 text-[#01188f] rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg shadow-[#01188f]/20">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            </div>
            <span class="inline-block px-3 py-1 bg-[#01188f]/10 text-[#01188f] rounded-full text-xs font-bold tracking-wider uppercase mb-2"><?php echo e(__('site.quote_submitted_badge')); ?></span>
            <h3 class="text-3xl font-extrabold text-[#021070]"><?php echo e(__('site.quote_dispatched_title')); ?></h3>
            <p class="text-[#021070]/80 mt-2 max-w-lg mx-auto text-sm sm:text-base">
                <?php echo e(__('site.quote_dispatched_desc')); ?>

            </p>

            <!-- Reference Number Card -->
            <div class="mt-8 max-w-md mx-auto bg-[#fbfcfd] border-2 border-dashed border-[#01188f]/30 rounded-2xl p-6">
                <span class="text-xs uppercase font-semibold text-[#021070]/70 tracking-wider"><?php echo e(__('site.official_ref_label')); ?></span>
                <div class="text-2xl sm:text-3xl font-mono font-black text-[#01188f] mt-1 tracking-wider">
                    <?php echo e($generatedReference); ?>

                </div>
                <p class="text-xs text-[#021070]/70 mt-2">
                    <?php echo e(__('site.official_ref_note')); ?>

                </p>
            </div>

            <!-- WhatsApp Direct Action -->
            <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="https://wa.me/923000000000?text=<?php echo e(urlencode('Assalam-o-Alaikum, I submitted RFQ reference ' . $generatedReference . ' for ' . $desired_print_run . ' copies of ' . $project_classification)); ?>" target="_blank" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 bg-[#01188f] hover:bg-[#021070] text-[#fbfcfd] font-bold rounded-xl shadow-lg transition-all">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.941-.708-1.792 0-.852.448-1.27.608-1.444.16-.175.348-.219.464-.219.117 0 .232.001.334.006.106.005.249-.04.39.297.144.35.493 1.202.536 1.29.044.088.073.19.015.306-.059.117-.088.19-.175.292-.087.102-.184.228-.263.307-.088.087-.18.182-.077.359.102.176.455.75 1.05 1.279.767.683 1.413.896 1.614.996.202.1.32.088.438-.048.117-.137.502-.584.635-.785.133-.201.266-.169.447-.101.181.068 1.148.542 1.346.64.198.098.33.146.378.229.049.083.049.48-.095.885z"/></svg>
                    <span><?php echo e(__('site.whatsapp_connect')); ?></span>
                </a>
                <button type="button" wire:click="resetCalculator" class="w-full sm:w-auto px-6 py-3.5 bg-[#01188f]/10 hover:bg-[#01188f]/20 text-[#021070] font-bold rounded-xl transition-all">
                    <?php echo e(__('site.start_another_estimate')); ?>

                </button>
            </div>
        </div>
    <?php else: ?>
        <!-- Multi-Step Form Body -->
        <div class="p-6 sm:p-10 space-y-8 bg-[#fbfcfd]">
            <!-- STEP 1: Publication Scope & Volume -->
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($currentStep === 1): ?>
                <div class="space-y-6 animate-fadeIn">
                    <div class="border-b border-[#01188f]/15 pb-3">
                        <h3 class="text-xl font-bold text-[#021070] flex items-center gap-2">
                            <span class="w-7 h-7 rounded-lg bg-[#021070] text-[#fbfcfd] inline-flex items-center justify-center text-sm font-black">1</span>
                            <?php echo e(__('site.step_1_title')); ?>

                        </h3>
                        <p class="text-xs sm:text-sm text-[#021070]/70 mt-1">
                            <?php echo e(__('site.step_1_desc')); ?>

                        </p>
                    </div>

                    <!-- Step 1.1: Project Classification Dropdown -->
                    <div>
                        <label class="block text-sm font-bold text-[#021070] mb-2">
                            <?php echo e(__('site.label_classification')); ?> <span class="text-[#01188f]">*</span>
                        </label>
                        <select wire:model.live="project_classification" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none text-[#021070] font-medium bg-[#fbfcfd] transition-colors">
                            <option value="School Syllabus / Classroom Textbook"><?php echo e(__('site.opt_class_1')); ?></option>
                            <option value="Early Reader / Children's Illustrated Book"><?php echo e(__('site.opt_class_2')); ?></option>
                            <option value="Commercial Catalog / Corporate Brochure"><?php echo e(__('site.opt_class_3')); ?></option>
                            <option value="Novel / Literary Anthologies / Other"><?php echo e(__('site.opt_class_4')); ?></option>
                        </select>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['project_classification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-[#01188f] font-semibold text-xs mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Step 1.2: Page Count (Signatures) -->
                    <div>
                        <label class="block text-sm font-bold text-[#021070] mb-1">
                            <?php echo e(__('site.label_page_count')); ?> <span class="text-[#01188f]">*</span>
                        </label>
                        <p class="text-xs text-[#021070]/70 mb-3">
                            <?php echo e(__('site.page_count_desc')); ?>

                        </p>
                        <div class="flex items-center gap-3">
                            <input type="number" wire:model.live="page_count" min="8" step="4" class="w-36 px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none text-[#021070] font-bold text-lg bg-[#fbfcfd]">
                            <span class="text-sm font-semibold text-[#021070]"><?php echo e(__('site.pages_unit')); ?></span>
                        </div>
                        <!-- Quick Pick Chips -->
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="text-xs text-[#021070]/70 self-center"><?php echo e(__('site.popular_book_sizes')); ?></span>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [64, 96, 128, 160, 192, 256, 320]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $presetCount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <button type="button" wire:click="setPageCount(<?php echo e($presetCount); ?>)" class="px-3 py-1 rounded-lg text-xs font-semibold <?php echo e($page_count === $presetCount ? 'bg-[#01188f] text-[#fbfcfd] ring-2 ring-[#01188f]' : 'bg-[#01188f]/10 hover:bg-[#01188f]/20 text-[#021070]'); ?> transition-all">
                                    <?php echo e($presetCount); ?> pp
                                </button>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['page_count'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-[#01188f] font-semibold text-xs mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Step 1.3: Desired Print Run -->
                    <div>
                        <label class="block text-sm font-bold text-[#021070] mb-1">
                            <?php echo e(__('site.label_desired_run')); ?> <span class="text-[#01188f]">*</span>
                        </label>
                        <p class="text-xs text-[#021070]/70 mb-3">
                            <?php echo e(__('site.desired_run_desc')); ?>

                        </p>
                        <div class="flex items-center gap-3">
                            <input type="number" wire:model.live="desired_print_run" min="100" step="500" class="w-44 px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none text-[#021070] font-bold text-lg bg-[#fbfcfd]">
                            <span class="text-sm font-semibold text-[#021070]"><?php echo e(__('site.copies_unit')); ?></span>
                        </div>
                        <!-- Preset Quick Buttons -->
                        <div class="flex flex-wrap gap-2 mt-3">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [1000 => '1,000', 5000 => '5,000', 10000 => '10,000', 20000 => '20,000', 50000 => '50,000+']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qty => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <button type="button" wire:click="setPrintRun(<?php echo e($qty); ?>)" class="px-3.5 py-1.5 rounded-lg text-xs font-bold <?php echo e($desired_print_run === $qty ? 'bg-[#01188f] text-[#fbfcfd] shadow-md' : 'bg-[#01188f]/10 hover:bg-[#01188f]/20 text-[#021070]'); ?> transition-all">
                                    <?php echo e(__('site.preset_copies', ['qty' => $label])); ?>

                                </button>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['desired_print_run'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-[#01188f] font-semibold text-xs mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <!-- STEP 2: Paper, Finishes, Binding & Logistics -->
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($currentStep === 2): ?>
                <div class="space-y-6 animate-fadeIn">
                    <div class="border-b border-[#01188f]/15 pb-3">
                        <h3 class="text-xl font-bold text-[#021070] flex items-center gap-2">
                            <span class="w-7 h-7 rounded-lg bg-[#021070] text-[#fbfcfd] inline-flex items-center justify-center text-sm font-black">2</span>
                            <?php echo e(__('site.step_2_title')); ?>

                        </h3>
                        <p class="text-xs sm:text-sm text-[#021070]/70 mt-1">
                            <?php echo e(__('site.step_2_desc')); ?>

                        </p>
                    </div>

                    <!-- Step 2.1: Inside Paper Preference Selection Cards -->
                    <div>
                        <label class="block text-sm font-bold text-[#021070] mb-2">
                            <?php echo e(__('site.label_inside_paper')); ?> <span class="text-[#01188f]">*</span>
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <?php
                                $paperOptions = [
                                    'Fine Textbook Printing Paper (Standard)' => ['opt_paper_1_name', 'opt_paper_1_desc'],
                                    'Premium Smooth White Offset' => ['opt_paper_2_name', 'opt_paper_2_desc'],
                                    'Gloss / Matte Coated Art Paper' => ['opt_paper_3_name', 'opt_paper_3_desc'],
                                    'Lightweight Economy Newsprint' => ['opt_paper_4_name', 'opt_paper_4_desc'],
                                ];
                            ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $paperOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paperValue => $paperKeys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <label class="relative flex flex-col p-4 rounded-xl border-2 cursor-pointer transition-all <?php echo e($inside_paper === $paperValue ? 'border-[#01188f] bg-[#01188f]/10 shadow-sm' : 'border-[#01188f]/20 hover:border-[#01188f]/40 bg-[#fbfcfd]'); ?>">
                                    <div class="flex items-center justify-between">
                                        <span class="font-bold text-sm text-[#021070]"><?php echo e(__('site.' . $paperKeys[0])); ?></span>
                                        <input type="radio" wire:model.live="inside_paper" value="<?php echo e($paperValue); ?>" class="text-[#01188f] focus:ring-[#01188f] h-4 w-4">
                                    </div>
                                    <p class="text-xs text-[#021070]/70 mt-2"><?php echo e(__('site.' . $paperKeys[1])); ?></p>
                                </label>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['inside_paper'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-[#01188f] font-semibold text-xs mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>

                    <!-- Step 2.2: Cover Finishing & Treatments -->
                    <div class="bg-[#fbfcfd] p-4 sm:p-5 rounded-2xl border border-[#01188f]/20">
                        <label class="block text-sm font-bold text-[#021070] mb-2">
                            <?php echo e(__('site.label_cover_finish')); ?>

                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-4">
                            <label class="flex items-center gap-2 p-3 bg-[#fbfcfd] rounded-xl border border-[#01188f]/20 cursor-pointer">
                                <input type="radio" wire:model.live="cover_finish" value="Heavy Bleach Card Cover Board (Recommended)" class="text-[#01188f] focus:ring-[#01188f]">
                                <span class="text-xs sm:text-sm font-semibold text-[#021070]"><?php echo e(__('site.opt_cover_1')); ?></span>
                            </label>
                            <label class="flex items-center gap-2 p-3 bg-[#fbfcfd] rounded-xl border border-[#01188f]/20 cursor-pointer">
                                <input type="radio" wire:model.live="cover_finish" value="Premium Art Card Cover" class="text-[#01188f] focus:ring-[#01188f]">
                                <span class="text-xs sm:text-sm font-semibold text-[#021070]"><?php echo e(__('site.opt_cover_2')); ?></span>
                            </label>
                        </div>

                        <span class="text-xs font-bold text-[#021070] uppercase tracking-wider block mb-2"><?php echo e(__('site.protective_treatments')); ?></span>
                        <div class="flex flex-wrap gap-4">
                            <label class="inline-flex items-center gap-2 text-xs sm:text-sm text-[#021070] font-medium cursor-pointer">
                                <input type="checkbox" wire:model.live="cover_treatments.Gloss Thermal Lamination" class="rounded text-[#01188f] focus:ring-[#01188f] h-4 w-4">
                                <span><?php echo e(__('site.treatment_gloss')); ?></span>
                            </label>
                            <label class="inline-flex items-center gap-2 text-xs sm:text-sm text-[#021070] font-medium cursor-pointer">
                                <input type="checkbox" wire:model.live="cover_treatments.Matte Lamination" class="rounded text-[#01188f] focus:ring-[#01188f] h-4 w-4">
                                <span><?php echo e(__('site.treatment_matte')); ?></span>
                            </label>
                            <label class="inline-flex items-center gap-2 text-xs sm:text-sm text-[#021070] font-medium cursor-pointer">
                                <input type="checkbox" wire:model.live="cover_treatments.Spot UV Title" class="rounded text-[#01188f] focus:ring-[#01188f] h-4 w-4">
                                <span><?php echo e(__('site.treatment_uv')); ?></span>
                            </label>
                        </div>
                    </div>

                    <!-- Step 2.3: Binding Preference -->
                    <div>
                        <label class="block text-sm font-bold text-[#021070] mb-2">
                            <?php echo e(__('site.label_binding_style')); ?> <span class="text-[#01188f]">*</span>
                        </label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                            <?php
                                $bindingOptions = [
                                    'Industrial Perfect Binding (Square Backed)' => ['opt_bind_1_name', 'opt_bind_1_desc'],
                                    'Center Wire Saddle Stitching' => ['opt_bind_2_name', 'opt_bind_2_desc'],
                                    'Hardcover Bound Edition' => ['opt_bind_3_name', 'opt_bind_3_desc'],
                                ];
                            ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $bindingOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bindValue => $bindKeys): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <label class="p-4 rounded-xl border-2 cursor-pointer transition-all <?php echo e($binding_preference === $bindValue ? 'border-[#01188f] bg-[#01188f]/10' : 'border-[#01188f]/20 hover:border-[#01188f]/40'); ?>">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="font-bold text-xs sm:text-sm text-[#021070]"><?php echo e(__('site.' . $bindKeys[0])); ?></span>
                                        <input type="radio" wire:model.live="binding_preference" value="<?php echo e($bindValue); ?>" class="text-[#01188f]">
                                    </div>
                                    <p class="text-xs text-[#021070]/70"><?php echo e(__('site.' . $bindKeys[1])); ?></p>
                                </label>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                        </div>
                    </div>

                    <!-- Step 2.4: Delivery & Logistics Destination -->
                    <div>
                        <label class="block text-sm font-bold text-[#021070] mb-2">
                            <?php echo e(__('site.label_delivery_hub')); ?> <span class="text-[#01188f]">*</span>
                        </label>
                        <select wire:model.live="delivery_destination" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none text-[#021070] font-medium bg-[#fbfcfd]">
                            <option value="Urdu Bazaar Lahore"><?php echo e(__('site.opt_dest_1')); ?></option>
                            <option value="Lahore City"><?php echo e(__('site.opt_dest_2')); ?></option>
                            <option value="Punjab Regional"><?php echo e(__('site.opt_dest_3')); ?></option>
                            <option value="Nationwide Freight"><?php echo e(__('site.opt_dest_4')); ?></option>
                            <option value="Factory Pickup"><?php echo e(__('site.opt_dest_5')); ?></option>
                        </select>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <!-- STEP 3: Contact & Submission -->
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($currentStep === 3): ?>
                <div class="space-y-6 animate-fadeIn">
                    <div class="border-b border-[#01188f]/15 pb-3">
                        <h3 class="text-xl font-bold text-[#021070] flex items-center gap-2">
                            <span class="w-7 h-7 rounded-lg bg-[#021070] text-[#fbfcfd] inline-flex items-center justify-center text-sm font-black">3</span>
                            <?php echo e(__('site.step_3_title')); ?>

                        </h3>
                        <p class="text-xs sm:text-sm text-[#021070]/70 mt-1">
                            <?php echo e(__('site.step_3_desc')); ?>

                        </p>
                    </div>

                    <!-- Specifications Summary Card -->
                    <div class="bg-[#021070] text-[#fbfcfd] rounded-2xl p-5 border border-[#01188f]/30 text-xs sm:text-sm space-y-2">
                        <div class="text-[#fbfcfd] font-bold uppercase tracking-wider text-xs border-b border-[#01188f]/30 pb-1.5 flex items-center justify-between">
                            <span><?php echo e(__('site.summary_preview')); ?></span>
                            <span><?php echo e(__('site.summary_copies', ['count' => number_format($desired_print_run)])); ?></span>
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-[#fbfcfd]/85 pt-1">
                            <div><strong class="text-[#fbfcfd]"><?php echo e(__('site.summary_classification')); ?></strong> <?php echo e($project_classification); ?></div>
                            <div><strong class="text-[#fbfcfd]"><?php echo e(__('site.summary_page_count')); ?></strong> <?php echo e($page_count); ?> <?php echo e(__('site.pages_unit')); ?></div>
                            <div><strong class="text-[#fbfcfd]"><?php echo e(__('site.summary_paper')); ?></strong> <?php echo e($inside_paper); ?></div>
                            <div><strong class="text-[#fbfcfd]"><?php echo e(__('site.summary_cover')); ?></strong> <?php echo e($cover_finish); ?></div>
                            <div><strong class="text-[#fbfcfd]"><?php echo e(__('site.summary_binding')); ?></strong> <?php echo e($binding_preference); ?></div>
                            <div><strong class="text-[#fbfcfd]"><?php echo e(__('site.summary_destination')); ?></strong> <?php echo e($delivery_destination); ?></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                                <?php echo e(__('site.label_full_name')); ?> <span class="text-[#01188f]">*</span>
                            </label>
                            <input type="text" wire:model="client_name" placeholder="<?php echo e(__('site.placeholder_full_name')); ?>" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd] text-[#021070]">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['client_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-[#01188f] font-semibold text-xs mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                                <?php echo e(__('site.label_institution')); ?>

                            </label>
                            <input type="text" wire:model="institution_name" placeholder="<?php echo e(__('site.placeholder_institution')); ?>" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd] text-[#021070]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                                <?php echo e(__('site.label_email')); ?> <span class="text-[#01188f]">*</span>
                            </label>
                            <input type="email" wire:model="email" placeholder="<?php echo e(__('site.placeholder_email')); ?>" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd] text-[#021070]">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-[#01188f] font-semibold text-xs mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                                <?php echo e(__('site.label_phone')); ?> <span class="text-[#01188f]">*</span>
                            </label>
                            <input type="text" wire:model="phone" placeholder="<?php echo e(__('site.placeholder_phone')); ?>" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd] text-[#021070]">
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-[#01188f] font-semibold text-xs mt-1 block"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase tracking-wider text-[#021070] mb-1">
                            <?php echo e(__('site.label_notes')); ?>

                        </label>
                        <textarea wire:model="notes" rows="3" placeholder="<?php echo e(__('site.placeholder_notes')); ?>" class="w-full px-4 py-3 rounded-xl border border-[#01188f]/25 focus:ring-2 focus:ring-[#01188f] focus:outline-none bg-[#fbfcfd] text-[#021070]"></textarea>
                    </div>

                    <!-- Customer Service Commitment -->
                    <div class="bg-[#fbfcfd] border border-[#01188f]/25 rounded-xl p-4 text-xs text-[#021070] flex items-start gap-3">
                        <svg class="w-5 h-5 text-[#01188f] flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/></svg>
                        <div>
                            <strong><?php echo e(__('site.service_commitment_title')); ?></strong> <?php echo e(__('site.service_commitment_desc')); ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

            <!-- Navigation Actions -->
            <div class="pt-6 border-t border-[#01188f]/15 flex items-center justify-between gap-4">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($currentStep > 1): ?>
                    <button type="button" wire:click="prevStep" class="px-6 py-3 rounded-xl border border-[#01188f]/30 text-[#021070] hover:bg-[#01188f]/10 font-bold text-sm transition-all flex items-center gap-2">
                        <svg class="w-4 h-4 <?php echo e($isUrdu ? 'rotate-180' : ''); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                        <span><?php echo e(__('site.prev_step')); ?></span>
                    </button>
                <?php else: ?>
                    <div></div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($currentStep < 3): ?>
                    <button type="button" wire:click="nextStep" class="px-8 py-3.5 rounded-xl bg-[#01188f] hover:bg-[#021070] text-[#fbfcfd] font-bold text-sm shadow-lg transition-all flex items-center gap-2">
                        <span><?php echo e(__('site.continue_step', ['step' => $currentStep + 1])); ?></span>
                        <svg class="w-4 h-4 text-[#fbfcfd] <?php echo e($isUrdu ? 'rotate-180' : ''); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </button>
                <?php else: ?>
                    <button type="button" wire:click="submitQuote" wire:loading.attr="disabled" class="px-9 py-3.5 rounded-xl bg-[#01188f] hover:bg-[#021070] text-[#fbfcfd] font-black text-sm shadow-xl transition-all flex items-center gap-2 border border-[#fbfcfd]/25">
                        <span wire:loading.remove><?php echo e(__('site.submit_specs')); ?></span>
                        <span wire:loading class="flex items-center gap-2">
                            <svg class="animate-spin h-4 w-4 text-[#fbfcfd]" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            <?php echo e(__('site.registering_quote')); ?>

                        </span>
                    </button>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
</div>
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/livewire/request-quote-form.blade.php ENDPATH**/ ?>