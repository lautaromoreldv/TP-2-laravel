<?php

namespace App\Http\Controllers;

use App\Models\Trabajo;
use Illuminate\Http\Request;

class TrabajoController extends Controller
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
        $trabajo = Trabajo::create([
            'trabajo'    => $data['trabajo'],
            'user_id' => intval($data['user_id']),
            'lugar' => $data['lugar'],
            'start_date'  => $data['start_date'],
            'finish_date'  => $data['finish_date'],
            'responsabilidades'  => $data['responsabilidades'],
        ]);
        $trabajo->save();
        return redirect()->to('usuario/'.$data['user_id'].'/edit')->with('ok', 'Se creó un nuevo trabajo');
    
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
    public function update(Request $request, Trabajo $trabajo)
    {
        $trabajo->update($request->all());
        return redirect()->to('usuario/'.$trabajo->user_id.'/edit')->with('edit', 'Se editó un nuevo trabajo');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajo $trabajo)
    {
        $id = $trabajo->user_id;
        $trabajo = Trabajo::find($trabajo->id);
        $trabajo->delete();

        return redirect()->to('usuario/'.$id.'/edit')->with('error', 'Se borró un trabajo');
    }
}
