<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function attendance(): string{
        $data = [
            'title' => 'Attendance',
            'field1' => 'Course name',
            'field2' => 'Attendance',

            'active_attendance_button' => 'active',
            'mark' => 'its gonna seen by database',
            'trimesters' => [
                '3rd trimester',
            ],
            //'trimestets' => Course::all()->toArray(),
            'courses' => Users::all()->toArray(),
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

    public function profile(): string{

        $data = [
            'title' => 'Your Profile',
            'name_surname' => 'Zaur Berdibekov',
            'description' => '17 y.o. Front-end Developer',
            'legend_text' => 'Status: common user',
            'email' => '777@mail.ru',
            'country' => '777@mail.ru',
            'information' => [
                'Email' => '777@mail.ru',
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
        return view('user')->with($data);
    }
}
