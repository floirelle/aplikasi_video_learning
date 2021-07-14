<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function showAddVideo(Request $r)
    {
        $session_name = $r->session_name;
        $course_id = $r->course_id;
        $course_name = $r->course_name;
        return view('add-video')
            ->with('session_name', $session_name)
            ->with('course_id', $course_id)
            ->with('course_name', $course_name);
    }

    public function insertVideo(Request $r)
    {
        $this->validate($r, [
            'video_title' => 'required|min:5',
            'video_software_description' => 'required',
            'video_link' => 'required',
        ]);

        Video::create([
            'video_title' => $r->video_title,
            'session_name' => $r->session_name,
            'video_software_description' => $r->video_software_description,
            'course_id' => $r->course_id,
            'video_file' => $r->video_link,
            'video_type' => 'VBL'
        ]);

        return redirect('learning-video');
    }

    public function showAddRecord(Request $r)
    {
        $session_name = $r->session_name;
        $course_id = $r->course_id;
        $course_name = $r->course_name;
        $class_code = $r->class_code;
        return view('add-record')
            ->with('session_name', $session_name)
            ->with('course_id', $course_id)
            ->with('course_name', $course_name)
            ->with('class_code', $class_code);
    }

    public function insertRecord(Request $r)
    {
        $this->validate($r, [
            'video_title' => 'required|min:5',
            'video_software_description' => 'required',
            'video_link' => 'required',
        ]);

        Video::create([
            'video_title' => $r->video_title,
            'session_name' => $r->session_name,
            'video_software_description' => $r->video_software_description,
            'course_id' => $r->course_id,
            'video_file' => $r->video_link,
            'class_code' => $r->class_code,
            'video_type' => 'record'
        ]);

        return redirect('manage-class-video');
    }

    public function showDetailVideo($video_id)
    {
        $video = Video::where('video_id', $video_id)->first();

        return view('edit-video')->with('video', $video);
    }

    public function updateVideo(Request $r)
    {
        $video = null;
        if ($r->video_file != null) {
            $video = Video::where('video_id', $r->video_id)->first();
            $video->update([
                'video_title' => $r->video_title,
                'video_software_description' => $r->video_software_description,
                'video_file' => $r->video_link
            ]);
        } else {
            $video = Video::where('video_id', $r->video_id)->first();
            $video->update([
                'video_title' => $r->video_title,
                'video_software_description' => $r->video_software_description
            ]);
        }
        // dd($video);
        if ($video->video_type == "record") return redirect()->route('manage-class-video');
        return redirect()->route('manage-learning-video');
    }

    public function deleteVideo($video_id)
    {
        Video::where('video_id', $video_id)->delete();
        return redirect()->route('manage-learning-video');
    }
}
