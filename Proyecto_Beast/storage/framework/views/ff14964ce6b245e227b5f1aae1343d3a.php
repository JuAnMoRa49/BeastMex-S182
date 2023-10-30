<?php $__env->startSection('title', 'Formulario'); ?>


<?php $__env->startSection('contenido'); ?>

<h1 class="display-4 text-success text-center mt-5 mb-5">Formulario</h1>

<div class="card text-center">

  <?php if(session()->has('confirmacion')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><?php echo e(session('confirmacion')); ?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endif; ?>

  <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors ->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong><?php echo e($error); ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endif; ?>

  <div class="card-header text-success">
    INTRODUCE TUS RECUERDOS AQUI
  </div>

  <div class="card-body">
    <form action="/guardarRecuerdo" method="POST">
      <?php echo csrf_field(); ?>
      
      <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Titulo:</label>
          <input type="text" class="form-control" name="txtTitulo" placeholder="Introduce tu titulo" value= "<?php echo e(old('txtTitulo')); ?>">
          <p class= "text-danger fst-italic" ><?php echo e($errors->first('txtTitulo')); ?> </p>
      </div>

      <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Recuerdo:</label>
          <input class="form-control" name="txtRecuerdo" placeholder="Introduce tu recuerdo" value= "<?php echo e(old('txtRecuerdo')); ?>"></textarea>
          <p class= "text-danger fst-italic" ><?php echo e($errors->first('txtRecuerdo')); ?> </p>
      </div>

      <div class="d-grid gap-2">
        <button class="btn btn-success btn-lg" type="submit">
          Guardar
        </button>
      </div>

    </form>

  </div>

  <div class="card-footer text-body-secondary">
    2 days ago
  </div>
  
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/ProWeb-S182/Practicas/resources/views/formulario.blade.php ENDPATH**/ ?>