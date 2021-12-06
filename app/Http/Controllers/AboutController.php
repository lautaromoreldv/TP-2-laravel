<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AboutController extends Controller
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
        $about = About::create([
            'titulo'    => $data['titulo'],
            'user_id' => intval($data['user_id']),
            'about' => $data['about'],
            'boton' => $data['about'],
            'whatido' => $data['whtaido'],
            'cv' => $data['cv'],
        ]);
        $about->save();
        return redirect()->to('usuario/'.$data['user_id'].'/edit')->with('ok', 'Se creó un nuevo titulo');
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
    public function update(Request $request, About $about)
    {
        if($request->file('file_about')){
            Storage::disk('public')->delete($about->image_about);
            $about->image_about = $request->file('file_about')->store('users', 'public');
            $about->save();
        }
        if($request->file('cv')){
            Storage::disk('public')->delete($about->cv);
            $about->cv = $request->file('cv')->store('users', 'public');
            $about->save();
        }
        $about->update($request->all());
        return redirect()->to('usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $user = About::find($id);

        if($user->image_about){
            Storage::disk('public')->delete($user->image_about);
        }
        if($user->cv){
            Storage::disk('public')->delete($user->cv);
        }

        $user->delete();
        return redirect()->to('usuario');
    }

}
