<footer class="relative overflow-hidden mt-20 border-t border-[#fbfcfd]/15 bg-[#021070] text-[#fbfcfd]">
    <div class="ambient-glow -top-24 left-1/4 h-96 w-96 bg-[#01188f]/40"></div>
    <div class="ambient-glow bottom-0 right-10 h-80 w-80 bg-[#01188f]/30"></div>

    <div class="relative z-10 mx-auto grid max-w-7xl grid-cols-1 gap-10 px-4 py-14 sm:px-6 md:grid-cols-2 lg:grid-cols-4 lg:px-8">
        <div class="space-y-4">
            <div class="flex items-center gap-3">
                <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="<?php echo e(__('site.brand_name')); ?>" class="h-11 w-11 rounded-xl shadow-sm">
                <div>
                    <p class="text-sm font-bold leading-tight text-[#fbfcfd]"><?php echo e(__('site.brand_name')); ?></p>
                    <p class="font-urdu text-sm text-[#fbfcfd] font-semibold"><?php echo e(__('site.brand_urdu')); ?></p>
                </div>
            </div>
            <p class="text-sm leading-relaxed text-[#fbfcfd]/80"><?php echo e(__('site.footer_profile')); ?></p>
        </div>

        <div>
            <h4 class="mb-4 text-xs font-bold uppercase tracking-[0.18em] text-[#fbfcfd]"><?php echo e(__('site.footer_nav')); ?></h4>
            <ul class="space-y-2 text-sm text-[#fbfcfd]/80">
                <li><a class="hover:text-[#fbfcfd] transition" href="<?php echo e(route('home')); ?>"><?php echo e(__('site.nav_home')); ?></a></li>
                <li><a class="hover:text-[#fbfcfd] transition" href="<?php echo e(route('about')); ?>"><?php echo e(__('site.nav_about')); ?></a></li>
                <li><a class="hover:text-[#fbfcfd] transition" href="<?php echo e(route('publications')); ?>"><?php echo e(__('site.nav_publications_catalog')); ?></a></li>
                <li><a class="hover:text-[#fbfcfd] transition" href="<?php echo e(route('services')); ?>"><?php echo e(__('site.nav_services_machinery')); ?></a></li>
                <li><a class="hover:text-[#fbfcfd] transition" href="<?php echo e(route('distribution')); ?>"><?php echo e(__('site.nav_distribution')); ?></a></li>
                <li><a class="font-semibold text-[#fbfcfd] hover:underline" href="<?php echo e(route('rfq')); ?>"><?php echo e(__('site.rfq_calculator')); ?></a></li>
            </ul>
        </div>

        <div>
            <h4 class="mb-4 text-xs font-bold uppercase tracking-[0.18em] text-[#fbfcfd]"><?php echo e(__('site.footer_distribution')); ?></h4>
            <ul class="space-y-2 text-sm text-[#fbfcfd]/80">
                <li><?php echo e(__('site.dist_hub')); ?></li>
                <li><?php echo e(__('site.dist_depots')); ?></li>
                <li><?php echo e(__('site.dist_freight')); ?></li>
            </ul>
            <a href="<?php echo e(route('distribution')); ?>" class="mt-4 inline-block text-sm font-semibold text-[#fbfcfd] underline hover:text-[#fbfcfd]/80"><?php echo e(__('site.become_partner')); ?></a>
        </div>

        <div>
            <h4 class="mb-4 text-xs font-bold uppercase tracking-[0.18em] text-[#fbfcfd]"><?php echo e(__('site.footer_inquiries')); ?></h4>
            <p class="text-sm leading-relaxed text-[#fbfcfd]/80"><?php echo e(__('site.address')); ?></p>
            <p class="mt-3 text-sm text-[#fbfcfd]"><?php echo e(__('site.email')); ?></p>
            <p class="mt-1 text-sm text-[#fbfcfd]/80"><?php echo e(__('site.hours')); ?></p>
            <p class="mt-2 text-xs text-[#fbfcfd]/70"><?php echo e(__('site.hours_note')); ?></p>
        </div>
    </div>

    <div class="relative z-10 border-t border-[#fbfcfd]/10 bg-[#021070]/60 backdrop-blur-md">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 px-4 py-5 text-xs text-[#fbfcfd]/70 sm:flex-row sm:px-6 lg:px-8">
            <p>&copy; <?php echo e(date('Y')); ?> <?php echo e(__('site.brand_name')); ?>. <?php echo e(__('site.rights')); ?></p>
            <p class="text-[#fbfcfd]/80"><?php echo e(__('site.english_tagline')); ?></p>
        </div>
    </div>
</footer>
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/partials/footer.blade.php ENDPATH**/ ?>