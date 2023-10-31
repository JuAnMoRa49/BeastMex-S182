<?php $__env->startSection('title', 'Consulta Productos'); ?>

<?php $__env->startSection('contenido'); ?>

<h1 class="display-4 text-center mt-5 mb-5">Consulta de producto</h1>

<div class="card text-center">

    <div class="card-body">
        <form action="/cons_prod_espe" method="GET">
            <?php echo csrf_field(); ?>
        
        <div class="mb-3">
            <label class="form-label">Nombre o No. de Serie:</label>
            <input type="text" class="form-control" name="txtConsulta_Producto" placeholder="Introduce el Nombre o No. de Serie del Producto"
                value="<?php echo e(old('txtConsulta_producto')); ?>">
        </div>

        <div class="d-grid gap-2">
            <button class="btn btn-primary btn-lg" type="submit">
                Buscar
            </button>
        </div>
        </form>
    </div>

            <div class="card-body mt-3">
                <h3>Resultados de la búsqueda</h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead class="table table-dark">
                            <tr>
                                <th>Producto</th>
                                <th>No. Serie</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                                <th>Precio de Venta</th>
                                <th>Fecha</th>
                                <th>Foto</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                            <tr>
                                <td>Mouse</td>
                                <td>1234567890</td>
                                <td>Lenovo</td>
                                <td>34</td>
                                <td>250</td>
                                <td>450</td>
                                <td>20/10/2017</td>
                                <td>Img</td>
                                <td>
                                    <a href="/edit_prod" class="btn btn-warning">Editar</a>
                                    <a href="/ocul_prod" class="btn btn-secondary">Ocultar</a>
                                    <a href="/most_prod" class="btn btn-success">Mostrar</a>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
</div>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/producto/cons_prod.blade.php ENDPATH**/ ?>