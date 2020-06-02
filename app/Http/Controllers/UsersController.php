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

       return view('edituser', compact('user'));

    }
    public function update(User $user)
    {
        $user->update([
            'name'=>request()->name,
            'email'=>request()->email,
            'password'=>Hash::make(request()->password),
            'rol'=>request()->rol
        ]);
        return redirect()->route('home', $user)->with(['status'=> "Se editó el user $user->name"]);
    }
    public function destroy(User $user)
    {
        $user->delete() ;
        return redirect()->route('register');
    }
}
