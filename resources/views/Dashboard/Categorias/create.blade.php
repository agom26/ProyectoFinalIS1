<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/css/bootstrap.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Crear categoría</title>
</head>
<body>
    <header>
@include('partials.nav-header-admin')
        @include('partials.nav-header-main')    
        </header>

    <main>
        <div class="row" style="margin-left:18%" >
            <div class="col-10">
            <div class="card">
                <div class="card-header">
                  <h1>Ingreso de categorías</h1>
                </div>
                <div class="card-body">
                  <div class="card-text">
                    <form action="{{route('categorias.store')}}" method="post">
    
                        @csrf
            
                        @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                        @endif
            
                        
                            <label for="" >Nombre</label>
                            <input type="text" name="nombre" class="form-control" >
                            @error('nombre')
                                <small class="text-dark">{{ $message }}</small>
                            @enderror
                             
                            
                          
                            <br>
                            <button class="btn btn-primary">Crear</button>
                            <a href="{{route('categorias.index')}}" class="btn btn-info">Regresar</a>
                            
                        
                    </form>
                  </div>
                    
                  
                </div>
              </div>

            
            </div>
    </main>

    <footer>

    </footer>
</body>
</html>