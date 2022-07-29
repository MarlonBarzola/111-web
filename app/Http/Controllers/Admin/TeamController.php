<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'slug' => 'required|unique:teams',
            'file' => 'image|required' 
        ]);

        $team = Team::create($request->all());

        if($request->file('file')) {
            $url = Storage::disk('public')->put('teams', $request->file('file'));
            $team->thumbnail = $url;
            $team->save();
        }

        return redirect()->route('admin.teams.edit', compact('team'))->with('info', 'El miembro se creó correctamente');
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
    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'slug' => "required|unique:teams,slug,$team->id",
            'file' => 'image' 
        ]);

        $team->update($request->all());

        if($request->file('file')) {
            $url = Storage::disk('public')->put('teams', $request->file('file'));
    
            if($team->thumbnail) {
                Storage::delete([$team->thumbnail]);
            }

            $team->thumbnail = $url;
            $team->save();
        }

        return redirect()->route('admin.teams.edit', $team)->with('info', 'El miembro se creó correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if($team->thumbnail) {
            Storage::delete([$team->thumbnail]);
        }
        $team->delete();
        return redirect()->route('admin.teams.index')->with('info', 'El miembro de equipo se eliminó correctamente');
    }
}
