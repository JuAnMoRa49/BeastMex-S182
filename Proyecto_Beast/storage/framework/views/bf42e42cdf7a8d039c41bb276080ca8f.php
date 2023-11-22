<?php $__env->startSection('title', 'Perfil'); ?>

<?php $__env->startSection('contenido'); ?>

<div class="contenedor_perfil">

    <div class="foto">
        <img src="<?php echo e(asset('images/35.jpg')); ?>" alt="Foto">
    </div>

    <div class="datos">
        <label class="label">Nombre:</label>
        <p class="p">Juan Montoya</p>

        <label class="label">Puesto:</label>
        <p class="p">Administrador</p>

        <label class="label">Email:</label>
        <p class="p">juan@beast.com</p>

        <label class="label">Contraseña:</label>
        <p class="p">************</p>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/extra/perfil.blade.php ENDPATH**/ ?>