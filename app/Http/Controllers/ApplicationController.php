<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function new_application( Request $request) {
       $application_info = $request->all();
        Application::create([
            "telephone"=> $application_info["telephone"],
            "name"=> $application_info["name"],
            "surname"=> $application_info["surname"],
            "email"=> $application_info["email"],
            "id_status"=>1,
        ]);

        return redirect("/");
        }

        public function confirm($id_application)
    {
        $application = Application::find($id_application);

        $application->id_status = 2;

        $application->save();

        return redirect("/admin");
    }
    public function deny($id_application)
    {
        $application = Application::find($id_application);

        $application->id_status = 3;

        $application->save();

        return redirect("/admin");
    }
}
