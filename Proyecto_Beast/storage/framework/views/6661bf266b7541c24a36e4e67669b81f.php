<?php $__env->startSection('title', 'Consulta Proveedores'); ?>

<?php $__env->startSection('contenido'); ?>

<h1 class="display-4 text-center mt-5 mb-5">Consulta de Proveedor</h1>

<div class="card text-center">

    <div class="card-body">
        <form action="/cons_prov_espe" method="GET">
            <?php echo csrf_field(); ?>
        
        <div class="mb-3">
            <label class="form-label">Nombre o Empresa</label>
            <input type="text" class="form-control" name="txtConsultaProveedor" placeholder="Introduce el Nombre o Empresa del Proveedor"
                value="<?php echo e(old('txtConsultaProveedor')); ?>">
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
                            <tr>
                                <th>Nombre</th>
                                <th>Empresa</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                            </tr>
                            <tr>
                                <td>Jose Eduardo</td>
                                <td>Lenovo</td>
                                <td>4425679064</td>
                                <td>jose.eduardo@lenovo.com</td>
                            </tr>
                    </table>
                </div>
            </div>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/cons_prov.blade.php ENDPATH**/ ?>