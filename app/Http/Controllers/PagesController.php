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
            'field2' => 'Grade',
            'mark' => '100.0%',
            'trimesters' => [
                '3rd trimester',
                '2nd trimester',
                '1st trimester',
            ],
            'courses' => [
                'english' => 'Professional English | Ainur Bakenova',
                'web2' => 'WEB Technologies 2 (Back End) | Yelaman Apushev',
                'ads' => 'Algorithms and Data Structures | Kyzyrkanov Abzal',
                'calculus' => 'Calculus 1 | Kassabek Dina',
                'codlab' => 'Coding Lab | Meruyert Nurgazy',
                'pc' => 'Physical Culture 3 | Askapov Sarzhan',
            ],
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
}
