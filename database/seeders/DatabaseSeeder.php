<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CourseSeeder::class);
        // DB::table('courses')->insert([
        //     'course_code' => 'COMP6178',
        //     'course_name' => 'Introduction to Programming',
        //     'course_description' => 'This course discusses basics algorithm and demonstrate it by using Java programming language. It enables the students to have strong fundamental of algorithm to build a basic application of problem solving by using algorithm and strong understanding concept and structure in Java.',
        //     'course_session' => 11
        // ]);
        // DB::table('courses')->insert([
        //     'course_code' => 'ISYS6123',
        //     'course_name' => 'Introduction to Database Systems',
        //     'course_description' => 'This course introduces concepts and terminologies in database system, like database architecture, relational model, Structured Query Language (SQL), security issues in database environment, normalization technique, ER modeling, and database technologies like Data warehouse concept. It gives student basic knowledge about how to create and modify tables that appropriate to the requirements of organization.',
        //     'course_session' => 12
        // ]);
        // DB::table('courses')->insert([
        //     'course_code' => 'ISYS6197',
        //     'course_name' => 'Business Application Development',
        //     'course_description' => 'This course comprises the basic concepts of object-oriented, its application in the algorithm problem solving, and its implementation with the appropriate GUI concept using GUI component. Student also able to construct a GUI application with database connection.',
        //     'course_session' => 12
        // ]);

        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 1'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 2'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 3'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 4'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 5'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 6'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 7'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 8'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 9'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 10'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'COMP6178',
        //     'session_name' => 'Session 11'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 1'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 2'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 3'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 4'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 5'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 6'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 7'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 8'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 9'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 10'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 11'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6123',
        //     'session_name' => 'Session 12'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 1'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 2'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 3'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 4'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 5'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 6'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 7'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 8'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 9'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 10'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 11'
        // ]);
        // DB::table('sessions')->insert([
        //     'course_code' => 'ISYS6197',
        //     'session_name' => 'Session 12'
        // ]);

        // DB::table('videos')->insert([
        //     'session_id' => '1',
        //     'video_title' => 'Introduction to Java, IDE, Compile, Run, Debug, Naming Convention',
        //     'video_maker' => 'AC19-1',
        //     'video_software_description' => 'Eclipse, Java 8',
        //     'video_file' => 'https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6178%2FIntroduction%20to%20Java%2C%20IDE%2C%20Compile%2C%20Run%2C%20Debug%2C%20Naming%20Convention.mp4?alt=media&token=2e0793cb-514f-435c-be07-85ecb4b0fc23'
        // ]);
        // DB::table('videos')->insert([
        //     'session_id' => '1',
        //     'video_title' => 'Part 1 - Input Output, Data Type, Output Format, Variable, Static, Constant',
        //     'video_maker' => 'AC19-1',
        //     'video_software_description' => 'Eclipse, Java 8',
        //     'video_file' => 'https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6178%2FPart%201%20-%20Input%20Output%2C%20Data%20Type%2C%20Output%20Format%2C%20Variable%2C%20Static%2C%20Constant.mp4?alt=media&token=1f010925-dd9b-44d5-af79-6ac7d9ac5c19'
        // ]);

        // DB::table('videos')->insert([
        //     'session_id' => '1',
        //     'video_title' => 'Part 2 - Input Output, Data Type, Output Format, Variable, Static, Constant',
        //     'video_maker' => 'AC19-1',
        //     'video_software_description' => 'Eclipse, Java 8',
        //     'video_file' => 'https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6178%2FPart%202%20-%20Input%20Output%2C%20Data%20Type%2C%20Output%20Format%2C%20Variable%2C%20Static%2C%20Constant.mp4?alt=media&token=e1b2f3ab-8fc6-4d90-917c-491d8aa2723c'
        // ]);
    }
}
