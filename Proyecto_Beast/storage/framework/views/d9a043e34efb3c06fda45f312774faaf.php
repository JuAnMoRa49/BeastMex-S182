<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('contenido'); ?>



<div class="container mt-5">
  <div class="row">
    <div class="col-md-8">
      <h2>Libros más vendidos de la semana</h2>

      <div class="card mb-3">
        <img class="card-img-top" src="<?php echo e(asset('/images/10Libros.png')); ?>" alt="Imagen de 10 Libros">
        <div class="card-body">
          <h5 class="card-title">Nueva Seccion</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <p>
      Esta semana llega la estabilidad a la parte de ficción de la lista con Carmen Mola a 
      la cabeza de otros autores best sellers como Ken Follett y Arturo Pérez-Reverte con 
      El Infierno, un intenso thriller ambientado en la Cuba del siglo XIX. Por su parte, 
      Marian Rojas Estapé cede su trono en no ficción a Dios: la ciencia, las pruebas, un 
      controvertido ensayo en el que veinte científicos y especialistas de alto nivel, 
      discuten las pruebas modernas de la existencia de Dios. Estas son las 10 novelas y 
      ensayos más vendidos de la semana.
      </p>

    </div>

  </div>
</div>

<!-- Pie de Página -->
<footer class="bg-dark text-light text-center py-3 mt-5">
  <p>Biblioteca &copy; <?php echo e(now()->format('d \d\e F \d\e Y')); ?></p>
</footer>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/ProWeb-S182/RepasoPracticas/resources/views/inicio.blade.php ENDPATH**/ ?>