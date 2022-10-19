<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/css/bootstrap.css">
  <link rel="stylesheet" href="/css/css/styles.css">
  <script src="{{asset('js/style.js')}}"></script>
  <script src="/js/script.js"></script>

  <title>DJ Color Cliente</title>
</head>
<body>
  <div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center">
        <img src="imageneswelcome/logo3.jpg" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h3 class="m-0" style="text-align: center;">&nbsp&nbsp DJ Color</h3>
          <p class="font-weight-light text-muted mb-0 " style="text-align: center;">Punto Com</p>
        </div>
      </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0"></p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item" >
        <a href={{route('home')}} class="nav-link text-dark font-italic bg-light" >
                  <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                  <b>Inicio</b>
              </a>
      </li>
      <li class="nav-item " >
        <a href="#"" class="nav-link text-dark font-italic bg-light dropdown-toggle" >
                  <i class="fa fa-th-large mr-3 text-primary fa-fw "></i>
                  <b>Productos</b>
        </a>
                </li>
                <li class="nav-item" >
                  <a href="{{route('proveedores.index')}}" class="nav-link text-dark font-italic bg-light" >
                            <i class="fa fa-th-large mr-3 text-primary fa-fw " style="margin-left: 10%"></i>
                            Proveedores
                        </a>
                </li>
                <li class="nav-item" >
                  <a href="{{route('clientes.index')}}" class="nav-link text-dark font-italic bg-light" >
                            <i class="fa fa-th-large mr-3 text-primary fa-fw" style="margin-left: 10%"></i>
                            Clientes
                        </a>
                </li>
                <li class="nav-item" >
                  <a href="{{route('categorias.index')}}" class="nav-link text-dark font-italic bg-light" >
                            <i class="fa fa-th-large mr-3 text-primary fa-fw" style="margin-left: 10%"></i>
                            Categorias
                        </a>
                </li>
                
      <li class="nav-item">
        <a href="#" class="nav-link text-dark font-italic">
                  <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>
                  <b>Galeria de Fotos</b>
              </a>
      </li>

    </ul>
  
    
  </div>
  <!-- End vertical navbar -->
  
  
  <!-- Page content holder -->
  <div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menú</small></button>
  </div>
  <script src="{{asset('js/style.js')}}"></script>
</body>
</html>

