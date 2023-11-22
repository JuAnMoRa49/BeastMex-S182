<?php $__env->startSection('title', 'Edición proveedor'); ?>

<?php $__env->startSection('contenido'); ?>

<?php if(session()->has('confirmacion_edit_prov')): ?>

    <script>Swal.fire('Buen Trabajo!','<?php echo e(session('confirmacion_edit_prov')); ?>','success')</script>

<?php endif; ?>

<div class="contenedor">

    <h1 class="title">Edición de proveedor</h1>

    <div class="form">

        <form action="/actu_prov" method="GET">
            <?php echo csrf_field(); ?>

            <div class="dato">
                <label class="dato_txt">Nombre:</label>
                <input class="dato_input" type="text" class="form-control" name="txtNombre_Proveedor" placeholder="Introduce el Nombre del proveedor"
                    value="<?php echo e(old('txtNombre_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtNombre_Proveedor')); ?></p>
            </div>

            <div class="dato">
                <label class="dato_txt">Empresa:</label>
                <input class="dato_input" type="text" class="form-control" name="txtEmpresa_Proveedor" placeholder="Introduce la Empresa del proveedor"
                    value="<?php echo e(old('txtEmpresa_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtEmpresa_Proveedor')); ?></p>
            </div>

            <div class="dato">
                <label class="dato_txt">Telefono:</label>
                <input class="dato_input" type="numeric" class="form-control" name="txtTelefono_Proveedor" placeholder="Introduce la Telefono del proveedor"
                    value="<?php echo e(old('txtTelefono_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtTelefono_Proveedor')); ?></p>

            <div class="dato">
                <label class="dato_txt">Correo:</label>
                <input class="dato_input" type="email" class="form-control" name="txtCorreo_Proveedor" placeholder="Introduce la Correo del proveedor"
                    value="<?php echo e(old('txtCorreo_Proveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtCorreo_Proveedor')); ?></p>


                <div class="contenedor-boton">
                    <button class="boton-guardar" type="submit">
                        Actualizar
                    </button>
                </div>

        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/proveedor/edit_prov.blade.php ENDPATH**/ ?>