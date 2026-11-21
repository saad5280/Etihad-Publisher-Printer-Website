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

     <?php $__env->slot('title', null, []); ?> <?php echo e(__('site.nav_services_machinery')); ?> | <?php echo e(__('site.brand_name')); ?> <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginala9d931d4f11b4d2850df99e991db1dca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9d931d4f11b4d2850df99e991db1dca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-hero','data' => ['eyebrow' => __('site.services_hero_eyebrow'),'title' => __('site.services_hero_title'),'subtitle' => __('site.services_hero_subtitle'),'ctaHref' => route('rfq'),'cta' => __('site.services_hero_cta'),'image' => asset('images/stock/hero-services.jpg'),'imageAlt' => __('site.services_hero_title')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('page-hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['eyebrow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.services_hero_eyebrow')),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.services_hero_title')),'subtitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.services_hero_subtitle')),'ctaHref' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('rfq')),'cta' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.services_hero_cta')),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(asset('images/stock/hero-services.jpg')),'imageAlt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('site.services_hero_title'))]); ?>
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

    <!-- COMBINED SERVICES & MACHINERY SECTION -->
    <section id="services-machinery" class="relative overflow-hidden scroll-mt-40 bg-[#fbfcfd] py-20 text-[#021070]">
        <div id="machinery" class="scroll-mt-40"></div>
        <div id="services" class="scroll-mt-40"></div>

        <div class="ambient-glow -top-20 -left-20 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 reveal-from-bottom">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#01188f]"><?php echo e(__('site.services_hero_eyebrow')); ?></span>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl"><?php echo e(__('site.services_section_title')); ?></h2>
                <p class="mt-3 max-w-2xl text-sm text-[#021070]/80 sm:text-base"><?php echo e(__('site.services_section_desc')); ?></p>
            </div>

            <!-- Panoramic Production Showcase in Glass Frame -->
            <div class="glass-panel mb-14 overflow-hidden rounded-3xl p-2 shadow-md reveal-scale">
                <div class="relative aspect-[16/7] w-full overflow-hidden rounded-2xl bg-[#021070]">
                    <img src="<?php echo e(asset('images/stock/industrial-press-line.jpg')); ?>" alt="Etihad Plant High-Capacity Continuous Printing Press Line" class="h-full w-full object-cover" loading="lazy">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 start-6">
                        <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-4 py-1 text-xs font-bold text-[#fbfcfd]">
                            <?php echo e(__('site.panoramic_badge')); ?>

                        </span>
                    </div>
                </div>
                <div class="grid divide-y divide-[#01188f]/15 bg-transparent p-5 sm:grid-cols-3 sm:divide-x sm:divide-y-0 text-center">
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]"><?php echo e(__('site.panoramic_col_1_tag')); ?></span>
                        <p class="mt-1 text-sm font-bold text-[#021070]"><?php echo e(__('site.panoramic_col_1_title')); ?></p>
                        <p class="mt-0.5 text-xs text-[#021070]/70"><?php echo e(__('site.panoramic_col_1_desc')); ?></p>
                    </div>
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]"><?php echo e(__('site.panoramic_col_2_tag')); ?></span>
                        <p class="mt-1 text-sm font-bold text-[#021070]"><?php echo e(__('site.panoramic_col_2_title')); ?></p>
                        <p class="mt-0.5 text-xs text-[#021070]/70"><?php echo e(__('site.panoramic_col_2_desc')); ?></p>
                    </div>
                    <div class="px-4 py-2">
                        <span class="text-xs font-bold uppercase tracking-wider text-[#01188f]"><?php echo e(__('site.panoramic_col_3_tag')); ?></span>
                        <p class="mt-1 text-sm font-bold text-[#021070]"><?php echo e(__('site.panoramic_col_3_title')); ?></p>
                        <p class="mt-0.5 text-xs text-[#021070]/70"><?php echo e(__('site.panoramic_col_3_desc')); ?></p>
                    </div>
                </div>
            </div>

            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <?php
                    $offerings = [
                        [
                            'id' => 'offset',
                            'service' => 'service_offset_title',
                            'machine' => 'service_offset_machine',
                            'category' => 'service_offset_category',
                            'badge' => 'service_offset_badge',
                            'image' => 'images/machinery/machine-heidelberg.jpg',
                            'description' => 'service_offset_desc',
                            'technical' => 'service_offset_tech',
                            'apps' => 'service_offset_apps',
                            'speed' => 'service_offset_speed',
                        ],
                        [
                            'id' => 'monochrome',
                            'service' => 'service_mono_title',
                            'machine' => 'service_mono_machine',
                            'category' => 'service_mono_category',
                            'badge' => 'service_mono_badge',
                            'image' => 'images/machinery/machine-monochrome.jpg',
                            'description' => 'service_mono_desc',
                            'technical' => 'service_mono_tech',
                            'apps' => 'service_mono_apps',
                            'speed' => 'service_mono_speed',
                        ],
                        [
                            'id' => 'ctp',
                            'service' => 'service_ctp_title',
                            'machine' => 'service_ctp_machine',
                            'category' => 'service_ctp_category',
                            'badge' => 'service_ctp_badge',
                            'image' => 'images/machinery/machine-ctp.jpg',
                            'description' => 'service_ctp_desc',
                            'technical' => 'service_ctp_tech',
                            'apps' => 'service_ctp_apps',
                            'speed' => 'service_ctp_speed',
                        ],
                        [
                            'id' => 'binding',
                            'service' => 'service_bind_title',
                            'machine' => 'service_bind_machine',
                            'category' => 'service_bind_category',
                            'badge' => 'service_bind_badge',
                            'image' => 'images/machinery/machine-perfect-binding.jpg',
                            'description' => 'service_bind_desc',
                            'technical' => 'service_bind_tech',
                            'apps' => 'service_bind_apps',
                            'speed' => 'service_bind_speed',
                        ],
                        [
                            'id' => 'folding',
                            'service' => 'service_fold_title',
                            'machine' => 'service_fold_machine',
                            'category' => 'service_fold_category',
                            'badge' => 'service_fold_badge',
                            'image' => 'images/machinery/machine-folding-cutting.jpg',
                            'description' => 'service_fold_desc',
                            'technical' => 'service_fold_tech',
                            'apps' => 'service_fold_apps',
                            'speed' => 'service_fold_speed',
                        ],
                        [
                            'id' => 'contract',
                            'service' => 'service_contract_title',
                            'machine' => 'service_contract_machine',
                            'category' => 'service_contract_category',
                            'badge' => 'service_contract_badge',
                            'image' => 'images/machinery/machine-contract-publishing.jpg',
                            'description' => 'service_contract_desc',
                            'technical' => 'service_contract_tech',
                            'apps' => 'service_contract_apps',
                            'speed' => 'service_contract_speed',
                        ],
                    ];
                ?>

                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $offerings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php
                        $revealClass = match ($loop->index % 3) {
                            0 => 'reveal-from-left delay-100 sda-slide-left',
                            1 => 'reveal-from-bottom delay-200 sda-slide-up',
                            2 => 'reveal-from-right delay-300 sda-slide-right',
                        };
                    ?>
                    <article id="<?php echo e($item['id']); ?>" class="glass-card framer-card group flex flex-col justify-between overflow-hidden rounded-3xl <?php echo e($revealClass); ?>">
                        <!-- Machinery Image -->
                        <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                            <img src="<?php echo e(asset($item['image'])); ?>" alt="<?php echo e(__('site.' . $item['machine'])); ?>" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                            <div class="absolute start-4 top-4">
                                <span class="glass-pill-dark rounded-full px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-[#fbfcfd]"><?php echo e(__('site.' . $item['badge'])); ?></span>
                            </div>
                        </div>

                        <!-- Combined Service & Machine Specifications -->
                        <div class="flex flex-1 flex-col justify-between p-6 sm:p-7">
                            <div>
                                <div class="flex items-center justify-between gap-2">
                                    <span class="text-xs font-bold uppercase tracking-[0.16em] text-[#01188f]"><?php echo e(__('site.' . $item['category'])); ?></span>
                                    <span class="rounded-md bg-[#01188f]/10 px-2 py-0.5 text-[11px] font-semibold text-[#01188f]"><?php echo e(__('site.' . $item['speed'])); ?></span>
                                </div>

                                <h3 class="mt-2 text-xl font-bold leading-snug text-[#021070]"><?php echo e(__('site.' . $item['service'])); ?></h3>
                                <p class="mt-1 text-xs font-semibold text-[#01188f]"><?php echo e(__('site.machinery_label')); ?> <?php echo e(__('site.' . $item['machine'])); ?></p>

                                <p class="mt-3 text-xs leading-relaxed text-[#021070]/80 sm:text-sm"><?php echo e(__('site.' . $item['description'])); ?></p>
                                <p class="mt-3 border-t border-[#01188f]/15 pt-3 text-xs leading-relaxed text-[#021070]/75"><?php echo e(__('site.' . $item['technical'])); ?></p>
                            </div>

                            <div class="mt-6 border-t border-[#01188f]/15 pt-4">
                                <p class="text-xs text-[#021070]/70"><span class="font-bold uppercase tracking-wider text-[#021070]"><?php echo e(__('site.ideal_applications')); ?> </span><?php echo e(__('site.' . $item['apps'])); ?></p>
                                <div class="mt-4 flex items-center justify-between">
                                    <a href="<?php echo e(route('rfq')); ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-[#01188f] transition-all hover:text-[#021070] hover:translate-x-1">
                                        <span><?php echo e(__('site.request_quote_for_run')); ?></span>
                                        <svg class="h-3.5 w-3.5 <?php echo e(app()->getLocale() === 'ur' ? 'rotate-180' : ''); ?>" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                    <a href="<?php echo e(route('contact')); ?>" class="glass-pill rounded-full px-3.5 py-1 text-xs font-semibold text-[#021070] transition hover:bg-[#01188f] hover:text-[#fbfcfd]"><?php echo e(__('site.inquire_btn')); ?></a>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>

            <!-- Conversion Banner with Glassmorphism Dark Panel -->
            <div class="glass-panel-dark mt-14 flex flex-col items-start justify-between gap-6 rounded-3xl p-8 text-[#fbfcfd] sm:p-10 md:flex-row md:items-center">
                <div>
                    <h3 class="font-serif text-2xl font-semibold"><?php echo e(__('site.planning_banner_title')); ?></h3>
                    <p class="mt-2 text-sm text-[#fbfcfd]/85"><?php echo e(__('site.planning_banner_desc')); ?></p>
                </div>
                <a href="<?php echo e(route('rfq')); ?>" class="shrink-0 rounded-full bg-[#01188f] px-6 py-3 text-sm font-bold text-[#fbfcfd] border border-[#fbfcfd]/25 shadow-lg transition-all duration-300 hover:bg-[#021070] hover:scale-105"><?php echo e(__('site.launch_rfq_calc')); ?></a>
            </div>
        </div>
    </section>

    <!-- SECTION 2: PAPER & MATERIAL QUALITY STANDARDS -->
    <section id="materials" class="relative overflow-hidden scroll-mt-40 border-t border-[#01188f]/15 bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="ambient-glow top-1/2 right-0 h-96 w-96 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center reveal-from-bottom">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#01188f]"><?php echo e(__('site.materials_tag')); ?></span>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl"><?php echo e(__('site.materials_title')); ?></h2>
                <p class="mx-auto mt-3 max-w-2xl text-sm text-[#021070]/80"><?php echo e(__('site.materials_desc')); ?></p>
            </div>

            <!-- Paper Substrates Visual Showcase in Glass Cards -->
            <div class="mb-12 grid gap-6 sm:grid-cols-2">
                <div class="glass-card group relative overflow-hidden rounded-3xl framer-card reveal-from-left sda-slide-left">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="<?php echo e(asset('images/stock/paper-selection-swatches.jpg')); ?>" alt="Paper grade selection and texture swatches" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold text-[#fbfcfd]">
                                <?php echo e(__('site.paper_swatches_badge')); ?>

                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#021070]"><?php echo e(__('site.paper_swatches_title')); ?></h3>
                        <p class="mt-1 text-xs leading-relaxed text-[#021070]/80"><?php echo e(__('site.paper_swatches_desc')); ?></p>
                    </div>
                </div>

                <div class="glass-card group relative overflow-hidden rounded-3xl framer-card reveal-from-right sda-slide-right">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="<?php echo e(asset('images/stock/paper-textures.jpg')); ?>" alt="Paper textures, caliper weights, and finish standards" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#021070]/85 via-transparent to-transparent"></div>
                        <div class="absolute bottom-4 start-4 end-4">
                            <span class="glass-pill-dark inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-bold text-[#fbfcfd]">
                                <?php echo e(__('site.paper_textures_badge')); ?>

                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-base font-bold text-[#021070]"><?php echo e(__('site.paper_textures_title')); ?></h3>
                        <p class="mt-1 text-xs leading-relaxed text-[#021070]/80"><?php echo e(__('site.paper_textures_desc')); ?></p>
                    </div>
                </div>
            </div>

            <!-- Substrates Table in Glass Panel -->
            <div class="glass-panel overflow-x-auto rounded-3xl p-1 shadow-sm reveal-scale">
                <table class="w-full min-w-[720px] text-start text-sm">
                    <thead class="bg-[#021070] text-[#fbfcfd]">
                        <tr>
                            <th class="p-4 font-semibold text-start rounded-tl-2xl"><?php echo e(__('site.th_grade')); ?></th>
                            <th class="p-4 font-semibold text-start"><?php echo e(__('site.th_weight')); ?></th>
                            <th class="p-4 font-semibold text-start"><?php echo e(__('site.th_profile')); ?></th>
                            <th class="p-4 font-semibold text-start"><?php echo e(__('site.th_formats')); ?></th>
                            <th class="p-4 font-semibold text-start rounded-tr-2xl"><?php echo e(__('site.th_recommended')); ?></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#01188f]/10 text-[#021070]">
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]"><?php echo e(__('site.paper_row_1_name')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_1_weight')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_1_profile')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_1_formats')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_1_recommended')); ?></td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]"><?php echo e(__('site.paper_row_2_name')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_2_weight')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_2_profile')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_2_formats')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_2_recommended')); ?></td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]"><?php echo e(__('site.paper_row_3_name')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_3_weight')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_3_profile')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_3_formats')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_3_recommended')); ?></td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]"><?php echo e(__('site.paper_row_4_name')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_4_weight')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_4_profile')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_4_formats')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_4_recommended')); ?></td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]"><?php echo e(__('site.paper_row_5_name')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_5_weight')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_5_profile')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_5_formats')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_5_recommended')); ?></td>
                        </tr>
                        <tr class="hover:bg-[#01188f]/5 transition">
                            <td class="p-4 font-bold text-[#021070]"><?php echo e(__('site.paper_row_6_name')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_6_weight')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_6_profile')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_6_formats')); ?></td>
                            <td class="p-4"><?php echo e(__('site.paper_row_6_recommended')); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-8 grid gap-6 md:grid-cols-3">
                <div class="glass-card rounded-2xl p-6"><h3 class="font-bold text-[#021070]"><?php echo e(__('site.certified_inks_title')); ?></h3><p class="mt-1 text-sm text-[#021070]/80"><?php echo e(__('site.certified_inks_desc')); ?></p></div>
                <div class="glass-card rounded-2xl p-6"><h3 class="font-bold text-[#021070]"><?php echo e(__('site.polymers_title')); ?></h3><p class="mt-1 text-sm text-[#021070]/80"><?php echo e(__('site.polymers_desc')); ?></p></div>
                <div class="glass-card rounded-2xl p-6"><h3 class="font-bold text-[#021070]"><?php echo e(__('site.responsible_prod_title')); ?></h3><p class="mt-1 text-sm text-[#021070]/80"><?php echo e(__('site.responsible_prod_desc')); ?></p></div>
            </div>
        </div>
    </section>

    <!-- SECTION 3: DUAL WAREHOUSING INFRASTRUCTURE in Glass Cards -->
    <section id="warehousing" class="relative overflow-hidden scroll-mt-40 border-t border-[#01188f]/15 bg-[#fbfcfd] py-20 text-[#021070]">
        <div class="ambient-glow bottom-0 left-10 h-80 w-80 bg-[#01188f]/8"></div>

        <div class="relative z-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mb-10 text-center reveal-from-bottom">
                <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#01188f]"><?php echo e(__('site.warehousing_tag')); ?></span>
                <h2 class="mt-2 font-serif text-3xl font-semibold text-[#021070] sm:text-4xl"><?php echo e(__('site.warehousing_title')); ?></h2>
                <p class="mx-auto mt-3 max-w-2xl text-sm text-[#021070]/80"><?php echo e(__('site.warehousing_desc')); ?></p>
            </div>

            <div class="grid gap-8 md:grid-cols-2">
                <article class="glass-card framer-card flex flex-col justify-between overflow-hidden rounded-3xl reveal-from-left sda-slide-left">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="<?php echo e(asset('images/facilities/facility-press-godown.jpg')); ?>" alt="Facility 1: Primary Press Godown" class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                        <div class="absolute start-4 top-4">
                            <span class="glass-pill-dark rounded-full px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-[#fbfcfd]"><?php echo e(__('site.facility_1_badge')); ?></span>
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col justify-between p-6 sm:p-8">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.16em] text-[#01188f]"><?php echo e(__('site.facility_1_tag')); ?></span>
                            <h3 class="mt-1 font-serif text-2xl font-bold text-[#021070]"><?php echo e(__('site.facility_1_title')); ?></h3>
                            <p class="mt-3 text-sm leading-relaxed text-[#021070]/80"><?php echo e(__('site.facility_1_desc')); ?></p>
                        </div>
                        <div class="mt-6 border-t border-[#01188f]/15 pt-5">
                            <ul class="space-y-2 text-xs font-medium text-[#021070]/80">
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span><?php echo e(__('site.facility_1_feat_1')); ?></span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span><?php echo e(__('site.facility_1_feat_2')); ?></span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span><?php echo e(__('site.facility_1_feat_3')); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>

                <article class="glass-card framer-card flex flex-col justify-between overflow-hidden rounded-3xl reveal-from-right sda-slide-right">
                    <div class="relative aspect-[16/9] w-full overflow-hidden bg-[#021070]">
                        <img src="<?php echo e(asset('images/facilities/facility-board-storage.jpg')); ?>" alt="Facility 2: Bulk Board & Reserve Storage" class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" loading="lazy">
                        <div class="absolute start-4 top-4">
                            <span class="glass-pill-dark rounded-full px-3 py-1 text-[11px] font-bold uppercase tracking-wider text-[#fbfcfd]"><?php echo e(__('site.facility_2_badge')); ?></span>
                        </div>
                    </div>
                    <div class="flex flex-1 flex-col justify-between p-6 sm:p-8">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-[0.16em] text-[#01188f]"><?php echo e(__('site.facility_2_tag')); ?></span>
                            <h3 class="mt-1 font-serif text-2xl font-bold text-[#021070]"><?php echo e(__('site.facility_2_title')); ?></h3>
                            <p class="mt-3 text-sm leading-relaxed text-[#021070]/80"><?php echo e(__('site.facility_2_desc')); ?></p>
                        </div>
                        <div class="mt-6 border-t border-[#01188f]/15 pt-5">
                            <ul class="space-y-2 text-xs font-medium text-[#021070]/80">
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span><?php echo e(__('site.facility_2_feat_1')); ?></span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span><?php echo e(__('site.facility_2_feat_2')); ?></span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span class="flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#01188f]/10 text-[#01188f]">
                                        <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    </span>
                                    <span><?php echo e(__('site.facility_2_feat_3')); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Bottom Action Banner with Ambient Glass -->
    <section class="relative overflow-hidden bg-[#021070] py-16 text-[#fbfcfd]">
        <div class="ambient-glow top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 h-80 w-80 bg-[#01188f]/40"></div>
        <div class="relative z-10 mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-4 text-center sm:px-6 md:flex-row md:text-start lg:px-8">
            <div>
                <h3 class="font-serif text-2xl font-bold sm:text-3xl"><?php echo e(__('site.bottom_banner_title')); ?></h3>
                <p class="mt-2 text-sm text-[#fbfcfd]/85"><?php echo e(__('site.bottom_banner_desc')); ?></p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="<?php echo e(route('contact')); ?>" class="rounded-full bg-[#01188f] px-6 py-3.5 text-sm font-bold text-[#fbfcfd] border border-[#fbfcfd]/25 shadow-lg transition-all duration-300 hover:bg-[#021070] hover:scale-105"><?php echo e(__('site.schedule_plant_visit')); ?></a>
                <a href="<?php echo e(route('rfq')); ?>" class="glass-pill-dark rounded-full px-6 py-3.5 text-sm font-bold text-[#fbfcfd] transition-all duration-300 hover:bg-[#fbfcfd]/20 hover:scale-105"><?php echo e(__('site.request_machine_estimate')); ?></a>
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
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/pages/services.blade.php ENDPATH**/ ?>