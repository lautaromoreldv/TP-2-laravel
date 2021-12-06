<?php

namespace App\Http\Controllers;

use App\Models\Titulo;
use Illuminate\Http\Request;

class TituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $titulo = Titulo::create([
            'titulo'    => $data['titulo'],
            'user_id' => intval($data['user_id']),
            'descripcion' => $data['descripcion'],
        ]);
        $titulo->save();
        return redirect()->to('usuario/'.$data['user_id'].'/edit')->with('ok', 'Se creó un nuevo titulo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function show(Titulo $titulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Titulo $titulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titulo $titulo)
    {
        $titulo->update($request->all());
        return redirect()->to('usuario/'.$titulo->user_id.'/edit')->with('edit', 'Se editó un titulo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titulo  $titulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titulo $titulo)
    {
        $id = $titulo->user_id;
        $titulo = Titulo::find($titulo->id);
        $titulo->delete();

        return redirect()->to('usuario/'.$id.'/edit')->with('error', 'Se borró un titulo');
    }
}
