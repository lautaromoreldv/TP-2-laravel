<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;

class EducationController extends Controller
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
        $education = Education::create([
            'school_name'    => $data['school_name'],
            'user_id' => intval($data['user_id']),
            'degree' => $data['degree'],
            'start_date'  => $data['start_date'],
            'finish_date'  => $data['finish_date'],
            'description'  => $data['description'],
        ]);
        $education->save();
        return redirect()->to('usuario/'.$data['user_id'].'/edit')->with('ok', 'Se creó una nueva educacion');
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
    public function update(Request $request, Education $education)
    {
        $education->update($request->all());
        return redirect()->to('usuario/'.$education->user_id.'/edit')->with('edit', 'Se editó una educación');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $id = $education->user_id;
        $education = Education::find($education->id);
        $education->delete();

        return redirect()->to('usuario/'.$id.'/edit')->with('error', 'Se borró una educación');
    }
}
