<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\User;
class PagesController extends Controller
{
    public function index()
    {
        $data = [
            'legend_trimester' => '3rd trimester',
            'legend_news' => 'Announcements',
            'legend_deadlines' => 'Upcoming deadlines',
            'title' => 'MoodleKiller',
            'deadlines' => 'a',//Deadline::all()->toArray(),
            'courses' => Course::all()->toArray(),
            'news' => [
                'English',
                'WEB2',
                'ADS',
                'CodLAB',
                'Physical Culture',
            ],
        ];


        return view('welcome')->with($data);

    }

    public function grades(){
        $data = [
            'title' => 'Grades',
            'field1' => 'Course name',
            'field2' => 'Grade',

            'active_attendance_button' => 'active',
            'mark' => 'its gonna seen by database',
            'trimesters' => [
                '3rd trimester',
            ],
            //'trimestets' => Course::all()->toArray(),
            'courses' => Course::all()->toArray(),
        ];
        return view('courses.grades')->with($data);
    }

    public function attendance(){
        $data = [
            'title' => 'Grades',
            'field1' => 'Course name',
            'field2' => 'Grade',

            'active_attendance_button' => 'active',
            'mark' => 'its gonna seen by database',
            'trimesters' => [
                '3rd trimester',
            ],
            //'trimestets' => Course::all()->toArray(),
            'courses' => Course::all()->toArray(),
        ];
        return view('courses.attendance')->with($data);
    }

    public function schedule(): string{
        $data = [
            'title' => 'Schedule',
            'legend' => 'Your group: SE-2109'
        ];
        return view('courses.schedule')->with($data);
    }

    public function pro(){

        $data = [
            $users = DB::select('select * from users'),
            'title' => 'Your Profile',
        ];
        return view('user',['users'=>$users])->with($data);
    }

    public function info(){

        $data = [
            'title' => 'About us ',
            'fullname1' => 'Zaur Berdibekov',
            'name1' => 'zaur',
            'role1' => 'Full-Stack Developer',
            'img1' => 'https://sun1.dataix-kz-akkol.userapi.com/impf/NYufKyTh6AuOfLACl_1DwNesXxPUfGY3LYLD_w/6BnbfWEjFAY.jpg?size=640x640&quality=96&sign=8e4368ad7dfa34e4c66dd716c90eb4a4&type=album',

            'fullname2' => 'Umar Musa',
            'name2' => 'umar',
            'role2' => 'Mobile & Back-end Developer',
            'img2' => 'https://sun9-87.userapi.com/impf/hXOHdjIZnTrEo3NNuK3aBII4CRy-NSUmTnDEsg/5Qb98pjhNLQ.jpg?size=640x640&quality=96&sign=919edb211f86f8a916b951165364ecd6&type=album',

            'fullname3' => 'Akniet Baibolat',
            'name3' => 'akniet',
            'role3' => 'UX/UI Designer',
            'img3' => 'https://sun9-86.userapi.com/impf/9aw3yqHezzRDVuzRzUjt82X392uilFoMsjX8PQ/ksc0TMcG1z0.jpg?size=640x640&quality=96&sign=a81f085956577d544f116610f90eb443&type=album',

        ];
        return view('info')->with($data);
    }

// - attendance: https://moodle.astanait.edu.kz/theme/image.php/boost/attendance/1649144700/icon
// - assignment: https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon
// - test/mcq: https://moodle.astanait.edu.kz/theme/image.php/boost/quiz/1649144700/icon
// - link to the course: https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon
// - pdf lecture: https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24
// folder with lectures: https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon
// PPTX FILE : https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24


    public function professional_english(){


        $data = [
            'course_name' => 'english',
            'about_subject' => 'Professional English | Ainur Bakenova',
            'main_block' => [

            ],
            'first_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 1. The Internet',
            ],
            'second_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 2.  Software Development',
            ],
            'third_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 3. ICT in education',
            ],
            'fourth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 4. E-commerce and government.',
            ],
            'fifth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 5. Midterm',
            ],
            'sixth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 6. Human-computer interaction',
            ],
            'seventh_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 7.Computing and ethics',
            ],
            'eighth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 8. ICT in the future',
            ],
            'nineth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 9. ICT in the workplace',
            ],
            'tenth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/folder/1649144700/icon' => 'Week 10. Endterm',
            ],
        ];

        return view('list.professional_english')->with($data);
    }
    public function web_technologies_2(){


        $data = [
            'course_name' => 'web2',
            'about_subject' => 'WEB Technologies 2 (Back End) | Yelaman Apushev',
            'main_block' => [

            ],
            'first_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #1',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Presentation. Setting up development environment'
            ],
            'second_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #2',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Introduction into Laravel. Routing, blade components'
            ],
            'third_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #3',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/quiz/1649144700/icon' => 'Quiz #1',
            ],
            'fourth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #4',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Application programming interface'
            ],
            'fifth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Midterm Project',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/quiz/1649144700/icon' => 'Midterm Quiz',
            ],
            'sixth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Databases',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #5',
            ],
            'seventh_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #6',
            ],
            'eighth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #7',
            ],
            'nineth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Git',
            ],
            'tenth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/quiz/1649144700/icon' => 'Endterm Quiz',
            ],
        ];

        return view('list.web_technologies_2')->with($data);
    }
    public function web2_grades(){
        $data = [
            'title' => 'MoodleKiller',
            'about_subject' => 'MoodleKiller',
            'course_name' => 'MoodleKiller',
            'marks' => Course::all()->toArray(),
        ];



        return view('web2_grades')->with($data);
    }

    public function algorithms_and_data_structures(): string{

        $data = [
            'title' => 'MoodleKiller',
            'course_name' => 'ads',
            'about_subject' => 'Algorithms and Data Structures | Kyzyrkanov Abzal',
            'main_block' => [

            ],
            'first_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #1',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #1 — Hackerrank',
            ],
            'second_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #2',
            ],
            'third_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #3',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #2 — Hackerrank',
            ],
            'fourth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #4',

            ],
            'fifth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #5',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Midterm — Hackerrank',
            ],
            'sixth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #6',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #3 — Hackerrank',
            ],
            'seventh_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #7',
            ],
            'eighth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #8',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Assignment #4 — Hackerrank',
            ],
            'nineth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #9',

            ],
            'tenth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Lecture #10',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Endterm — Hackerrank',
            ],
        ];

        return view('list.algorithms_and_data_structures')->with($data);
    }
    public function ads_grades(): string{

        $data = [
            'title' => 'MoodleKiller',
            'course_name' => 'ads',
            'about_subject' => 'Algorithms and Data Structures | Kyzyrkanov Abzal'
        ];

        return view('pages.list.ads_grades')->with($data);
    }

    public function calculus_1(): string{

        $data = [
            'title' => 'MoodleKiller',
            'course_name' => 'calculus',
            'about_subject' => 'Calculus 1 | Kassabek Dina',
            'main_block' => [
                ' https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Syllabus'
            ],
            'first_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #1',
            ],
            'second_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #2',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Homework #1',
            ],
            'third_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #3',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Quiz #1 (Written Exam)',
            ],
            'fourth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #4',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Homework #2',
            ],
            'fifth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #5',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Midterm (Written Exam)',
            ],
            'sixth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #6',
            ],
            'seventh_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #7',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Homework #3',
            ],
            'eighth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #8',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Quiz #2 (Written Exam)',
            ],
            'nineth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #9',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Homework #4',
            ],
            'tenth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/powerpoint-24' => 'Lecture #10',
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Endterm (Written Exam)',
            ],
        ];

        return view('list.calculus_1')->with($data);
    }
    public function calculus_grades(): string{

        $data = [
            'title' => 'MoodleKiller',
            'course_name' => 'calculus',
            'about_subject' => 'Calculus 1 | Kassabek Dina'
        ];

        return view('pages.list.cal_grades')->with($data);
    }


    public function coding_lab(): string{

        $data = [
            'title' => 'MoodleKiller',
            'course_name' => 'codlab',
            'about_subject' => 'Coding Lab | Meruyert Nurgazy',
            'main_block' => [

            ],
            'first_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #1',
            ],
            'second_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #2'
            ],
            'third_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #3'
            ],
            'fourth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #4'
            ],
            'fifth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #5'
            ],
            'sixth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #6'
            ],
            'seventh_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #7'
            ],
            'eighth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #8'
            ],
            'nineth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #9'
            ],
            'tenth_week' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon' => 'Milestone #10'
            ],
        ];

        return view('list.coding_lab')->with($data);
    }
    public function codlab_grades(): string{

        $data = [
            'title' => 'MoodleKiller',
            'course_name' => 'codlab',
            'about_subject' => 'Coding Lab | Meruyert Nurgazy'
        ];

        return view('pages.list.codlab_grades')->with($data);
    }

    public function physical_culture_3(): string{

        $data = [
            'title' => 'MoodleKiller',
            'course_name' => 'pc',
            'about_subject' => 'Physical Culture 3 | Askapov Sarzhan',
            'main_block' => [
                'https://moodle.astanait.edu.kz/theme/image.php/boost/core/1649144700/f/pdf-24' => 'Syllabus'
            ],
            'first_week' => [

            ],
            'second_week' => [

            ],
            'third_week' => [

            ],
            'fourth_week' => [

            ],
            'fifth_week' => [

            ],
            'sixth_week' => [

            ],
            'seventh_week' => [

            ],
            'eighth_week' => [

            ],
            'nineth_week' => [

            ],
            'tenth_week' => [

            ],
        ];

        return view('list.physical_culture_3')->with($data);
    }
    public function pc_grades(): string{

        $data = [
            'title' => 'MoodleKiller',
            'course_name' => 'pc',
            'about_subject' => 'Physical Culture 3 | Askapov Sarzhan'
        ];

        return view('pages.list.pc_grades')->with($data);
    }

}
