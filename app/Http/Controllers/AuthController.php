<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function auth() {
        return view("auth");
    }


    public function auth_user(Request $request) {
        $request->validate([
            "email" => "required|email",
            "password" => "required",
        ], [
            "email.required" => "Поле обязательно для заполнения!",
            "email.email" => "Введите корректный email",
            "password.required" => "Поле обязательно для заполнения!",
        ]);

        $user = $request->only("email", "password");
        if (Auth::attempt([
           "email" => $user["email"],
           "password" => $user["password"]
       ])) {
        return redirect("/")->with("success","");
       }
       return redirect()->back()->with("error","Неверный логин или пароль");

    }

    public function reg() {
        return view("reg");
    }

    public function reg_user(Request $request) {
        $request->validate([
            "email"=> "required|unique:users|email",
            "surname"=> "required",
            "name"=> "required",
            "patronymic"=> "required",
            "phone"=> "required",
            "password"=> "required",
            // "confirm_password"=>"required|same:password"
            ],
            [
                "name.required" => "Поле обязательно для заполнения!",
                "surname.required" => "Поле обязательно для заполнения!",

                "phone.required" => "Поле обязательно для заполнения!",
                "phone.number" => "Только цифры!",

                "email.required" => "Поле обязательно для заполнения!",
                "email.email" => "Введите корректный email",
                "email.unique" => "Данный email уже занят",

                "password.required" => "Поле обязательно для заполнения!",
                "confirm_password.required" => "Поле обязательно для заполнения!",
                "confirm_password.same" => "Пароли не совпадают",
        ]);


        $userInfo=$request->all();

        $user_create= User::create([
            "email"=> $userInfo["email"],
            "surname"=> $userInfo["surname"],
            "name"=> $userInfo["name"],
            "patronymic"=> $userInfo["patronymic"],
            "phone"=> $userInfo["phone"],
            "role_id"=> '2',
            "password"=> Hash::make($userInfo["password"]),
        ]);

        if ($user_create) {
            return redirect("/auth")->with("success","");
        }
        else {
            return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
        }

    }

    public function exit() {
        Session::flush();
        Auth::logout();
        return redirect("/");
    }
}
