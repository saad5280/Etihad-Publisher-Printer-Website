<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(app()->getLocale() === 'ur' ? 'rtl' : 'ltr'); ?>" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e($title ?? __('site.meta_title')); ?></title>
    <meta name="description" content="<?php echo e(__('site.meta_description')); ?>">
    <link rel="icon" type="image/jpeg" href="<?php echo e(asset('images/logo.jpg')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&family=Manrope:wght@400;500;600;700;800&family=Noto+Nastaliq+Urdu:wght@400;600;700&display=swap" rel="stylesheet">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

</head>
<body class="flex min-h-screen flex-col bg-[#fbfcfd] font-sans text-[#021070] antialiased selection:bg-[#01188f] selection:text-[#fbfcfd] <?php echo e(app()->getLocale() === 'ur' ? 'font-urdu' : ''); ?>" x-data="{ mobileMenuOpen: false }">
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <main class="flex-grow">
        <?php echo e($slot); ?>

    </main>
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

</body>
</html>
<?php /**PATH D:\Laravel-Projects\etihad-website\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>