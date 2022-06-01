<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
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
            'courses' => Course::all()->toArray(),
            'news' => [
                'English',
                'WEB2',
                'ADS',
                'CodLAB',
                'Physical Culture',
            ],
            'deadlines' => [
                'Homework #2' => 'Calculus 1 | Kassabek Dina',
                'Assignment #2' => 'Algorithms and Data Structures | Kyzyrkanov Abzal',
                'Assignment #3' => 'Coding Lab | Meruyert Nurgazy',
                'Assignment #4' => 'WEB Technologies 2 (Back End) | Yelaman Apushev',
            ]
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

    public function profile(){

        $data = [
            $users = DB::select('select * from users'),
            'title' => 'Your Profile',
            'description' => '17 y.o. Front-end Developer',
            'legend_text' => 'Some information about you',
            'email' => '777@mail.ru',
            'country' => '777@mail.ru',
            'information' => [
                'Email' => 'a',
                'Major' => 'Software Engineering',
                'Group' => 'SE-2109',
                'Age' => '17',
                'Gender' => 'Male',
            ],
            'information1' => [
                'VKontakte' => 'https://vk.com/lagmazavr',
                'Instagram' => 'https://www.instagram.com/lagmazavr/',
                'Telegram' => 'https://t.me/lagmazavr',
                'LinkedIn' => 'https://www.linkedin.com/in/zaur-berdibekov-b0b921235/',
                'GitHub' => 'https://github.com/zaurbbb',
            ],
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
}
