<?php $__env->startSection('title', 'Consulta Productos'); ?>

<?php $__env->startSection('contenido'); ?>

<h1 class="display-4 text-center mt-5 mb-5">¡Bienvenido Juan Montoya!</h1>

<div class="card text-center">
    <div class="profile-info">
        <label>Nombre:</label>
        <p>Juan Montoya</p>

        <label>Puesto:</label>
        <p>Administrador</p>

        <label>Email:</label>
        <p>juan@beast.com</p>

        <label>Contraseña:</label>
        <p>************</p>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/extra/perfil.blade.php ENDPATH**/ ?>