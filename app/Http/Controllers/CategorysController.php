<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategorysController extends Controller
{
    //listar
    public function index()
    {
        //ORM Eloquent
        $categorys = Category::all();
        //select * from providers
        //me retorna la información en formato json
        return view('categorys.index', compact('categorys'));
    }
    //crear
    // public function create()
    // {
    //     return view('providers.create');
    // }
    //(guardar datos y retornar proveedores)
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categorias');
    }
    //Eliminar--> retorno vista proveedores
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('categorias');
    }
    //mostrar detalles
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show', compact('category'));
    }
    //editar
    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }
    //actualizar
    public function update(Request $request, $id)
    {
        $category = Category::find($id)->update($request->all());
        return redirect()->route('categorias');
    }
}
