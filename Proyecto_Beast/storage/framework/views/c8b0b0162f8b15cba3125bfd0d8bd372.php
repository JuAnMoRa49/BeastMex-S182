
<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    </head>

    <body class="body">

    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">
        <?php echo $__env->yieldContent('contenido'); ?>
    </div>

    </body>
    
</html><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/layouts/plantilla_general.blade.php ENDPATH**/ ?>