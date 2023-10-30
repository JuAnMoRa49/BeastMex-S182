<?php $__env->startSection('title', 'Registro proveedor'); ?>

<?php $__env->startSection('contenido'); ?>

<h1 class="display-4 text-center mt-5 mb-5">Registro de proveedor</h1>

<div class="card text-center">

    <div class="card-header">
        INTODUCE LOS DATOS DEL PROVEEDOR
    </div>

    <div class="card-body">
        <form action="/save_prov" method="GET">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="txtNombre_Proveedor" placeholder="Introduce el Nombre del proveedor"
                    value="<?php echo e(old('txtNombre_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtNombre_Proveedor')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Empresa:</label>
                <input type="text" class="form-control" name="txtEmpresa_Proveedor" placeholder="Introduce la Empresa del proveedor"
                    value="<?php echo e(old('txtEmpresa_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtEmpresa_Proveedor')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Telefono:</label>
                <input type="text" class="form-control" name="txtTelefono_Proveedor" placeholder="Introduce la Telefono del proveedor"
                    value="<?php echo e(old('txtTelefono_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtTelefono_Proveedor')); ?></p>

            <div class="mb-3">
                <label class="form-label">Correo:</label>
                <input type="text" class="form-control" name="txtCorreo_Proveedor" placeholder="Introduce la Correo del proveedor"
                    value="<?php echo e(old('txtCorreo_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtCorreo_Proveedor')); ?></p>


            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Guardar
                </button>
            </div>

        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/regi_prov.blade.php ENDPATH**/ ?>