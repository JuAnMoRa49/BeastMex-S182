<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Diario Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active <?php echo e(request()->routeIs('apodo1') ? 'text-danger' : ''); ?>" aria-current="page" href="/" {>
                Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link -bottom-3
            <?php echo e(request()->routeIs('apodoFormulario') ? 'text-danger' : ''); ?>" 
             href="/formulario">Formulario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link
            <?php echo e(request()->routeIs('apodoRecuerdo') ? 'text-danger' : ''); ?>

            " href="/recuerdos">Memorias</a>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav><?php /**PATH /Applications/MAMP/htdocs/ProWeb-S182/Practicas/resources/views/partials/navbar.blade.php ENDPATH**/ ?>