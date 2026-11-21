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

     <?php $__env->slot('title', null, []); ?> <?php echo e(__('site.nav_distribution')); ?> | <?php echo e(__('site.brand_name')); ?> <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['eyebrow' => __('site.dist_hero_eyebrow'),'title' => __('site.dist_hero_title'),'subtitle' => __('site.dist_hero_subtitle'),'ctaHref' => route('contact'),'cta' => __('site.dist_hero_cta'),'image' => asset('images/stock/hero-distribution.jpg'),'imageAlt' => __('site.dist_hero_title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.dist_hero_eyebrow')),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.dist_hero_title')),'subtitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.dist_hero_subtitle')),'ctaHref' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('contact')),'cta' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.dist_hero_cta')),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('images/stock/hero-distribution.jpg')),'imageAlt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.dist_hero_title'))]); ?>
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
            <div class="lg:col-span-7 reveal-from-left">
                <h2 class="font-serif text-3xl font-semibold text-[#021070]"><?php echo e(__('site.lahore_hub_title')); ?></h2>
                <p class="mt-4 text-base leading-relaxed text-[#021070]/85"><?php echo e(__('site.lahore_hub_desc')); ?></p>
                <div class="glass-card mt-6 rounded-2xl p-6 shadow-xs framer-card">
                    <h3 class="font-bold text-[#021070]"><?php echo e(__('site.safe_freight_title')); ?></h3>
                    <p class="mt-2 text-sm leading-relaxed text-[#021070]/80"><?php echo e(__('site.safe_freight_desc')); ?></p>
                </div>
                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="<?php echo e(route('contact')); ?>" class="rounded-full bg-[#01188f] px-6 py-3 text-sm font-bold text-[#fbfcfd] shadow-sm transition-all duration-300 hover:bg-[#021070] hover:scale-105"><?php echo e(__('site.trade_registration')); ?></a>
                    <a href="<?php echo e(route('rfq')); ?>" class="glass-pill rounded-full px-6 py-3 text-sm font-bold text-[#021070] transition-all duration-300 hover:bg-[#01188f] hover:text-[#fbfcfd] hover:scale-105"><?php echo e(__('site.request_freight_quote')); ?></a>
                </div>
            </div>
            <div class="lg:col-span-5 reveal-from-right">
                <div class="glass-card-dark overflow-hidden rounded-3xl p-1 text-[#fbfcfd] shadow-xl framer-card">
                    <div class="relative aspect-[16/10] w-full overflow-hidden rounded-2xl bg-[#021070]">
                        <img src="<?php echo e(asset('images/stock/distribution-logistics.jpg')); ?>" alt="Etihad High-Capacity Logistics & Warehouse Distribution Hub" class="h-full w-full object-cover" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070] via-[#021070]/30 to-transparent"></div>
                        <div class="absolute bottom-4 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3.5 py-1 text-xs font-bold text-[#fbfcfd]">
                                <span class="h-2 w-2 rounded-full bg-[#fbfcfd] animate-pulse"></span>
                                <?php echo e(__('site.freight_badge')); ?>

                            </span>
                        </div>
                    </div>
                    <div class="p-6 sm:p-7">
                        <h3 class="border-b border-[#fbfcfd]/15 pb-3 text-lg font-bold text-[#fbfcfd]"><?php echo e(__('site.dist_coverage_title')); ?></h3>
                        <ul class="mt-4 space-y-3.5 text-sm text-[#fbfcfd]/85">
                            <li class="flex items-start gap-2.5">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#01188f]"></span>
                                <span><strong class="text-[#fbfcfd]"><?php echo e(__('site.dist_point_1_title')); ?></strong> <?php echo e(__('site.dist_point_1_desc')); ?></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#01188f]"></span>
                                <span><strong class="text-[#fbfcfd]"><?php echo e(__('site.dist_point_2_title')); ?></strong> <?php echo e(__('site.dist_point_2_desc')); ?></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#01188f]"></span>
                                <span><strong class="text-[#fbfcfd]"><?php echo e(__('site.dist_point_3_title')); ?></strong> <?php echo e(__('site.dist_point_3_desc')); ?></span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-1.5 h-2 w-2 shrink-0 rounded-full bg-[#01188f]"></span>
                                <span><strong class="text-[#fbfcfd]"><?php echo e(__('site.dist_point_4_title')); ?></strong> <?php echo e(__('site.dist_point_4_desc')); ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative overflow-hidden border-t border-[#01188f]/15 bg-[#fbfcfd] py-16 text-[#021070]">
        <div class="ambient-glow top-1/2 right-10 h-80 w-80 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-center font-serif text-3xl font-semibold text-[#021070] reveal-from-bottom"><?php echo e(__('site.glossary_title')); ?></h2>
            <div class="mt-10 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                <?php
                    $isUrdu = app()->getLocale() === 'ur';
                ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = [
                    ['Etihad Publishers & Printers', 'اتحاد پبلشرز اینڈ پرنٹرز', 'Official corporate title', 'باضابطہ اشاعتی و طباعتی نام'],
                    ['Offset Printing Press', 'آفسیٹ پرنٹنگ پریس', 'Lithographic high-speed press technology', 'تیز رفتار لیتھوگرافک پرنٹنگ ٹیکنالوجی'],
                    ['Book Signature', 'فارمہ', 'Folded sheet section assembled into books', 'موڑی گئی شیٹس جو کتاب کی شکل میں جڑتی ہیں'],
                    ['Paper Unit (Rim)', 'رم', 'Standard packaging unit for printing sheets', 'کاغذ کی معیاری پیکیجنگ اکائی (500 شیٹس)'],
                    ['Warehouse Facility', 'گودام', 'Dedicated paper and book storage', 'کاغذ اور کتب کا محفوظ اسٹوریج'],
                    ['CTP Digital Plates', 'سی ٹی پی پلیٹیں', 'Computer-to-Plate aluminium imaging', 'کمپیوٹر سے ایلومینیم پلیٹوں پر براہ راست امیجنگ'],
                    ['Perfect Binding', 'پرفیکٹ بائنڈنگ', 'Thermal spine binding for softcovers', 'سافٹ کور کتب کے لیے پائیدار ہاٹ میلٹ بائنڈنگ'],
                    ['Folding Line', 'فولڈنگ مشین', 'Automated signature folding', 'خودکار طریقے سے فارمے بنانے والی مشین'],
                    ['Bleach Card Cover', 'بلیچ کارڈ', 'Protective card stock for textbook covers', 'درسی کتب کے سرورق کے لیے مضبوط کارڈ بورڈ'],
                    ['Protective Bundling', 'کتابوں کا بنڈل', 'Secure packing for freight to book markets', 'مارکیٹوں تک محفوظ ترسیل کے لیے پیکیجنگ'],
                    ['Request a Quote', 'کوٹیشن کی درخواست کریں', 'Primary call-to-action for estimates', 'پرنٹ تخمینہ اور ریٹس حاصل کرنے کا طریقہ'],
                    ['Textbook Publications', 'درسی و نصابی کتب', 'Curriculum catalog category', 'قومی و نجی تعلیمی نصاب کی مطبوعات'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <div class="glass-card framer-card rounded-2xl p-5 shadow-xs reveal-from-bottom delay-<?php echo e((($index % 4) + 1) * 100); ?>">
                        <div class="flex items-start justify-between gap-3">
                            <p class="text-sm font-bold text-[#021070]"><?php echo e($isUrdu ? $item[1] : $item[0]); ?></p>
                            <p class="text-xs font-semibold text-[#01188f]"><?php echo e($isUrdu ? $item[0] : $item[1]); ?></p>
                        </div>
                        <p class="mt-2 text-xs text-[#021070]/70"><?php echo e($isUrdu ? $item[3] : $item[2]); ?></p>
                    </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
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
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/pages/distribution.blade.php ENDPATH**/ ?>