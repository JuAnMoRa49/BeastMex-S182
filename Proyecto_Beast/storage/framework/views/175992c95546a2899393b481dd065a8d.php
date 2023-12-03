<?php $__env->startSection('title', 'Registro Productos'); ?>

<?php $__env->startSection('contenido'); ?>


    <div class="contenedor">

        <h1 class="title">Registro de producto</h1>

        <?php if(session()->has('confirmacion_regi_prod')): ?>
            <script>Swal.fire('Buen Trabajo!', '<?php echo e(session('confirmacion_regi_prod')); ?>', 'success')</script>
        <?php endif; ?>

        <div class="form">

            <form action="/save_prod" method="GET">
                <?php echo csrf_field(); ?>

                <div class="dato">
                    <label class="dato_txt">Nombre:</label>
                    <input class="dato_input" type="text" name="txtNombre_Producto"
                           placeholder="Introduce el Nombre del Producto" value="<?php echo e(old('txtNombre_Producto')); ?>">
                    <p class="text-danger fst-italic"><?php echo e($errors->first('txtNombre_Producto')); ?></p>
                </div>

                <div class="dato">
                    <label class="dato_txt">No. Serie:</label>
                    <input class="dato_input" type="number" class="form-control" name="txtNoSerie_producto"
                           placeholder="Introduce el No. Serie del Producto" value="<?php echo e(old('txtNoSerie_producto')); ?>">
                    <p class="text-danger fst-italic"><?php echo e($errors->first('txtNoSerie_producto')); ?></p>
                </div>

                <div class="dato">
                    <label class="dato_txt">Marca:</label>
                    <input class="dato_input" type="text" class="form-control" name="txtMarca_producto"
                           placeholder="Introduce la Marca del Producto" value="<?php echo e(old('txtMarca_producto')); ?>">
                    <p class="text-danger fst-italic"><?php echo e($errors->first('txtMarca_producto')); ?></p>
                </div>

                <div class="dato">
                    <label class="dato_txt">Cantidad:</label>
                    <input class="dato_input" type="number" class="form-control" name="txtCantidad_producto"
                           placeholder="Introduce la Cantidad del Producto" value="<?php echo e(old('txtCantidad_producto')); ?>">
                    <p class="text-danger fst-italic"><?php echo e($errors->first('txtCantidad_producto')); ?></p>
                </div>

                <div class="dato">
                    <label class="dato_txt">Costo:</label>
                    <input class="dato_input" type="number" step="0.01" class="form-control" name="txtCosto_producto"
                           placeholder="Introduce el Costo del Producto" value="<?php echo e(old('txtCosto_producto')); ?>">
                    <p class="text-danger fst-italic"><?php echo e($errors->first('txtCosto_producto')); ?></p>
                </div>

                <div class="dato">
                    <label class="dato_txt">Precio de Venta:</label>
                    <input class="dato_input" type="number" step="0.01" class="form-control" name="txtPrecioVenta_producto"
                           placeholder="Introduce el Precio de Venta del Producto"
                           value="<?php echo e(old('txtPrecioVenta_producto')); ?>">
                    <p class="text-danger fst-italic"><?php echo e($errors->first('txtPrecioVenta_producto')); ?></p>
                </div>

                <div class="dato">
                    <label class="dato_txt">Fecha de Compra:</label>
                    <input class="dato_input" type="date" class="form-control" name="txtFechaCompra_producto"
                           placeholder="Introduce la Fecha de Compra del Producto"
                           value="<?php echo e(old('txtFechaCompra_producto')); ?>">
                    <p class="text-danger fst-italic"><?php echo e($errors->first('txtFechaCompra_producto')); ?></p>
                </div>

                <div class="">
                    <button class="boton-guardar" type="submit">
                        Guardar
                    </button>
                </div>

            </form>
            
        </div>
        
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/producto/regi_prod.blade.php ENDPATH**/ ?>