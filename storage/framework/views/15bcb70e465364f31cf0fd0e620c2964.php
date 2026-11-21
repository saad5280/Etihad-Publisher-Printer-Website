<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'eyebrow' => '',
    'title' => '',
    'subtitle' => '',
    'ctaHref' => null,
    'cta' => null,
    'image' => null,
    'imageAlt' => '',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'eyebrow' => '',
    'title' => '',
    'subtitle' => '',
    'ctaHref' => null,
    'cta' => null,
    'image' => null,
    'imageAlt' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<section class="site-hero relative overflow-hidden bg-[#021070] text-[#fbfcfd]">
    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($image): ?>
        <!-- High-Resolution Hero Background Image with Gradient Overlay -->
        <div class="absolute inset-0 z-0 overflow-hidden">
            <img src="<?php echo e($image); ?>" alt="<?php echo e($imageAlt ?: $title); ?>" class="h-full w-full object-cover object-center filter brightness-90 transition-transform duration-1000" loading="eager">
            <div class="absolute inset-0 bg-gradient-to-r from-[#010817]/80 via-[#010817]/42 to-[#010817]/10"></div>
            <div class="absolute inset-0 bg-[#021070]/10"></div>
        </div>
    <?php else: ?>
        <div class="absolute inset-0 paper-grid opacity-70"></div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <!-- Ambient Back-Glow for Glass Refraction -->
    <div class="ambient-glow -top-24 -left-24 h-96 w-96 bg-[#01188f]/40"></div>
    <div class="ambient-glow bottom-0 right-1/4 h-80 w-80 bg-[#01188f]/30"></div>

    <div class="relative z-10 mx-auto flex max-w-7xl flex-col items-start justify-between gap-8 px-4 pt-44 pb-16 sm:px-6 lg:flex-row lg:items-end lg:px-8 lg:pt-48 lg:pb-20">
        <div class="max-w-3xl reveal-from-bottom">
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($eyebrow): ?>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#fbfcfd]/80"><?php echo e($eyebrow); ?></p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            <h1 class="mt-3 font-serif text-4xl font-semibold tracking-tight text-[#fbfcfd] sm:text-5xl drop-shadow-sm"><?php echo e($title); ?></h1>
            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($subtitle): ?>
                <p class="mt-4 max-w-2xl text-base leading-relaxed text-[#fbfcfd]/85 drop-shadow-xs"><?php echo e($subtitle); ?></p>
            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($cta && $ctaHref): ?>
            <a href="<?php echo e($ctaHref); ?>" class="inline-flex shrink-0 items-center gap-2 rounded-full bg-[#01188f] px-6 py-3 text-sm font-bold text-[#fbfcfd] border border-[#fbfcfd]/25 shadow-lg transition-all duration-300 hover:bg-[#021070] hover:scale-105 active:scale-95">
                <?php echo e($cta); ?>

            </a>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</section>
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/components/page-hero.blade.php ENDPATH**/ ?>