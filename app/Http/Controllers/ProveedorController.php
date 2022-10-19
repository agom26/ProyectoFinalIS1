<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreProveedorPost;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
    
    public function index()
    {
        $proveedores=Proveedor::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('Dashboard.proveedor.index',['proveedores'=> $proveedores]);
    }

    
    public function create()
    {
        echo view ('Dashboard.Proveedor.create');
    }

    
    public function store(StoreProveedorPost $request)
    {
        Proveedor::create($request->validated());
        return redirect('proveedores')->with('status','Muchas gracias el proveedor fue creado con éxito');
    }

   
    public function show( $id)
    {
        $proveedores=Proveedor::find($id);
        return view ('Dashboard.Proveedor.eliminate',compact('proveedores'));
    }

    
    public function edit($id)
    {
        $proveedores=Proveedor::find($id);
        return view ('Dashboard.Proveedor.update',compact('proveedores'));
    }

   
    public function update(StoreProveedorPost $request,  $id)
    {
        $proveedores=Proveedor::find($id);
        $proveedores->nombre=$request->post('nombre');
        $proveedores->correo=$request->post('correo');
        $proveedores->telefono=$request->post('telefono');
        $proveedores->save();

        return redirect('/proveedores')->with('status','Actualizado con éxito');
    }

   
    public function destroy( $id)
    {
        $proveedores=Proveedor::find($id);
        $proveedores->delete();

        return redirect('/proveedores')->with('status','Eliminado con éxito');
    }
}
