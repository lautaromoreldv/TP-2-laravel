<?php

namespace App\Http\Controllers;

use App\Models\Proskill;
use Illuminate\Http\Request;
use App\Models\User;

class ProSkillController extends Controller
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
        $proskill = Proskill::create([
            'name'    => $data['name'],
            'user_id' => intval($data['user_id']),
            'percent' => $data['percent'],
            'titulo'  => $data['titulo'],
        ]);
        $proskill->save();
        return redirect()->to('usuario/'.$data['user_id'].'/edit')->with('ok', 'Se creó una nueva habilidad profesional');
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
    public function update(Request $request, ProSkill $proskill)
    {
        $proskill->update($request->all());
        return redirect()->to('usuario/'.$proskill->user_id.'/edit')->with('edit', 'Se editó una habilidad profesional');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProSkill $proskill)
    {
        $id = $proskill->user_id;
        $proskill = ProSkill::find($proskill->id);
        $proskill->delete();

        return redirect()->to('usuario/'.$id.'/edit')->with('error', 'Se borró una habilidad profesional');
    }
}
