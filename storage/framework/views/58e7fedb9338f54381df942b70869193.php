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

     <?php $__env->slot('title', null, []); ?> <?php echo e(__('site.nav_publications')); ?> | <?php echo e(__('site.brand_name')); ?> <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['eyebrow' => __('site.pub_hero_eyebrow'),'title' => __('site.pub_hero_title'),'subtitle' => __('site.pub_hero_subtitle'),'ctaHref' => route('rfq'),'cta' => __('site.pub_hero_cta'),'image' => asset('images/stock/hero-publications.jpg'),'imageAlt' => __('site.pub_hero_title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.pub_hero_eyebrow')),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.pub_hero_title')),'subtitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.pub_hero_subtitle')),'ctaHref' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('rfq')),'cta' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.pub_hero_cta')),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('images/stock/hero-publications.jpg')),'imageAlt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.pub_hero_title'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9d931d4f11b4d2850df99e991db1dca)): ?>
<?php $attributes = $__attributesOriginala9d931d4f11b4d2850df99e991db1dca; ?>
<?php unset($__attributesOriginala9d931d4f11b4d2850df99e991db1dca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9d931d4f11b4d2850df99e991db1dca)): ?>
<?php $component = $__componentOriginala9d931d4f11b4d2850df99e991db1dca; ?>
<?php unset($__componentOriginala9d931d4f11b4d2850df99e991db1dca); ?>
<?php endif; ?>

    <section class="relative overflow-hidden bg-[#fbfcfd] py-16 text-[#021070]">
        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Curriculum Division Feature Showcase in Glass Panel -->
            <div class="glass-panel mb-12 overflow-hidden rounded-3xl p-2 shadow-md">
                <div class="grid items-center lg:grid-cols-12">
                    <div class="relative aspect-[16/10] w-full overflow-hidden rounded-2xl bg-[#021070] lg:col-span-5 lg:aspect-auto lg:h-full reveal-from-left sda-slide-left">
                        <img src="<?php echo e(asset('images/stock/curriculum-library-students.jpg')); ?>" alt="Students reading Etihad curriculum publications in library" class="h-full w-full object-cover min-h-[260px]" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-[#021070]/30"></div>
                        <div class="absolute bottom-4 start-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3.5 py-1 text-xs font-bold text-[#fbfcfd]">
                                <?php echo e(__('site.curriculum_div_badge')); ?>

                            </span>
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 lg:p-10 lg:col-span-7 reveal-from-right sda-slide-right">
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#01188f]"><?php echo e(__('site.curriculum_div_tag')); ?></span>
                        <h2 class="mt-2 font-serif text-2xl font-bold text-[#021070] sm:text-3xl"><?php echo e(__('site.curriculum_div_title')); ?></h2>
                        <p class="mt-4 text-sm leading-relaxed text-[#021070]/80 sm:text-base">
                            <?php echo e(__('site.curriculum_div_desc')); ?>

                        </p>
                        <div class="mt-6 flex flex-wrap items-center gap-4">
                            <a href="<?php echo e(route('contact')); ?>" class="inline-flex items-center gap-2 rounded-full bg-[#01188f] px-5 py-2.5 text-xs font-bold text-[#fbfcfd] transition-all duration-300 hover:bg-[#021070] hover:scale-105">
                                <span><?php echo e(__('site.req_sample_copies')); ?></span>
                                <svg class="h-3.5 w-3.5 <?php echo e(app()->getLocale() === 'ur' ? 'rotate-180' : ''); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </a>
                            <a href="<?php echo e(route('rfq')); ?>" class="glass-pill inline-flex items-center rounded-full px-5 py-2.5 text-xs font-bold text-[#021070] transition-all duration-300 hover:bg-[#01188f] hover:text-[#fbfcfd] hover:scale-105">
                                <?php echo e(__('site.bulk_syllabus_quote')); ?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('publications-catalog', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-3222749767-0', $__key);

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
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/pages/publications.blade.php ENDPATH**/ ?>