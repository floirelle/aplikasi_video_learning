<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public function index($nim)
    {
        $playlists = Playlist::where('nim', $nim)->get();
        // dd($playlists);
        return view('my-playlist')->with('playlists', $playlists);
    }

    public function deletePlaylist(Request $r)
    {
        Playlist::where(['nim' => $r->nim, 'video_id' => $r->video_id])->delete();
        return redirect()->route('my-playlist', ['nim' => $r->nim]);
    }
}
