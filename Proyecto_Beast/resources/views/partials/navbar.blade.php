<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" >BEASTMEX</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active {{request()->routeIs('inicio') ? 'text-danger' : '' }}" aria-current="page" href="/perfil" {>
                Perfil
            </a>
          </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/regi_prod">Registrar</a></li>
            <li><a class="dropdown-item" href="/edit_prod">Editar</a></li>
            <li><a class="dropdown-item" href="/cons_prod">Consultar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Proveedor
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/regi_prov">Registrar</a></li>
            <li><a class="dropdown-item" href="/edit_prov">Editar</a></li>
            <li><a class="dropdown-item" href="/cons_prov">Consultar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuarios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/regi_usua">Registrar</a></li>
            <li><a class="dropdown-item" href="/edit_usua">Editar</a></li>
            <li><a class="dropdown-item" href="/cons_usua">Consultar</a></li>
          </ul>
        </li>

      </div>
    </div>
  </nav>