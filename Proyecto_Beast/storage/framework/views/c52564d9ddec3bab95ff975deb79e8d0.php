<?php $__env->startSection('title', 'Registro proveedor'); ?>

<?php $__env->startSection('contenido'); ?>

<div class="contenedor">

    <h1 class="title">Registro de proveedor</h1>

    <?php if(session()->has('confirmacion_regi_prov')): ?>
        <script>Swal.fire('Buen Trabajo!','<?php echo e(session('confirmacion_regi_prov')); ?>','success')</script>
    <?php endif; ?>


    <div class="form">

        <form action="/save_prov" method="GET">
            <?php echo csrf_field(); ?>

            <div class="dato">
                <label class="dato_txt">Nombre:</label>
                <input class="dato_input" type="text" class="form-control" name="txtNombre_Proveedor" placeholder="Introduce el Nombre del proveedor"
                    value="<?php echo e(old('txtNombre_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtNombre_Proveedor')); ?></p>
            </div>

            <div class="dato">
                <label class="form-label">Empresa:</label>
                <input class="dato_input"type="text" class="form-control" name="txtEmpresa_Proveedor" placeholder="Introduce la Empresa del proveedor"
                    value="<?php echo e(old('txtEmpresa_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtEmpresa_Proveedor')); ?></p>
            </div>

            <div class="dato">
                <label class="form-label">Telefono:</label>
                <input class="dato_input" type="number" class="form-control" name="txtTelefono_Proveedor" placeholder="Introduce la Telefono del proveedor"
                    value="<?php echo e(old('txtTelefono_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtTelefono_Proveedor')); ?></p>

            <div class="dato">
                <label class="form-label">Correo:</label>
                <input class="dato_input" type="email" class="form-control" name="txtCorreo_Proveedor" placeholder="Introduce la Correo del proveedor"
                    value="<?php echo e(old('txtCorreo_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtCorreo_Proveedor')); ?></p>


            <div class="d-grid gap-2">
                <button class="boton-guardar" type="submit">
                    Guardar
                </button>
            </div>

        </form>
    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/proveedor/regi_prov.blade.php ENDPATH**/ ?>