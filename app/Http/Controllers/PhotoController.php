<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("firstcontroller.create");
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
            'title' => 'required|min:4|max:255',
            'description' => 'required|min:4|max:255',
            'song' => 'required|file|mimes:jpg,jpeg,png,svg'
        ]);
        
        $song = new Song();
        $song->title = $request->input('title');
        $song->description = $request->input('description');
        $song->votes = 0;
        $song->user_id = Auth::id();
        $name = $request->file('song')->hashName();
        $request->file('song')->move("uploads/".Auth::id(), $name);
        $song->url = "/uploads/".Auth::id()."/".$name; 
        $song->save(); // INSERT INTO songs.....

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {
        if($song->user->id == Auth::id())
        $song->delete();
        return back();
    }
}
