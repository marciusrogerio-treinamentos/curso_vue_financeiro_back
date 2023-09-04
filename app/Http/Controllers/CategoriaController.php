<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Categoria;



class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categorias = Categoria::orderBy('id')->get();

        dd($categorias);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = [
            ["categoria" => "001-Sal", "tipo" => "Entrada"],
            ["categoria" => "002-13° Sal", "tipo" => "Entrada"],
            ["categoria" => "003-Bonûs", "tipo" => "Entrada"],
            ["categoria" => "501-CD-Hiper", "tipo" => "Saida"],
            ["categoria" => "502-CD-Extra", "tipo" => "Saida"],
            ["categoria" => "503-CD-Nu", "tipo" => "Saida"],
            ["categoria" => "504-CD-Sicoob", "tipo" => "Saida"],
            ["categoria" => "505-CD-Carref", "tipo" => "Saida"],
            ["categoria" => "506-CD-Porto", "tipo" => "Saida"],
        ];

        $this->store($categorias);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($categorias)
    {

        foreach($categorias as $categoria) {
            echo $categoria["categoria"] . " - " . $categoria["tipo"] . "<br>";
            $newCat = new Categoria;
            $newCat->categoria = $categoria["categoria"];
            $newCat->tipo      = $categoria["tipo"];
            $newCat->save();
        }

        echo "<hr>";



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
