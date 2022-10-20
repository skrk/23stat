<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    // Show All Players
    public function index(){
        return view('players.index', [
            'players' => Player::latest()->filter(request(['search', 'league_id']))->paginate(5)
        ]);
    }

    // Show Player
    public function show(Player $player){
        return view('players.show', [
            'heading' => $player->name,
            'player' => $player
        ]);
    }

    // Show Player Create Form
    public function create(){
        return view('players.create', [
            'leagues' => League::all()
        ]);
    }
    
    // Show Player Edit Form
    public function edit(Player $player){
        return view('players.edit', [
            'player' => $player,
            'leagues' => League::all()
        ]);
    }

    // Store New Player
    public function store(Request $request){
        $formFields = $request->validate([
            'league_id' => 'required',
            'name' => 'required',
            'team' => 'required',
            'birthdate' => 'required',
            'number' => 'required'
        ]);

        if($request->file('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }
        
        $formFields['user_id'] = auth()->id();
        Player::create($formFields);

        return redirect('/players')->with('message', 'Player created successfully!');
    }

    // Update Player
    public function update(Request $request, Player $player){

        if($player->user_id != auth()->id()){
            abort(403, "Unauthorized action");
        }
        $formFields = $request->validate([
            'name' => 'required',
            'team' => 'required',
            'birthdate' => 'required',
            'number' => 'required'
        ]);

        if($request->file('photo')){
            $formFields['photo'] = $request->file('photo')->store('photos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        $player->update($formFields);

        return redirect("/players/$player->id")->with('message', 'Player updated successfully!');
    }

    // Delete Player
    public function destroy(Player $player){
        if($player->user_id != auth()->id()){
            abort(403, "Unauthorized action");
        }
        $player->delete();
        return redirect('/players')->with('message', 'Player '.$player->name.' deleted successfully!');
    }
}
