<?php

namespace App\Http\Controllers;

use App\Models\AltCourse;
use App\Models\Course;
use App\Models\Session;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CourseController extends Controller
{
    public function showLearningVideo(Request $request)
    {

        $even = config("global.Even_2020_2021");
        $token = $request->session()->get("token");
        $courses = [];

        if ($request->session()->get("role") == "Student") {
            $nim = $request->session()->get("username");
            $url = config("global.base_url") . "Student/GetStudentClassTransactionWithAssistant";
            $response = Http::withToken($token)->get($url, [
                "semesterId" => $even,
                "nim" => $nim
            ]);
            foreach ($response->collect() as $c) {
                $course = new AltCourse;
                $course->course_id = $c["CourseOutlineId"];
                $course->course_name = $c["Subject"];
                $course->course_class = $c["ClassName"];
                array_push($courses, $course);
            }
            return view('learning-video')
                ->with('courses', $courses);
        } else {
            if ($request->get("filter") != NULL && $request->get("filter") == "On") {
                $url = config("global.base_url") . "Assistant/GetClassTransactionByAssistantUsername";
                $response = Http::withToken($token)->get($url, [
                    "semesterId" => $even,
                    "username" => $request->session()->get("username"),
                ]);
                // dd($response->collect());
                foreach ($response->collect() as $c) {
                    $course = new AltCourse;
                    $course->course_id = $c["CourseOutlineId"];
                    $course->course_name = $c["Subject"];
                    $course->course_class = $c["Class"];
                    array_push($courses, $course);
                }
                return view('learning-video')
                    ->with('courses', $courses);
            } else {
                $url = config("global.base_url") . "Course/GetCourseOutlineInSemester";
                $response = Http::withToken($token)->get($url, [
                    "semesterId" => $even,
                ]);
                $allCourse = [];
                foreach ($response->collect() as $c) {
                    $course = new AltCourse;
                    $course->course_id = $c["CourseOutlineId"];
                    $course->course_name = $c["Name"];
                    array_push($allCourse, $course);
                }
                return view('learning-video')
                    ->with('courses', $allCourse);
            }
        }
    }


    public function showManageLearning(Request $request)
    {
        $even = config("global.Even_2020_2021");
        $token = $request->session()->get("token");
        // $courses = [];
        $url = config("global.base_url") . "Course/GetCourseOutlineInSemester";
        $response = Http::withToken($token)->get($url, [
            "semesterId" => $even,
        ]);
        $allCourse = [];
        foreach ($response->collect() as $c) {
            $course = new AltCourse;
            $course->course_id = $c["CourseOutlineId"];
            $course->course_name = $c["Name"];
            // $course->course_class=$c["Class"];
            array_push($allCourse, $course);
        }
        return view('manage-learning-video')->with('courses', $allCourse);
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

    public function showDetailCourse(Request $request)
    {
        $url = config("global.base_url") . "Course/GetCourseOutlineDetail";
        $even = config("global.Even_2020_2021");
        $token = $request->session()->get("token");
        $response = Http::withToken($token)->get($url, [
            "courseOutlineId" => $_POST['course_id'],
        ]);
        $resp = $response->json();
        $course = new AltCourse;
        $course->course_id = $resp["Id"];
        $course->course_name = $resp["Description"];
        $course->class = "";
        $course->course_description = $resp["CourseDescription"];
        $sessions = [];
        foreach ($resp["Laboratory"] as $s) {
            $session = new Session;
            $session->session_name = $s["Session"];
            $session->topic = $s["Topics"];
            $session->videos = Video::where('session_name', $s["Session"])->where('course_id', $resp["Id"])->get();
            array_push($sessions, $session);
        }
        return view('detail-course')->with('course', $course)->with('sessions', $sessions);
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
    public function getAllCourse(Request $request)
    {
        $url = config("global.base_url") . "Course/GetCourseOutlineInSemester";
        $even = config("global.Even_2020_2021");
        $token = $request->session()->get("token");
        $response = Http::withToken($token)->get($url, [
            "semesterId" => $even,
        ]);
        $courses = $response->collect();
        foreach ($courses as $course) {
            $newUrl = config("global.base_url") . "Course/GetCourseOutlineDetail";
            $courseOutlineId = $course["CourseOutlineId"];
            $newResponse = Http::withToken($token)->get($newUrl, [
                "courseOutlineId" => $courseOutlineId
            ]);
            $courseDetail = $newResponse->json();
            $newCourse = new Course;
            $newCourse->course_code = $courseDetail["CourseCode"];
            $newCourse->course_id = $course["CourseOutlineId"];
            $newCourse->course_name = $course["Name"];
            $newCourse->course_description = $courseDetail["CourseDescription"];
            $newCourse->save();

            foreach ($course["Laboratory"] as $session) {
                $session_count = $session["Session"];
                $topic = $session["Topic"];
                $newSession = new Session;
                $newSession->course_code = $courseDetail["CourseCode"];
                $newSession->session_name = $session_count;
                $newSession->topic = $topic;
                $newSession->save();
            }
        }
    }
}
