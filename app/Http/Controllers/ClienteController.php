<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreClientePost;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
     function index()
    {
        $clientes=Cliente::orderBy('created_at','desc')->cursorpaginate(5);
        echo view ('Dashboard.clientes.index',['clientes'=> $clientes]);
    }

    
    public function create()
    {
        echo view ('Dashboard.clientes.create');
    }

    
    public function store(StoreClientePost $request)
    {
        Cliente::create($request->validated());
        return redirect('clientes/')->with('status','Muchas gracias el cliente fue creado con éxito');
    }

   
    public function show( $id)
    {
        $clientes=Cliente::find($id);
        return view ('Dashboard.Clientes.eliminate',compact('clientes'));
    }

   
    public function edit($id)
    {
        $clientes=Cliente::find($id);
        return view ('Dashboard.clientes.update',compact('clientes'));
    }

    
    public function update(StoreClientePost $request, $id)
    {
        $clientes=Cliente::find($id);
        $clientes->nombre=$request->post('nombre');
        $clientes->nit=$request->post('nit');
        $clientes->telefono=$request->post('telefono');
        $clientes->save();

        return redirect('/clientes')->with('status','Actualizado con éxito');
    }

    
    public function destroy($id)
    {
        $clientes=Cliente::find($id);
        $clientes->delete();

        return redirect('/clientes')->with('status','Eliminado con éxito');
    }
}
