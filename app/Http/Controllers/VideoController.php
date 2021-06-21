<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Video;
use Illuminate\Http\Request;

use Kreait\Firebase\Factory;

class VideoController extends Controller
{
    public function showAddVideo($session_id)
    {
        $session = Session::where('session_id', $session_id)->first();
        return view('add-video')->with('session', $session);
    }

    public function insertVideo(Request $r)
    {
        $this->validate($r, [
            'video_title' => 'required|min:5',
            'video_software_description' => 'required',
            'video_link' => 'required',
        ]);

        $session = Session::where('session_id', $r->session_id)->first();

        Video::create([
            'video_title' => $r->video_title,
            'video_software_description' => $r->video_software_description,
            'video_file' => $r->video_link,
            'session_id' => $r->session_id,
            'video_type' => 'VBL'
        ]);

        // $data = app('firebase.storage')->getBucket()->upload($video, ['name' => 'COMP6178/' . $nama_file]);

        return redirect()->route('view-course', ['course_code' => $session->course->course_code]);
    }

    public function showDetailVideo($video_id)
    {
        $video = Video::where('video_id', $video_id)->first();

        return view('edit-video')->with('video', $video);
    }

    public function updateVideo(Request $r)
    {
        if ($r->video_file != null) {
            Video::where('video_id', $r->video_id)->update([
                'video_title' => $r->video_title,
                'video_software_description' => $r->video_software_description,
                'video_file' => $r->video_link
            ]);
        } else {
            Video::where('video_id', $r->video_id)->update([
                'video_title' => $r->video_title,
                'video_software_description' => $r->video_software_description
            ]);
        }

        return redirect()->route('manage-learning-video');
    }

    public function deleteVideo($video_id)
    {
        Video::where('video_id', $video_id)->delete();
        return redirect()->route('manage-learning-video');
    }
}
