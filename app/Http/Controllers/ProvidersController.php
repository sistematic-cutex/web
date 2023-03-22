<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;

class ProvidersController extends Controller
{
    //listar
    public function index()
    {
        //ORM Eloquent
        $providers = Provider::all();
        //select * from providers
        //me retorna la información en formato json
        return view('providers.index', compact('providers'));
    }
    //crear
    // public function create()
    // {
    //     return view('providers.create');
    // }
    //(guardar datos y retornar proveedores)
    public function store(Request $request)
    {
        Provider::create($request->all());
        return redirect()->route('proveedores');
    }
    //Eliminar--> retorno vista proveedores
    public function destroy($id)
    {
        Provider::find($id)->delete();
        return redirect()->route('proveedores');
    }
    //mostrar detalles
    public function show($id)
    {
        $provider = Provider::find($id);
        return view('providers.show', compact('provider'));
    }
    //editar
    public function edit($id)
    {
        $provider = Provider::find($id);

        return view('providers.edit', compact('provider'));
    }
    //actualizar
    public function update(Request $request, $id)
    {
        $provider = Provider::find($id)->update($request->all());
        return redirect()->route('proveedores');
    }
}
