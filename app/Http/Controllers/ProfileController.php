<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    // public function edit()
    // {
    //     return view('lk');
    // }

    public function lk_update(Request $request)
    {
        $userInfo=$request->all();

        $user = Auth::user();

        // $user = User::find('id', Auth::user()->id);
        // $user->id = Auth::user()->id;
            $user->telephone = $userInfo['telephone'];
            $user->email = $userInfo['email'];
            $user->name = $userInfo['name'];
            $user->surname = $userInfo['surname'];
            $user->password = Hash::make($userInfo["password"]);

            $user->save();


        return redirect("/lk")->with('success', 'Профиль успешно обновлен.');


    }
}
