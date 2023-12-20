<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\User;
use App\Models\Game;


class AdminController extends Controller
{
    public function gameEdit($id) {
        // $applications=Application::with('status')->get();
        // $game=1;
        $games=Game::all();

        return view("gamesEdit",[
            "applications"=>$applications,
            "games"=> $games,
            "gameFind" =>$game,
        ]);
    }
    public function confirm($id_application)
    {
      $application= Application::find($id_application);

      $application->is_confirm = 1;

      $application->save();

      return redirect("/index");
   }

   public function game_create(Request $request)
   {
        $request->validate([
           'title' => 'required',
           'photo' => 'required',
       ]);

       $game_info=$request->all();

       $photo = $request->file('photo');
       $photoName = time() . '_' . $photo->getClientOriginalName();
       $destinationPath = public_path('images/games');
       $photo->move($destinationPath, $photoName);

       $game_create=Game::create([
           "title" => $game_info["title"],
           "photo" => $photoName,

       ]);

       if ($game_create) {
            return redirect("/index")->with("success","");
        }
        else {
            return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
        }

   }

            public function edit($id) {

                    $game=Game::find($id);
                    return view('admin.gamesEdit', ['gameFind' => $game]);



            }
        public function update(Request $request, Game $id)
        {
            $id->fill([
                'title' => $request->title,
                'photo' => $photoName,
        ]);
            $id->save();
            return redirect('/index');
        }

        public function destroy(Game $id)
        {
            $id->delete();
            return redirect('/admin');
        }

}
