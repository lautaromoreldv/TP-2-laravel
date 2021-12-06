<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('education', 'skill', 'about', 'proskill')->latest()->get();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit(User $usuario)
    {
        return view('admin.users.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $usuario)
    {
        //Las validaciones estan en UserRequest
        if($request->file('file')){
            Storage::disk('public')->delete($usuario->image);
            $usuario->image = $request->file('file')->store('users', 'public');
            $usuario->save();
        }
        $usuario->update($request->all());
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
        $user = User::find($id);

        if($user->image){
            Storage::disk('public')->delete($user->image);
        }

        $user->delete();
        return redirect()->to('usuario');
    }

    public function logout_user()
    {
        Auth::logout();
        return view('welcome');
    }

    /*
    

    public function editUser(User $usuario)
    {
        return view('cliente.users.edit', compact('usuario'));
    }

    public function updateUser(UserRequest $request, User $usuario)
    {
        //Las validaciones estan en UserRequest
        if($request->file('file')){
            Storage::disk('public')->delete($usuario->image);
            $usuario->image = $request->file('file')->store('users', 'public');
            $usuario->save();
        }
        $usuario->update($request->all());
        return redirect()->to('usuario');
    }

    public function destroyUser($id)
    {   
        $user = User::find($id);

        if($user->image){
            Storage::disk('public')->delete($user->image);
        }
        $user->delete();
        return redirect()->to('usuario');
    }

    public function my_portfolio()
    {
        $user = User::find(Auth::user()->id)->with('education', 'skill', 'roles')->latest()->get();
        return view('my-portfolio', compact('user'));
    }*/

}
