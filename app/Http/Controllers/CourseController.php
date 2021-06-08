<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Session;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function showLearningVideo()
    {
        $courses = Course::all();
        return view('learning-video')->with('courses', $courses);
    }

    public function showManageLearning()
    {
        $courses = Course::all();
        return view('manage-learning-video')->with('courses', $courses);
    }

    public function insertCourse(Request $r)
    {
        $this->validate($r, [
            'course_code' => 'required|min:8|unique:courses',
            'course_name' => 'required|min:5',
            'course_description' => 'required',
            'course_session' => 'required|gt:0'
        ]);

        Course::create([
            'course_code' => $r->course_code,
            'course_name' => $r->course_name,
            'course_description' => $r->course_description,
            'course_session' => $r->course_session
        ]);

        for ($i = 1; $i <= $r->course_session; $i++) {
            Session::create([
                'course_code' => $r->course_code,
                'session_name' => 'Session ' . $i
            ]);
        }

        return redirect('manage-learning-video');
    }

    public function deleteCourse($course_code)
    {
        Course::where('course_code', $course_code)->delete();
        return redirect('manage-learning-video');
    }

    public function showDetailCourse($course_code)
    {
        $course = Course::where('course_code', $course_code)->first();
        // dd($course->sessions[0]->videos);
        return view('detail-course')->with('course', $course);
    }

    public function showEditCourse($course_code)
    {
        $course = Course::where('course_code', $course_code)->first();
        return view('edit-course')->with('course', $course);
    }

    public function updateCourse(Request $r)
    {
        $this->validate($r, [
            'course_name' => 'required|min:5',
            'course_description' => 'required',
            'course_session' => 'required|gt:0'
        ]);

        Course::where('course_code', $r->course_code)->update([
            'course_name' => $r->course_name,
            'course_description' => $r->course_description,
            'course_session' => $r->course_session
        ]);

        Session::where('course_code', $r->course_code)->delete();

        for ($i = 1; $i <= $r->course_session; $i++) {
            Session::create([
                'course_code' => $r->course_code,
                'session_name' => 'Session ' . $i
            ]);
        }

        return redirect('manage-learning-video');
    }
}
