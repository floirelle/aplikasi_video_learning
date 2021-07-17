<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\CourseController;

class PlaylistController extends Controller
{
    public function index(Request $request)
    {
        $nim = $request->session()->get("username");
        $playlists = Playlist::where('nim', $nim)->get();
        return view('my-playlist')->with('playlists', $playlists);
    }

    public function deletePlaylist(Request $r)
    {
        $nim = $r->session()->get("username");
        Playlist::where(['nim' => $nim, 'video_id' => $r->video_id])->delete();
        return redirect()->back();
    }

    public function addPlaylist(Request $r)
    {
        // dd('hhh');
        $nim = $r->session()->get("username");
        $vid_type="VBL";
        if($r->class_code){
            $vid_type ="record";
        }
        Playlist::create([
            'nim' => $nim,
            'video_id' => $r->video_id
        ]);
        // return redirect()->action(
        //     [CourseController::class,"showDetailCourse"],
        //     ['course_id'=>$r->course_id,
        //      'video_type'=>$vid_type
        //     ]
        //     )->withInput();
    }
    public function getPlaylistVideoStatus(Request $r){
        
        $video_id = $_POST['video_id'];
        $nim = $r->session()->get("username");
        $playlist = Playlist::where('nim',$nim)->where("video_id",$video_id)->first();
        return $playlist;
        // return $playlist == null;
        if($playlist == null)return 0;
        return 1;
    }
}
