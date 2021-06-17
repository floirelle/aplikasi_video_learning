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
        //COMP6047
        DB::table('videos')->insert([
            "video_title" => "Introduction to C, IDE, Compile, Naming Variable",
            "session_name" => '1',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%201%2F01.%20Introduction%20to%20C%2C%20IDE%2C%20Compile%2C%20Naming%20Variable.m4v?alt=media&token=cf729643-fb44-4081-b791-3d4fc66455df"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Input Output, Data Type, Output Format, Variable Static, Constant Part 1",
            "session_name" => '1',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%201%2F02.%20Input%20Output%2C%20Data%20Type%2C%20Output%20Format%2C%20Variable%20Static%2C%20Constant%20Part%201.m4v?alt=media&token=04fa3b4f-b819-485b-88c1-de784b238fb4"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Input Output, Data Type, Output Format, Variable Static, Constant Part 2",
            "session_name" => '1',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%201%2F03.%20Input%20Output%2C%20Data%20Type%2C%20Output%20Format%2C%20Variable%20Static%2C%20Constant%20Part%202.m4v?alt=media&token=9d043dca-d520-4f03-86cf-28cf56ec8235"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Introduction to Binary Part 1",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%202%2F01.%20Introduction%20to%20Binary%20Part%201.mp4?alt=media&token=e97913fa-848e-42c8-80ff-e1723e99ab17"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Introduction to Binary Part 2",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%202%2F02.%20Introduction%20to%20Binary%20Part%202.mp4?alt=media&token=54eac3a6-29b0-4bcd-a415-9aa96969973c"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Operator Operand Basic Arithmethic",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%202%2F03.%20Operator%20Operand%20Basic%20Arithmethic.m4v?alt=media&token=8112c3d6-f828-4096-b4bc-c3d57406509e"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Selection Part 1",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%203%2F01.%20Selection%20Part%201.mp4?alt=media&token=d18573dc-57c7-47f3-8152-5738673e9110"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Selection Part 2",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%203%2F02.%20Selection%20Part%202.mp4?alt=media&token=116f5ef7-deef-4ea6-8400-bd429f7b7272"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Selection Part 3",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%203%2F03.%20Selection%20Part%203.mp4?alt=media&token=097417dd-d460-4350-b8f9-994e18771543"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Repetition",
            "session_name" => '4',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%204%2F01.%20Repetition.mp4?alt=media&token=9e4a1464-7c09-416b-b8fe-8f4b9da567f4"
        ]);

        DB::table('videos')->insert([
            "video_title" => "C String",
            "session_name" => '6',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%206%2F01.%20C%20String.mp4?alt=media&token=7475152a-2770-4479-8e41-c7f9f5f78f48"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Pointer & Memory Management",
            "session_name" => '6',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%206%2F02.%20Pointer%20%26%20Memory%20Management.mp4?alt=media&token=b932083d-b7a7-46cc-9c71-03eba0d63aa1"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Array Part 1",
            "session_name" => '6',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%206%2F03.%20Array%20Part%201.m4v?alt=media&token=ad2b6354-2518-4292-bc1b-3510d2b0464e"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Array Part 2",
            "session_name" => '6',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%206%2F04.%20Array%20Part%202.m4v?alt=media&token=3674ae1c-0d6a-4e2e-9466-5e6ad604a2e7"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Function",
            "session_name" => '7',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%207%2F01.%20Function.m4v?alt=media&token=a7bf5113-b4db-478c-bfd3-8abdb1ace352"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Passing Parameter in C",
            "session_name" => '7',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%207%2F02.%20Passing%20Parameter%20in%20C.mp4?alt=media&token=8feee1f8-4ad8-4d35-9fb6-460999f024b6"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Recursion",
            "session_name" => '7',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%207%2F03.%20Recursion.mp4?alt=media&token=821b97f2-6c6d-4297-a387-724ddd2fea94"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Bubble Sort",
            "session_name" => '8',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%208%2FBubble%20Sort.mp4?alt=media&token=df19ac3c-5edf-4c47-bb66-224e9e4788cd"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Insertion Sort",
            "session_name" => '8',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%208%2FInsertion%20Sort.m4v?alt=media&token=413c9fe0-d116-4aa2-9dd0-dc66f18f6129"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Merge Sort",
            "session_name" => '8',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%208%2FMerge%20Sort.mp4?alt=media&token=d3790f9f-40fd-41d9-b479-6c231d395c5b"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Quick Sort Part 1",
            "session_name" => '8',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%208%2FSimulation%20Video%20Quick%20Sort-1.m4v?alt=media&token=8b76cbcb-e8ce-42c0-b3aa-3fe9294bb778"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Quick Sort Part 2",
            "session_name" => '8',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%208%2FCode%20Video%20Quick%20Sort-1.m4v?alt=media&token=72bc2377-8c34-4922-aebf-4256e51de146"
        ]);

        DB::table('videos')->insert([
            "video_title" => "File Processing Part 1",
            "session_name" => '9',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%209%2F01.%20File%20Processing%20Part%201.mp4?alt=media&token=9a471c91-e85c-4120-a1a1-779c1332e35c"
        ]);

        DB::table('videos')->insert([
            "video_title" => "File Processing Part 2",
            "session_name" => '9',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%209%2F02.%20File%20Processing%20Part%202.mp4?alt=media&token=4a77aa87-6b4e-4cd0-b996-ae93639882b8"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Binary Search Part 1",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%2010%2Fbinary%2FPart1-Complete.m4v?alt=media&token=6ecf7975-492b-4a9f-a531-749b0789583b"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Binary Search Part 2",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%2010%2Fbinary%2FPart2-Complete.m4v?alt=media&token=203e676f-9464-4d32-a56c-5360847d0db8"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Linear Search Part 2",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%2010%2Flinear%2FVBL_Final.mp4?alt=media&token=29d87d75-53b4-49a5-8921-f88e99a013d4"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Struct and Union",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "965b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6047%2Fsession%2010%2Fstruct%20and%20union%2FVblc-1.m4v?alt=media&token=7e68d3ed-a598-4a02-b5cf-6aa2d41ce9d0"
        ]);

        //COMP6048
        DB::table('videos')->insert([
            "video_title" => "Introduction to C, IDE, Compile, Naming Variable",
            "session_name" => '1',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%201%2F01.%20Introduction%20to%20C%2C%20IDE%2C%20Compile%2C%20Naming%20Variable.m4v?alt=media&token=0cc085ee-547f-4483-aa86-6d6b87cc72a1"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Input Output, Data Type, Output Format, Variable Static, Constant Part 1",
            "session_name" => '1',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%201%2F02.%20Input%20Output%2C%20Data%20Type%2C%20Output%20Format%2C%20Variable%20Static%2C%20Constant%20Part%201.m4v?alt=media&token=923cc5e1-e069-4715-8845-8b64e2929fcb"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Input Output, Data Type, Output Format, Variable Static, Constant Part 2",
            "session_name" => '1',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%201%2F03.%20Input%20Output%2C%20Data%20Type%2C%20Output%20Format%2C%20Variable%20Static%2C%20Constant%20Part%202.m4v?alt=media&token=518c0c3e-2a47-42ef-973e-7873d14efab5"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Single Linked-List Part 1",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F01.%20Single%20Linked%20List%20(Part%201).mp4?alt=media&token=4b9b1c62-23d9-42f7-907c-75680835e543"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Single Linked-List Part 2",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F02.%20Single%20Linked%20List%20(Part%202).mp4?alt=media&token=f7af1ac4-623e-4f11-820f-d44f28708fdb"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Single Linked-List Part 3",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F03.%20Single%20Linked%20List%20(Part%203).mp4?alt=media&token=e7632ce7-9b45-43f9-bd97-1df69d9340ae"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Single Linked-List Part 4",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F04.%20Single%20Linked%20List%20(Part%204).mp4?alt=media&token=34eb743a-94cf-43f1-8751-6a29b0c23992"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Single Linked-List Part 5",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F05.%20Single%20Linked%20List%20(Part%205).mp4?alt=media&token=7e3c5ef9-8277-435c-8bcc-89653ab595f2"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Single Linked-List Part 6",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F06.%20Single%20Linked%20List%20(Part%206).mp4?alt=media&token=25943e12-46b5-471e-8c0c-34bc9b4fc247"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Stack Part 1",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F01.%20Stack%20(Part%201).mp4?alt=media&token=702ecf91-a801-4280-98d3-00fad24ded4b"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Stack Part 2",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F02.%20Stack%20(Part%202).mp4?alt=media&token=4848edc5-609e-4c70-8b4e-6c862ce9c5c2"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Stack Part 3",
            "session_name" => '2',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%202%2F03.%20Stack%20(Part%203).mp4?alt=media&token=b5d7c828-8a88-47af-aa37-02ffc7a0d24e"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Double Linked-List Part 1",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%203%2F01.%20Double%20Linked%20List%20(Concept%20Of%20Insert).m4v?alt=media&token=cf833f4f-c951-4b3a-97cf-b3fa585e3479"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Double Linked-List Part 2",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%203%2F02.%20Double%20Linked%20List%20(Concept%20Of%20Delete%20And%20Search).m4v?alt=media&token=f46cf299-408d-447e-88fb-932bf9055049"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Double Linked-List Part 3",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%203%2F03.%20Double%20Linked%20List%20(Push%20Head%2C%20Push%20Tail%20And%20View).m4v?alt=media&token=89747d48-21a5-4ebd-ac08-dfd70649c83b"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Double Linked-List Part 4",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%203%2F04.%20Double%20Linked%20List%20(Push%20Mid).m4v?alt=media&token=339fd44e-703b-4df0-a4b4-9ad6f5d3c582"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Priority Queue Part 1",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%203%2F01.%20Priority%20Queue%20(Concept%20Of%20Priority%20Queue).m4v?alt=media&token=1c44d854-c9c8-4945-9937-b4db72c0b78f"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Priority Queue Part 2",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%203%2F02.%20Priority%20Queue%20(Pushing%20Head%2C%20Pushing%20Tail%20Code).m4v?alt=media&token=6ee49396-2614-4e5d-82ca-1b8a27de0c1c"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Priority Queue Part 3",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%203%2F03.%20Priority%20Queue%20(Enqueue%20_%20Dequeue).m4v?alt=media&token=0811df0e-3663-4ac7-b998-e2a8c8147aab"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Priority Queue Part 4",
            "session_name" => '3',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%203%2F04.%20Priority%20Queue%20(Peek%20_%20View).m4v?alt=media&token=812546af-8561-4f79-97f3-cb117b93b212"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Hash Table - Linear Probling Part 1",
            "session_name" => '4',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%204%2F01.%20Hash%20Table%20-%20Linear%20Probing%20(Part%201).m4v?alt=media&token=e98b2582-b882-444c-9360-df62a4666246"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Hash Table - Linear Probling Part 2",
            "session_name" => '4',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%204%2F02.%20Hash%20Table%20-%20Linear%20Probing%20(Part%202).m4v?alt=media&token=0e3fa49b-ad34-4b22-98e0-bd9d88218088"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Hash Table - Linear Probling Part 3",
            "session_name" => '4',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%204%2F03.%20Hash%20Table%20-%20Linear%20Probing%20(Part%203).m4v?alt=media&token=4cce80bd-077d-459c-8474-d6082f5c597f"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Hash Table - Chaining Part 1",
            "session_name" => '4',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%204%2F01.%20Hash%20Table%20-%20Linear%20Probing%20(Part%201).m4v?alt=media&token=e98b2582-b882-444c-9360-df62a4666246"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Hash Table - Chaining Part 2",
            "session_name" => '4',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%204%2F02.%20Hash%20Table%20-%20Linear%20Probing%20(Part%202).m4v?alt=media&token=0e3fa49b-ad34-4b22-98e0-bd9d88218088"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Hash Table - Chaining Part 3",
            "session_name" => '4',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%204%2F03.%20Hash%20Table%20-%20Chaining%20-%20Searching%20and%20Deletion.mp4?alt=media&token=d6d379fc-214f-4b9b-a4e3-2802b3130dfa"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Binary Search Tree - Introdusction, Insertion, and Searching",
            "session_name" => '5',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%205%2F01.%20Binary%20Search%20Tree%20-%20Introduction%2C%20Insertion%2C%20and%20Searching.m4v?alt=media&token=f967b681-aa47-46b7-92d1-e1930689a627"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Binary Search Tree - Deletion Part 1",
            "session_name" => '6',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%206%2F01.%20Binary%20Search%20Tree%20-%20Deletion%20(Concept).mp4?alt=media&token=70e20a07-6b84-4fef-87d5-88f079ebda7c"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Binary Search Tree - Deletion Part 2",
            "session_name" => '6',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%206%2F02.%20Binary%20Search%20Tree%20-%20Deletion%20(Code).mp4?alt=media&token=68cce912-4ee3-4920-8ec1-6e01c167fe8b"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Binary Search Tree - Traversal Part 1",
            "session_name" => '6',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%206%2F03.%20Binary%20Search%20Tree%20-%20Traversal%20(Concept).mp4?alt=media&token=19fa80dc-de49-4c20-b174-0aa8980ae8e8"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Binary Search Tree - Traversal Part 2",
            "session_name" => '6',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%206%2F04.%20Binary%20Search%20Tree%20-%20Traversal%20(Code).mp4?alt=media&token=5d3b0c7d-1411-4bd9-8631-9e7471672879"
        ]);

        DB::table('videos')->insert([
            "video_title" => "AVL Tree - Insertion Part 1",
            "session_name" => '8',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%208%2F01.%20AVL%20Tree%20-%20Insertion%20(Part%201).m4v?alt=media&token=5042ac1b-77d4-4f70-9fee-a57d260a63e6"
        ]);

        DB::table('videos')->insert([
            "video_title" => "AVL Tree - Insertion Part 2",
            "session_name" => '8',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%208%2F02.%20AVL%20Tree%20-%20Insertion%20(Part%202).m4v?alt=media&token=d6e22855-40d0-42d5-9038-b0791d6c58de"
        ]);

        DB::table('videos')->insert([
            "video_title" => "AVL Tree - Insertion Part 3",
            "session_name" => '8',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%208%2F03.%20AVL%20Tree%20-%20Insertion%20(Part%203).m4v?alt=media&token=428ba61a-085e-4ac0-84fe-76f883182457"
        ]);

        DB::table('videos')->insert([
            "video_title" => "AVL Tree - Searching",
            "session_name" => '9',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%209%2F01.%20AVL%20Tree%20-%20Searching.mp4?alt=media&token=13d05308-9971-42d1-8216-6e822e2442e7"
        ]);

        DB::table('videos')->insert([
            "video_title" => "AVL Tree - Deletion",
            "session_name" => '9',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%209%2F02.%20AVL%20Tree%20-%20Deletion.mp4?alt=media&token=662a7fed-06e2-4005-bfcc-a9c5821c2f65"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Max Heap - Introduction",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%2010%2F01.%20Max%20Heap%20-%20Introduction.mp4?alt=media&token=37beff64-5d0a-4ba3-9598-9852039386f1"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Max Heap - Insertion",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%2010%2F02.%20Max%20Heap%20-%20Insertion.mp4?alt=media&token=5057d0b0-87a7-435c-bc94-29b727890756"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Max Heap - Extract",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%2010%2F03.%20Max%20Heap%20-%20Extract.mp4?alt=media&token=2c60a181-ba90-4c88-9c75-a8d9106531ae"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Min Heap Part 1",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%2010%2F01.%20Min%20Heap%20(Part%201).m4v?alt=media&token=97856a55-b25b-4b5d-bfc1-189771fac9f8"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Min Heap Part 2",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%2010%2F02.%20Min%20Heap%20(Part%202).m4v?alt=media&token=d7180b75-5256-4ed1-b091-4e423a16a2f7"
        ]);

        DB::table('videos')->insert([
            "video_title" => "Min Heap Part 3",
            "session_name" => '10',
            "video_type" => "VBL",
            "course_id" => "975b6b1a-e431-e611-903a-d8d385fce79e",
            "class_code" => "",
            "video_software_description" => "Dev C++",
            "video_file" => "https://firebasestorage.googleapis.com/v0/b/learningvideoapp.appspot.com/o/COMP6048%2Fsession%2010%2F03.%20Min%20Heap%20(Part%203).m4v?alt=media&token=274631e9-ff86-4f7d-b9e5-d01a0df5ad16"
        ]);
    }
}
