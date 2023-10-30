<?php $__env->startSection('title', 'Registro'); ?>

<?php $__env->startSection('contenido'); ?>

<h1 class="display-4 text-center mt-5 mb-5">Registro de libro</h1>

<div class="card text-center">

    <div class="card-header">
        INTODUCE LOS DATOS DEL LIBRO
    </div>

    <div class="card-body">
        <form action="/guardarLibro" method="POST">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <label class="form-label">ISBN:</label>
                <input type="text" class="form-control" name="txtISBN" placeholder="Introduce el ISBN"
                    value="<?php echo e(old('txtISBN')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtISBN')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Título:</label>
                <input type="text" class="form-control" name="txtTitulo" placeholder="Introduce el título"
                    value="<?php echo e(old('txtTitulo')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtTitulo')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Autor:</label>
                <input type="text" class="form-control" name="txtAutor" placeholder="Introduce el autor"
                    value="<?php echo e(old('txtAutor')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtAutor')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Páginas:</label>
                <input type="text" class="form-control" name="txtPaginas" placeholder="Introduce el número de páginas"
                    value="<?php echo e(old('txtPaginas')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtPaginas')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Editorial:</label>
                <input type="text" class="form-control" name="txtEditorial" placeholder="Introduce la editorial"
                    value="<?php echo e(old('txtEditorial')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtEditorial')); ?></p>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Editorial:</label>
                <input type="email" class="form-control" name="txtEmail" placeholder="Introduce el email"
                    value="<?php echo e(old('txtEmail')); ?>">
                <p class="text-danger fst-italic"><?php echo e($errors->first('txtEmail')); ?></p>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">
                    Guardar
                </button>
            </div>

        </form>
    </div>
</div>

<script>
    <?php if(session('confirmacion')): ?>
        Swal.fire(
            '¡Todo correcto!',
            'Libro <?php echo e(session('confirmacion')); ?> guardado',
            'success'
        )
    <?php endif; ?>
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/ProWeb-S182/RepasoPracticas/resources/views/registro.blade.php ENDPATH**/ ?>