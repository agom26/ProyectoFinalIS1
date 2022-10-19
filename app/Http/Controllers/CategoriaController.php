<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreCategoriaPost;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
    public function index()
    {
        $categorias=Categoria::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('Dashboard.Categorias.index',['categorias'=> $categorias]);
    }

    
    public function create()
    {
        echo view ('Dashboard.Categorias.create');
    }

    
    public function store(StoreCategoriaPost $request)
    {
        Categoria::create($request->validated());
        return redirect('categorias/')->with('status','Muchas gracias la categoría fue creada con éxito');
    }

    
    public function show( $id)
    {
        $categorias=Categoria::find($id);
        return view ('Dashboard.Categorias.eliminate',compact('categorias'));
    }

    
    public function edit($id)
    {
        $categorias=Categoria::find($id);
        return view ('Dashboard.Categorias.update',compact('categorias'));
    }

    
    public function update(StoreCategoriaPost $request, $id)
    {
        $categorias=Categoria::find($id);
        $categorias->nombre=$request->post('nombre');
        $categorias->save();

        return redirect('/categorias')->with('status','Actualización exitosa');
    }

    
    public function destroy($id)
    {
        $categorias=Categoria::find($id);
        $categorias->delete();

        return redirect('/categorias')->with('status','Eliminado con éxito');
    }
}
