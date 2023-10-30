<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body>
    <h1 class="display-4 text-center mt-5 mb-5">LOGIN</h1>
    <div class="container">
        <?php echo $__env->yieldContent('contenido'); ?>
    </div>
    
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/Layouts/plantilla_login.blade.php ENDPATH**/ ?>