<?php $__env->startSection('title', 'Edición Productos'); ?>

<?php $__env->startSection('contenido'); ?>

<h1 class="display-4 text-center mt-5 mb-5">Edición de producto</h1>

<div class="card text-center">

    <div class="card-header">
        INTODUCE LOS NUEVOS DATOS DEL PRODUCTO
    </div>

    <div class="card-body">
        <form action="/actualizar_productos" method="GET">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="txtNombre_Producto" placeholder="Introduce el Nombre del Producto"
                    value="<?php echo e(old('txtNombre_producto')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtNombre_producto')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">No. Serie:</label>
                <input type="text" class="form-control" name="txtNo.Serie_producto" placeholder="Introduce el No. Serie del Producto"
                    value="<?php echo e(old('txtNo.Serie_producto')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtNo.Serie_producto')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Marca:</label>
                <input type="text" class="form-control" name="txtMarca_producto" placeholder="Introduce la Marca del Producto"
                    value="<?php echo e(old('txtMarca_producto')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtMarca_producto')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Cantidad:</label>
                <input type="text" class="form-control" name="txtCantidad_producto" placeholder="Introduce la Cantidad del Producto"
                    value="<?php echo e(old('txtCantidad_producto')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtCantidad_producto')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Costo:</label>
                <input type="text" class="form-control" name="txtCosto_producto" placeholder="Introduce el Costo del Producto"
                    value="<?php echo e(old('txtCosto_producto')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtCosto_producto')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Precio de Venta:</label>
                <input type="text" class="form-control" name="txtPrecioVenta_producto" placeholder="Introduce el Precio de Venta del Producto"
                    value="<?php echo e(old('txtPrecioVenta_producto')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtPrecioVenta_producto')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha de Compra:</label>
                <input type="date" class="form-control" name="txtFechaCompra_producto" placeholder="Introduce la Fecha de Compra del Producto"
                    value="<?php echo e(old('txtFechaCompra_producto')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtFechaCompra_producto')); ?></p>
            </div>



            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Actualizar
                </button>
            </div>

        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/editar_producto.blade.php ENDPATH**/ ?>