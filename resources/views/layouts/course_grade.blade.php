@extends('layouts.app')

@section('content')
    <div style="margin-top: 20px" class="row-fuiled">
        <ul class="nav nav-pills mx-3 my-2 justify-content-center" role="tablist">
            <li class="nav-item" >
                <a href="/courses/grades" class="nav-link @yield('buttons_status_grades')">
                    Courses
                </a>
            </li>
            <li class="nav-item" >
                <a href="/courses/attendance" class="nav-link @yield('buttons_status_attendance')">
                    Attendance
                </a>
            </li>
            <li class="nav-item" >
                <a href="/courses/schedule" class="nav-link @yield('buttons_status_schedule')">
                    Schedule
                </a>
            </li>
        </ul>
    </div>



        <!--TABLE-->
        <div class="container-fluid tab-pane fade show active mb-3" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    @yield('grades_table')
        </div>


@endsection()
