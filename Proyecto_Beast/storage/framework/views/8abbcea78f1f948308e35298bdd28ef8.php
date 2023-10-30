<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('contenido'); ?>

<div class="card text-center">

    <div class="card-body">

        <form action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" required class="form-control" id="email" placeholder="Introduce tu email">
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" required class="form-control" id="password" placeholder="Introduce tu contraseña">
            </div>

            <button type="submit" class="btn btn-primary" href="extra/perfil">Login</button>

        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla_login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/extra/login.blade.php ENDPATH**/ ?>