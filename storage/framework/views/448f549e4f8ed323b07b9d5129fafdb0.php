<div class="space-y-8 text-[#021070]">
    <?php
        $isUrdu = app()->getLocale() === 'ur';
    ?>

    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (! ($preview)): ?>
        <div class="glass-panel is-revealed flex flex-col items-stretch justify-between gap-4 rounded-2xl p-4 sm:flex-row sm:items-center sm:p-5 shadow-xs">
            <div class="flex flex-wrap gap-2">
                <button type="button" wire:click="filterCategory('all')" class="rounded-full px-4 py-2 text-sm font-bold transition-all duration-300 <?php echo e($selectedCategory === 'all' ? 'bg-[#01188f] text-[#fbfcfd] shadow-sm' : 'glass-pill text-[#021070] hover:bg-[#01188f] hover:text-[#fbfcfd]'); ?>"><?php echo e(__('site.all_series')); ?></button>
                <button type="button" wire:click="filterCategory('primary')" class="rounded-full px-4 py-2 text-sm font-bold transition-all duration-300 <?php echo e($selectedCategory === 'primary' ? 'bg-[#01188f] text-[#fbfcfd] shadow-sm' : 'glass-pill text-[#021070] hover:bg-[#01188f] hover:text-[#fbfcfd]'); ?>"><?php echo e(__('site.primary')); ?></button>
                <button type="button" wire:click="filterCategory('middle')" class="rounded-full px-4 py-2 text-sm font-bold transition-all duration-300 <?php echo e($selectedCategory === 'middle' ? 'bg-[#01188f] text-[#fbfcfd] shadow-sm' : 'glass-pill text-[#021070] hover:bg-[#01188f] hover:text-[#fbfcfd]'); ?>"><?php echo e(__('site.middle')); ?></button>
                <button type="button" wire:click="filterCategory('secondary')" class="rounded-full px-4 py-2 text-sm font-bold transition-all duration-300 <?php echo e($selectedCategory === 'secondary' ? 'bg-[#01188f] text-[#fbfcfd] shadow-sm' : 'glass-pill text-[#021070] hover:bg-[#01188f] hover:text-[#fbfcfd]'); ?>"><?php echo e(__('site.secondary')); ?></button>
            </div>
            <input type="text" wire:model.live.debounce.250ms="search" placeholder="<?php echo e(__('site.search_pub_placeholder')); ?>" class="w-full rounded-full border border-[#01188f]/20 bg-[#fbfcfd]/80 backdrop-blur-md px-4 py-2.5 text-sm text-[#021070] placeholder-[#021070]/50 focus:border-[#01188f] focus:outline-none md:w-72">
        </div>
    <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 <?php echo e($preview ? 'lg:grid-cols-4' : 'lg:grid-cols-3'); ?>">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <article <?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::$currentLoop['key'] = 'publication-'.e($book['title']).''; ?>wire:key="publication-<?php echo e($book['title']); ?>" class="glass-card framer-card is-revealed flex flex-col justify-between overflow-hidden rounded-2xl">
                <div class="p-4 sm:p-5">
                    <?php if (isset($component)) { $__componentOriginal0514d52bf1ced5d9213a4719f0ef9bb1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0514d52bf1ced5d9213a4719f0ef9bb1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.book-cover','data' => ['title' => $isUrdu ? $book['urdu_title'] : $book['title'],'urdu' => $isUrdu ? $book['title'] : $book['urdu_title'],'klass' => $isUrdu ? $book['urdu_class'] : $book['class'],'subject' => $isUrdu ? $book['urdu_subject'] : $book['subject'],'image' => $book['image'],'from' => $book['from'],'to' => $book['to']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('book-cover'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isUrdu ? $book['urdu_title'] : $book['title']),'urdu' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isUrdu ? $book['title'] : $book['urdu_title']),'klass' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isUrdu ? $book['urdu_class'] : $book['class']),'subject' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isUrdu ? $book['urdu_subject'] : $book['subject']),'image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book['image']),'from' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book['from']),'to' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($book['to'])]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0514d52bf1ced5d9213a4719f0ef9bb1)): ?>
<?php $attributes = $__attributesOriginal0514d52bf1ced5d9213a4719f0ef9bb1; ?>
<?php unset($__attributesOriginal0514d52bf1ced5d9213a4719f0ef9bb1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0514d52bf1ced5d9213a4719f0ef9bb1)): ?>
<?php $component = $__componentOriginal0514d52bf1ced5d9213a4719f0ef9bb1; ?>
<?php unset($__componentOriginal0514d52bf1ced5d9213a4719f0ef9bb1); ?>
<?php endif; ?>
                </div>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if (! ($preview)): ?>
                    <div class="space-y-3 border-t border-[#01188f]/10 bg-transparent p-5">
                        <p class="text-sm leading-relaxed text-[#021070]/80"><?php echo e($isUrdu ? $book['urdu_content'] : $book['content']); ?></p>
                        <p class="text-xs text-[#021070]/70"><?php echo e($isUrdu ? $book['urdu_publisher'] : $book['publisher']); ?></p>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($book['paper_specs'] !== ''): ?>
                            <p class="text-xs text-[#021070]/70"><span class="font-bold text-[#021070]"><?php echo e(__('site.paper_label')); ?></span> <?php echo e($isUrdu ? $book['urdu_paper_specs'] : $book['paper_specs']); ?></p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($book['finishing'] !== ''): ?>
                            <p class="text-xs text-[#021070]/70"><span class="font-bold text-[#021070]"><?php echo e(__('site.finishing_label')); ?></span> <?php echo e($isUrdu ? $book['urdu_finishing'] : $book['finishing']); ?></p>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <div class="flex items-center justify-between pt-2">
                            <a href="<?php echo e(route('rfq')); ?>" class="text-sm font-bold text-[#01188f] hover:underline">
                                <?php echo e(__('site.request_quote')); ?> <?php echo e($isUrdu ? '←' : '→'); ?>

                            </a>
                            <a href="<?php echo e(route('contact')); ?>" class="glass-pill rounded-full px-3.5 py-1.5 text-xs font-semibold text-[#021070] transition hover:bg-[#01188f] hover:text-[#fbfcfd]"><?php echo e(__('site.request_samples_btn')); ?></a>
                        </div>
                    </div>
                <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </article>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            <div class="glass-card is-revealed col-span-full rounded-2xl py-12 text-center">
                <p class="font-bold text-[#021070]"><?php echo e(__('site.no_pub_match')); ?></p>
                <button type="button" wire:click="$set('search', '')" class="mt-4 rounded-full bg-[#01188f] px-4 py-2 text-xs font-bold text-[#fbfcfd] transition hover:bg-[#021070]"><?php echo e(__('site.clear_search')); ?></button>
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div>
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/livewire/publications-catalog.blade.php ENDPATH**/ ?>