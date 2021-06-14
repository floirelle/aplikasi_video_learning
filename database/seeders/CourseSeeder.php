<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Session;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $url = config("global.base_url")."Course/GetCourseOutlineInSemester";
        $even = config("global.Even_2020_2021");
        $token = "mdpubb76y39vydT8W6wFoYR28oByShbNYc1sIHyeCdx5oCS3l1ApOKuOJoZIW4itEPA4gOzsqPzpT-DesXPCOQrqTB0XRLvyzgCv37nCZGYEGx2iV6c0BTKs2GjRN9-Bj796ClcutWRbPvSCTXBNHzFgTD6bRKDJzpbQl5_4n-7YykJJWSMwbAQKgMclTeoXN1F0xkAfyEaklWjTr0VhDfvtKy3myZbzAiDdffMYMuHTN0pH7a620u49yUln7jugDjl2UlR_NOAy01jGe-XOFD6vfOm8hLuNWfsl2XOK46FahPb3yBSrhW91RwZ4gEe3uBsPlw";
        $response = Http::withToken($token)->get($url,[
            "semesterId"=>$even,
        ]);
        $courses = $response->collect();
        foreach($courses as $course){
            $newUrl = config("global.base_url")."Course/GetCourseOutlineDetail";
            $courseOutlineId = $course["CourseOutlineId"];
            $newResponse = Http::withToken($token)->get($newUrl,[
                "courseOutlineId"=>$courseOutlineId
            ]);
            $courseDetail = $newResponse->json();
            if($courseDetail == null)continue;
            $newCourse = new Course;
            $newCourse->course_code = $courseDetail["CourseCode"];
            $newCourse->course_id = $course["CourseOutlineId"];
            $newCourse->course_name = $course["Name"];
            $newCourse->course_description = $courseDetail["CourseDescription"];
            $newCourse->save();

            foreach($courseDetail["Laboratory"] as $session){
                $session_count = $session["Session"];
                $topic = $session["Topics"];
                $newSession = new Session;
                $newSession->course_code=$courseDetail["CourseCode"];
                $newSession->session_name="Session ".$session_count;
                $newSession->topic=$topic;
                $newSession->save();
            }

        }
    }
}
