<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function edit(User $user)
    {

       return view('editusuario', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
    $usuario = User::findOrFail($user);
    $usuario->update([
        'name'=>request()->name,
        'email'=>request()->email,
        'password'=>Hash::make(request()->password),
        'rol'=>request()->rol
    ]);

    return redirect()->route('home', $usuario)->with(['status'=> "Se editó el user $usuario->name"]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete() ;
        return redirect()->route('register');
    }
}
