<?php

namespace App\Http\Controllers;

use App\Models\League;
use Illuminate\Http\Request;

class LeagueController extends Controller
{
    // Show All Leagues
    public function index(){
        return view('leagues.index', [
            'leagues' => League::all()
        ]);
    }

    // Show League Create Form
    public function create(){
        return view('leagues.create');
    }

    // Save League
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => ['required']
        ]);

        if($request->file('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        League::create($formFields);

        return redirect('/leagues')->with('message', 'League created successfully!');
    }
}
