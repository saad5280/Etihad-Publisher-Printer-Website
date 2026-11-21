<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <section class="site-hero relative overflow-hidden bg-[#021070] text-[#fbfcfd]">
        <!-- High-Resolution Industrial Offset Press Background with Gradient Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <img src="<?php echo e(asset('images/stock/hero-press-action.jpg')); ?>" alt="High-Speed Industrial Lithographic Printing Press Running Continuous Paper" class="h-full w-full object-cover object-center filter brightness-90" loading="eager">
            <div class="absolute inset-0 bg-gradient-to-r from-[#010817]/80 via-[#010817]/42 to-[#010817]/10"></div>
            <div class="absolute inset-0 bg-[#021070]/10"></div>
        </div>
        <div class="absolute inset-0 paper-grid opacity-35 z-0 pointer-events-none"></div>

        <!-- Ambient Back-Glow Orbs for Glass Refraction -->
        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/40"></div>
        <div class="ambient-glow top-1/2 right-0 h-80 w-80 bg-[#01188f]/30"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 pt-44 pb-20 sm:px-6 lg:px-8 lg:pt-48 lg:pb-28">
            <div class="max-w-3xl reveal-from-left">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#fbfcfd]"><?php echo e(__('site.english_tagline')); ?></p>
                <h1 class="mt-4 font-serif text-4xl font-semibold leading-tight tracking-tight text-[#fbfcfd] sm:text-5xl lg:text-[3.5rem] drop-shadow-sm">
                    <?php echo e(__('site.hero_title')); ?>

                </h1>
                <p class="font-urdu mt-4 text-xl text-[#fbfcfd] font-semibold"><?php echo e(__('site.hero_urdu')); ?></p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a href="<?php echo e(route('rfq')); ?>" class="inline-flex items-center justify-center rounded-full bg-[#01188f] px-7 py-3.5 text-sm font-bold text-[#fbfcfd] border border-[#fbfcfd]/25 shadow-lg transition-all duration-300 hover:bg-[#021070] hover:scale-105 active:scale-95">
                        <?php echo e(__('site.request_custom_quote')); ?>

                    </a>
                    <a href="<?php echo e(route('publications')); ?>" class="glass-pill-dark inline-flex items-center justify-center rounded-full px-7 py-3.5 text-sm font-bold text-[#fbfcfd] transition-all duration-300 hover:bg-[#fbfcfd]/20 hover:scale-105">
                        <?php echo e(__('site.explore_publications')); ?>

                    </a>
                </div>

                <div class="mt-8 flex flex-wrap gap-2.5">
                    <span class="glass-pill-dark rounded-full px-4 py-1.5 text-xs font-semibold text-[#fbfcfd]"><?php echo e(__('site.badge_capacity')); ?></span>
                    <span class="glass-pill-dark rounded-full px-4 py-1.5 text-xs font-semibold text-[#fbfcfd]"><?php echo e(__('site.badge_heidelberg')); ?></span>
                    <span class="glass-pill-dark rounded-full px-4 py-1.5 text-xs font-semibold text-[#fbfcfd]"><?php echo e(__('site.badge_binding')); ?></span>
                </div>
            </div>
        </div>

        <div class="relative z-10 glass-panel-dark rounded-e-xl border-t border-e border-[#fbfcfd]/15">
            <div class="mx-auto grid max-w-7xl grid-cols-2 lg:grid-cols-4">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                    ['site.proof_engineering', 'site.proof_engineering_value'],
                    ['site.proof_fleet', 'site.proof_fleet_value'],
                    ['site.proof_facilities', 'site.proof_facilities_value'],
                    ['site.proof_inhouse', 'site.proof_inhouse_value'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metric): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="border-[#fbfcfd]/15 px-6 py-6 sm:px-8 <?php echo e($loop->odd ? 'border-e' : ''); ?> <?php echo e($loop->index < 2 ? 'border-b lg:border-b-0' : ''); ?> <?php echo e($loop->index < 3 ? 'lg:border-e' : ''); ?>">
                        <p class="text-xs font-bold uppercase tracking-[0.16em] text-[#fbfcfd]/80"><?php echo e(__($metric[0])); ?></p>
                        <p class="mt-2 text-sm font-semibold text-[#fbfcfd] sm:text-base"><?php echo e(__($metric[1])); ?></p>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </div>
    </section>

    <!-- About Section with Glassmorphism Panels -->
    <section class="relative overflow-hidden bg-[#fbfcfd] py-20 text-[#021070]">
        <!-- Subtle Ambient Glow -->
        <div class="ambient-glow top-1/4 -left-32 h-96 w-96 bg-[#01188f]/10"></div>
        <div class="ambient-glow bottom-10 right-0 h-80 w-80 bg-[#01188f]/10"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-8 lg:grid-cols-12">
                <!-- Left: Corporate Intro -->
                <div class="flex flex-col justify-between lg:col-span-4 reveal-from-left sda-slide-left">
                    <div>
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#01188f]"><?php echo e(__('site.about_tag')); ?></span>
                            <span class="h-0.5 w-12 bg-[#01188f]"></span>
                        </div>
                        <h2 class="mt-3 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl"><?php echo e(__('site.about_title')); ?></h2>
                        <p class="mt-4 text-sm leading-relaxed text-[#021070]/80 sm:text-base"><?php echo e(__('site.about_desc')); ?></p>
                    </div>
                    <div class="mt-8">
                        <a href="<?php echo e(route('about')); ?>" class="inline-flex items-center gap-2 rounded-full bg-[#01188f] px-6 py-3 text-sm font-bold text-[#fbfcfd] shadow-sm transition-all duration-300 hover:bg-[#021070] hover:scale-105">
                            <span><?php echo e(__('site.discover_company')); ?></span>
                            <svg class="h-4 w-4 <?php echo e(app()->getLocale() === 'ur' ? 'rotate-180' : ''); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Center: Industrial Capabilities Triptych Image in Glass Frame -->
                <div class="relative overflow-hidden rounded-3xl glass-panel p-2 shadow-md lg:col-span-5 reveal-scale">
                    <img src="<?php echo e(asset('images/industrial-capabilities-triptych.png')); ?>" alt="Etihad Plant Machinery, Offset Printing & Perfect Binding" class="w-full h-auto object-contain block rounded-2xl" loading="lazy">
                </div>

                <!-- Right: Glass Quote Card -->
                <div class="glass-card flex flex-col justify-center rounded-3xl p-8 text-center lg:col-span-3 reveal-from-right sda-slide-right">
                    <span class="mx-auto flex h-10 w-10 items-center justify-center rounded-full bg-[#021070] text-[#fbfcfd] text-xl font-serif shadow-xs">“</span>
                    <blockquote class="mt-4 font-serif text-xl italic font-semibold leading-relaxed text-[#021070]">
                        <?php echo e(__('site.about_quote')); ?>

                    </blockquote>
                    <div class="mt-6 border-t border-[#01188f]/15 pt-4 text-xs font-semibold text-[#021070]/70">
                        <p class="text-[#021070] font-bold"><?php echo e(__('site.about_quote_author')); ?></p>
                        <p class="mt-0.5"><?php echo e(__('site.about_quote_sub')); ?></p>
                    </div>
                </div>
            </div>

            <!-- 4 Strategic Pillars Bar in Glass Cards -->
            <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                    ['site.pillar_speed', 'site.pillar_speed_copy'],
                    ['site.pillar_fidelity', 'site.pillar_fidelity_copy'],
                    ['site.pillar_roof', 'site.pillar_roof_copy'],
                    ['site.pillar_logistics', 'site.pillar_logistics_copy'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $pillar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <article class="glass-card rounded-2xl p-5 framer-card reveal-from-bottom delay-<?php echo e(($index + 1) * 100); ?>">
                        <span class="font-serif text-2xl font-bold text-[#01188f]">0<?php echo e($index + 1); ?></span>
                        <h3 class="mt-2 text-base font-bold text-[#021070]"><?php echo e(__($pillar[0])); ?></h3>
                        <p class="mt-1.5 text-xs leading-relaxed text-[#021070]/75"><?php echo e(__($pillar[1])); ?></p>
                    </article>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>
        </div>
    </section>

    <!-- The Production Journey: From Manuscript to Classroom -->
    <section class="relative overflow-hidden border-y border-[#01188f]/15 bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="ambient-glow top-1/3 right-10 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-end">
                <div class="reveal-from-left">
                    <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#01188f]"><?php echo e(__('site.process_tag')); ?></span>
                    <h2 class="mt-2 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl"><?php echo e(__('site.process_title')); ?></h2>
                    <p class="mt-3 max-w-2xl text-sm text-[#021070]/80 sm:text-base"><?php echo e(__('site.process_desc')); ?></p>
                </div>
                <a href="<?php echo e(route('services')); ?>" class="inline-flex shrink-0 items-center gap-2 rounded-full bg-[#01188f] px-6 py-3 text-sm font-bold text-[#fbfcfd] transition-all duration-300 hover:bg-[#021070] hover:scale-105">
                    <span><?php echo e(__('site.explore_plant_fleet')); ?></span>
                    <svg class="h-4 w-4 <?php echo e(app()->getLocale() === 'ur' ? 'rotate-180' : ''); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Phase 1 -->
                <div class="glass-card group relative flex flex-col justify-between rounded-3xl p-7 framer-card reveal-from-left delay-100 sda-slide-left">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#021070] font-serif text-lg font-bold text-[#fbfcfd] shadow-md">01</span>
                            <span class="rounded-full bg-[#01188f]/10 px-3 py-1 text-[11px] font-bold text-[#01188f] uppercase tracking-wider"><?php echo e(__('site.phase_1_cat')); ?></span>
                        </div>
                        <h3 class="mt-6 text-lg font-bold text-[#021070]"><?php echo e(__('site.phase_1_title')); ?></h3>
                        <p class="mt-3 text-xs leading-relaxed text-[#021070]/80"><?php echo e(__('site.phase_1_desc')); ?></p>
                    </div>
                    <div class="mt-6 border-t border-[#01188f]/15 pt-4 text-[11px] font-semibold text-[#01188f]">
                        <?php echo e(__('site.phase_1_bullet')); ?>

                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="glass-card group relative flex flex-col justify-between rounded-3xl p-7 framer-card reveal-from-bottom delay-200 sda-slide-up">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#021070] font-serif text-lg font-bold text-[#fbfcfd] shadow-md">02</span>
                            <span class="rounded-full bg-[#01188f]/10 px-3 py-1 text-[11px] font-bold text-[#01188f] uppercase tracking-wider"><?php echo e(__('site.phase_2_cat')); ?></span>
                        </div>
                        <h3 class="mt-6 text-lg font-bold text-[#021070]"><?php echo e(__('site.phase_2_title')); ?></h3>
                        <p class="mt-3 text-xs leading-relaxed text-[#021070]/80"><?php echo e(__('site.phase_2_desc')); ?></p>
                    </div>
                    <div class="mt-6 border-t border-[#01188f]/15 pt-4 text-[11px] font-semibold text-[#01188f]">
                        <?php echo e(__('site.phase_2_bullet')); ?>

                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="glass-card group relative flex flex-col justify-between rounded-3xl p-7 framer-card reveal-from-bottom delay-300 sda-slide-up">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#021070] font-serif text-lg font-bold text-[#fbfcfd] shadow-md">03</span>
                            <span class="rounded-full bg-[#01188f]/10 px-3 py-1 text-[11px] font-bold text-[#01188f] uppercase tracking-wider"><?php echo e(__('site.phase_3_cat')); ?></span>
                        </div>
                        <h3 class="mt-6 text-lg font-bold text-[#021070]"><?php echo e(__('site.phase_3_title')); ?></h3>
                        <p class="mt-3 text-xs leading-relaxed text-[#021070]/80"><?php echo e(__('site.phase_3_desc')); ?></p>
                    </div>
                    <div class="mt-6 border-t border-[#01188f]/15 pt-4 text-[11px] font-semibold text-[#01188f]">
                        <?php echo e(__('site.phase_3_bullet')); ?>

                    </div>
                </div>

                <!-- Phase 4 -->
                <div class="glass-card group relative flex flex-col justify-between rounded-3xl p-7 framer-card reveal-from-right delay-400 sda-slide-right">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#021070] font-serif text-lg font-bold text-[#fbfcfd] shadow-md">04</span>
                            <span class="rounded-full bg-[#01188f]/10 px-3 py-1 text-[11px] font-bold text-[#01188f] uppercase tracking-wider"><?php echo e(__('site.phase_4_cat')); ?></span>
                        </div>
                        <h3 class="mt-6 text-lg font-bold text-[#021070]"><?php echo e(__('site.phase_4_title')); ?></h3>
                        <p class="mt-3 text-xs leading-relaxed text-[#021070]/80"><?php echo e(__('site.phase_4_desc')); ?></p>
                    </div>
                    <div class="mt-6 border-t border-[#01188f]/15 pt-4 text-[11px] font-semibold text-[#01188f]">
                        <?php echo e(__('site.phase_4_bullet')); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum Portfolio Section -->
    <section class="bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start justify-between gap-4 sm:flex-row sm:items-end">
                <div class="reveal-from-left">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#01188f]"><?php echo e(__('site.curriculum_portfolio_tag')); ?></p>
                    <h2 class="mt-2 font-serif text-4xl font-semibold text-[#021070]"><?php echo e(__('site.curriculum_portfolio_title')); ?></h2>
                </div>
                <a href="<?php echo e(route('publications')); ?>" class="rounded-full bg-[#01188f] px-5 py-2.5 text-sm font-bold text-[#fbfcfd] transition-all duration-300 hover:bg-[#021070] hover:scale-105"><?php echo e(__('site.view_all_publications')); ?></a>
            </div>
            <div class="mt-10">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('publications-catalog', ['preview' => 'true']);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-2391723168-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
            </div>
        </div>
    </section>

    <!-- Institutional Advantages & Academic Guarantees in Glassmorphism Architecture -->
    <section class="relative overflow-hidden bg-[#021070] py-20 text-[#fbfcfd]">
        <div class="ambient-glow top-1/4 -right-20 h-96 w-96 bg-[#01188f]/40"></div>
        <div class="ambient-glow bottom-0 left-10 h-80 w-80 bg-[#01188f]/30"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-start justify-between gap-4 lg:flex-row lg:items-end">
                <div class="max-w-2xl reveal-from-left">
                    <span class="text-xs font-bold uppercase tracking-[0.22em] text-[#fbfcfd]"><?php echo e(__('site.inst_adv_tag')); ?></span>
                    <h2 class="mt-2 font-serif text-3xl font-semibold text-[#fbfcfd] sm:text-4xl"><?php echo e(__('site.inst_adv_title')); ?></h2>
                    <p class="mt-4 text-sm leading-relaxed text-[#fbfcfd]/85 sm:text-base"><?php echo e(__('site.inst_adv_desc')); ?></p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="<?php echo e(route('about')); ?>" class="glass-pill-dark rounded-full px-5 py-2.5 text-xs font-bold text-[#fbfcfd] transition-all duration-300 hover:bg-[#fbfcfd]/20 hover:scale-105"><?php echo e(__('site.about_our_leadership')); ?></a>
                    <a href="<?php echo e(route('rfq')); ?>" class="rounded-full bg-[#01188f] px-5 py-2.5 text-xs font-bold text-[#fbfcfd] border border-[#fbfcfd]/25 transition-all duration-300 hover:bg-[#021070] hover:scale-105"><?php echo e(__('site.request_bulk_quote')); ?></a>
                </div>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Advantage 1 -->
                <div class="glass-card-dark flex flex-col justify-between rounded-3xl p-7 framer-card reveal-from-left delay-100 sda-slide-left">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#01188f] text-[#fbfcfd] shadow-md border border-[#fbfcfd]/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="mt-6 text-lg font-bold text-[#fbfcfd]"><?php echo e(__('site.adv_1_title')); ?></h3>
                        <p class="mt-2 text-xs leading-relaxed text-[#fbfcfd]/85"><?php echo e(__('site.adv_1_desc')); ?></p>
                    </div>
                    <div class="mt-6 border-t border-[#fbfcfd]/15 pt-4 text-[11px] font-bold text-[#fbfcfd] uppercase tracking-wider">
                        <?php echo e(__('site.adv_1_badge')); ?>

                    </div>
                </div>

                <!-- Advantage 2 -->
                <div class="glass-card-dark flex flex-col justify-between rounded-3xl p-7 framer-card reveal-from-left delay-200 sda-slide-left">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#01188f] text-[#fbfcfd] shadow-md border border-[#fbfcfd]/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <h3 class="mt-6 text-lg font-bold text-[#fbfcfd]"><?php echo e(__('site.adv_2_title')); ?></h3>
                        <p class="mt-2 text-xs leading-relaxed text-[#fbfcfd]/85"><?php echo e(__('site.adv_2_desc')); ?></p>
                    </div>
                    <div class="mt-6 border-t border-[#fbfcfd]/15 pt-4 text-[11px] font-bold text-[#fbfcfd] uppercase tracking-wider">
                        <?php echo e(__('site.adv_2_badge')); ?>

                    </div>
                </div>

                <!-- Advantage 3 -->
                <div class="glass-card-dark flex flex-col justify-between rounded-3xl p-7 framer-card reveal-from-right delay-300 sda-slide-right">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#01188f] text-[#fbfcfd] shadow-md border border-[#fbfcfd]/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <h3 class="mt-6 text-lg font-bold text-[#fbfcfd]"><?php echo e(__('site.adv_3_title')); ?></h3>
                        <p class="mt-2 text-xs leading-relaxed text-[#fbfcfd]/85"><?php echo e(__('site.adv_3_desc')); ?></p>
                    </div>
                    <div class="mt-6 border-t border-[#fbfcfd]/15 pt-4 text-[11px] font-bold text-[#fbfcfd] uppercase tracking-wider">
                        <?php echo e(__('site.adv_3_badge')); ?>

                    </div>
                </div>

                <!-- Advantage 4 -->
                <div class="glass-card-dark flex flex-col justify-between rounded-3xl p-7 framer-card reveal-from-right delay-400 sda-slide-right">
                    <div>
                        <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-[#01188f] text-[#fbfcfd] shadow-md border border-[#fbfcfd]/20">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        </div>
                        <h3 class="mt-6 text-lg font-bold text-[#fbfcfd]"><?php echo e(__('site.adv_4_title')); ?></h3>
                        <p class="mt-2 text-xs leading-relaxed text-[#fbfcfd]/85"><?php echo e(__('site.adv_4_desc')); ?></p>
                    </div>
                    <div class="mt-6 border-t border-[#fbfcfd]/15 pt-4 text-[11px] font-bold text-[#fbfcfd] uppercase tracking-wider">
                        <?php echo e(__('site.adv_4_badge')); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RFQ Calculator Section with Glass Frame -->
    <section class="relative overflow-hidden border-t border-[#01188f]/15 bg-[#fbfcfd] py-20 text-[#021070]" id="quote-calculator">
        <div class="ambient-glow top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-96 w-96 bg-[#01188f]/10"></div>
        <div class="relative z-10 mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center reveal-from-bottom">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#01188f]"><?php echo e(__('site.calc_tag')); ?></p>
                <h2 class="mt-2 font-serif text-4xl font-semibold text-[#021070]"><?php echo e(__('site.calc_title')); ?></h2>
                <p class="mx-auto mt-3 max-w-xl text-sm text-[#021070]/80"><?php echo e(__('site.calc_desc')); ?></p>
            </div>
            <div class="reveal-scale">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('request-quote-form', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-2391723168-1', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/pages/home.blade.php ENDPATH**/ ?>