<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="styles.css">
</head>

</head>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand">BEASTMEX</a>
        <div class="navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/perfil">Perfil</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Productos
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/regi_prod">Registrar</a></li>
                        <li><a class="dropdown-item" href="/cons_prod">Consultar</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Proveedor
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/regi_prov">Registrar</a></li>
                        <li><a class="dropdown-item" href="/cons_prov">Consultar</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Usuarios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/users">Registrar</a></li>
                        <li><a class="dropdown-item" href="/cons_usua">Consultar</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Compras
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/regi_comp">Registrar</a></li>
                        <li><a class="dropdown-item" href="/cons_comp">Consultar</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Ventas
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/regi_vent">Registrar</a></li>
                        <li><a class="dropdown-item" href="/cons_vent_esp">Consultar</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Reportes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/repo_comp">Compra</a></li>
                        <li><a class="dropdown-item" href="/repo_vent">Venta</a></li>
                        <li><a class="dropdown-item" href="/repo_gana">Ganancias</a></li>
                    </ul>
                </li>

                

                <body>

                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                          
                            <div class="navbar-collapse" id="navbarSupportedContent">
                
                                <ul class="navbar-nav">
                                    <!-- Tus otros elementos de menú aquí -->
                
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Cerrar Sesión
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                
                    <!-- Agrega un formulario oculto para manejar la solicitud POST -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eL5CZBz3k3R1u2t8wu9qXrnCfU5HW+qFqbuEqv3lbLTVY+S9qJg5F92h7le2CCbx" crossorigin="anonymous"></script>
                </body>
                
            </ul>
        </div>
    </div>
</nav>
