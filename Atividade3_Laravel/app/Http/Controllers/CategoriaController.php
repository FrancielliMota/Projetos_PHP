<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /*Exibe uma lista dos recursos*/

    public function index()
    {
        $categorias = Categoria::all();
        return view("categoria.index", compact('categorias'));

        //se quiser passar outra variável, insere em compact, após as categorias;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Categoria::create($request->all());
        return redirect("/categoria");
        /**chama o método categoria no caralho do Banco de Dados.*/
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
