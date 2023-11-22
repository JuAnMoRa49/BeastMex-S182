<?php $__env->startSection('title', 'Consulta Proveedores'); ?>

<?php $__env->startSection('contenido'); ?>

<h1 class="display-4 text-center mt-5 mb-5">Consulta de Proveedor</h1>

<?php if(session()->has('confirmacion_cons_prov')): ?>

    <script>Swal.fire('Buen Trabajo!','<?php echo e(session('confirmacion_cons_prov')); ?>','success')</script>

<?php endif; ?>

<div class="contenedor_consulta">

    <div class="consulta">

        <form class= "form"action="/cons_prov_espe" method="GET">
            <?php echo csrf_field(); ?>
        
        <div class="form_consulta">
            <label class="dato_txt">Nombre</label>
            <input class="dato_input" type="text" class="form-control" name="txtConsultaProveedor" placeholder="Introduce el Nombre del Proveedor"
                value="<?php echo e(old('txtConsultaProveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtConsultaProveedor')); ?></p>
        </div>

        <div class="d-grid gap-2">
            <button class="boton-buscar" type="submit">
                Buscar
            </button>
        </div>
        </form>

        <form class= "form"action="/cons_prov_espe" method="GET">
            <?php echo csrf_field(); ?>
        
        <div class="form_consulta">
            <label class="dato_txt">Empresa</label>
            <input class="dato_input" type="text" class="form-control" name="txtConsultaProveedor" placeholder="Introduce la Empresa del Proveedor"
                value="<?php echo e(old('txtConsultaProveedor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtConsultaProveedor')); ?></p>
        </div>

        <div class="d-grid gap-2">
            <button class="boton-buscar" type="submit">
                Buscar
            </button>
        </div>
        </form>

    </div>

    <div class="resultado">

        <h3 class="subtitle">Resultados de la búsqueda</h3>

        <div class="contenedor contenedor_grande">

            <table class="tabla">

                    <tr class="tabla-top">
                        <th class="top_left">Nombre</th>
                        <th>Empresa</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th class="top_right">Opciones</th>
                    </tr>
                    <tr>
                        <td>Jose Eduardo</td>
                        <td>Lenovo</td>
                        <td>4425679064</td>
                        <td>jose.eduardo@lenovo.com</td>
                        <td>
                            <a href="/edit_prov" class="btn btn-warning">Editar</a>
                            <a href="/soli_prov" class="btn btn-success">Solicitar</a>
                            <a href="/dele_prov" class="btn btn-danger">Eliminar</a>

                        </td>
                    </tr>
            </table>
        </div>
    </div>


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla_general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/BeastMex-S182/Proyecto_Beast/resources/views/proveedor/cons_prov.blade.php ENDPATH**/ ?>