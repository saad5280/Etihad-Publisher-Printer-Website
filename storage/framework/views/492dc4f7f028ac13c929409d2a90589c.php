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

     <?php $__env->slot('title', null, []); ?> <?php echo e(__('site.nav_contact')); ?> | <?php echo e(__('site.brand_name')); ?> <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['eyebrow' => __('site.contact_hero_eyebrow'),'title' => __('site.contact_hero_title'),'subtitle' => __('site.contact_hero_subtitle'),'ctaHref' => route('rfq'),'cta' => __('site.contact_hero_cta'),'image' => asset('images/stock/hero-contact.jpg'),'imageAlt' => __('site.contact_hero_title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.contact_hero_eyebrow')),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.contact_hero_title')),'subtitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.contact_hero_subtitle')),'ctaHref' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('rfq')),'cta' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.contact_hero_cta')),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('images/stock/hero-contact.jpg')),'imageAlt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.contact_hero_title'))]); ?>
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

    <section class="relative overflow-hidden bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto grid max-w-7xl gap-12 px-4 sm:px-6 lg:grid-cols-12 lg:px-8">
            <div class="space-y-6 lg:col-span-5 reveal-from-left">
                <!-- Headquarters Facility Showcase Glass Card -->
                <div class="glass-card framer-card overflow-hidden rounded-3xl shadow-md">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="<?php echo e(asset('images/stock/contact-headquarters.jpg')); ?>" alt="Etihad Publishers & Printers Press Headquarters" class="h-full w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                        <div class="absolute bottom-3 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3.5 py-1 text-[11px] font-bold text-[#fbfcfd]">
                                <span class="h-2 w-2 rounded-full bg-[#fbfcfd] animate-pulse"></span>
                                <?php echo e(__('site.contact_facility_badge')); ?>

                            </span>
                        </div>
                    </div>
                    <div class="p-7">
                        <div class="flex items-center gap-3">
                            <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="<?php echo e(__('site.brand_name')); ?>" class="h-12 w-12 rounded-xl shadow-xs border border-[#01188f]/20">
                            <div>
                                <h2 class="text-lg font-bold text-[#021070]"><?php echo e(__('site.press_hq')); ?></h2>
                                <p class="text-sm font-bold text-[#01188f]"><?php echo e(__('site.city_country')); ?></p>
                            </div>
                        </div>
                        <dl class="mt-6 space-y-4 text-sm">
                            <div>
                                <dt class="font-bold text-[#021070]"><?php echo e(__('site.plant_godowns_label')); ?></dt>
                                <dd class="text-[#021070]/80"><?php echo e(__('site.plant_godowns_val')); ?></dd>
                            </div>
                            <div>
                                <dt class="font-bold text-[#021070]"><?php echo e(__('site.wholesale_hub_label')); ?></dt>
                                <dd class="text-[#021070]/80"><?php echo e(__('site.wholesale_hub_val')); ?></dd>
                            </div>
                            <div>
                                <dt class="font-bold text-[#021070]"><?php echo e(__('site.email_label')); ?></dt>
                                <dd><a class="font-medium text-[#01188f] hover:underline" href="mailto:info@etihadpublishers.com">info@etihadpublishers.com</a></dd>
                            </div>
                            <div>
                                <dt class="font-bold text-[#021070]"><?php echo e(__('site.whatsapp_desk_label')); ?></dt>
                                <dd class="text-[#021070]/80"><?php echo e(__('site.whatsapp_desk_val')); ?></dd>
                            </div>
                        </dl>
                        <div class="glass-pill mt-6 rounded-2xl p-4 text-sm">
                            <p class="font-bold text-[#021070]"><?php echo e(__('site.operating_hours_label')); ?></p>
                            <p class="text-[#021070]/80"><?php echo e(__('site.operating_hours_val')); ?></p>
                            <p class="mt-1 font-medium text-[#01188f]"><?php echo e(__('site.operating_hours_note')); ?></p>
                        </div>
                    </div>
                </div>

                <div class="glass-panel overflow-hidden rounded-3xl p-1 shadow-xs reveal-scale">
                    <iframe title="Lahore press location" class="h-60 w-full rounded-2xl" loading="lazy" src="https://www.openstreetmap.org/export/embed.html?bbox=74.28%2C31.54%2C74.36%2C31.61&amp;layer=mapnik"></iframe>
                </div>
            </div>
            <div class="lg:col-span-7 reveal-from-right">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('contact-inquiry-form', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-1378026477-0', $__key);

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
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/pages/contact.blade.php ENDPATH**/ ?>