<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body>
    <h1 class="titulo">LOGIN</h1>
    <div class="container">
        <?php echo $__env->yieldContent('contenido'); ?>
    </div>
    
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/layouts/plantilla_login.blade.php ENDPATH**/ ?>