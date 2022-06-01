@extends('layouts.app')

@section('content')
    <div id="page" class="container-fluid d-print-block mb-3 mt-3">
        <fieldset class="py-2 text-center px-5    ">
            <span style="font-size: 40px; font-weight: 300">{{$about_subject}}</span>
            <div style="" class="row-fuiled">
                <ul class="nav nav-pills mx-2 my-2 justify-content-center" role="tablist">
                    <li class="nav-item" >
                        <a href="/courses/{{$course_name}}" class="nav-link @yield('buttons_status_overview_of_course')">
                            Overview of course
                        </a>
                    </li>
                    <li class="nav-item" >
                        <a href="#" class="nav-link" onclick="pushUpMessage()">
                            User Report
                        </a>
                    </li>
                </ul>
            </div>
        </fieldset>


    </div>

    <div class="mb-3">

        <!--TABLE-->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        Main Block
                    </legend>
                    <div class="row px-5 py-1">
                        <div class="col-12 my-1">
                            <a href="" onclick="pushUpMessage()">
                                <img src="https://moodle.astanait.edu.kz/theme/image.php/boost/attendance/1649144700/icon" alt="">
                                Attendance
                            </a>
                        </div><br>
                        <div class="col-12 my-1">
                            <a href=""  onclick="pushUpMessage()">
                            <img src="https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon" alt="">
                            Midterm
                            </a>
                        </div><br>
                        <div class="col-12 my-1">
                            <a href=""  onclick="pushUpMessage()">
                            <img src="https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon" alt="">
                            Endterm
                            </a>
                        </div><br>
                        <div class="col-12 my-1">
                            <a href=""  onclick="pushUpMessage()">
                            <img src="https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon" alt="">
                            Final Exam
                            </a>
                        </div><br>
                        <div class="col-12 my-1">
                            <a href=""  onclick="pushUpMessage()">
                            <img src="https://moodle.astanait.edu.kz/theme/image.php/boost/quiz/1649144700/icon" alt="">
                            Final Test
                            </a>
                        </div><br>
                        @if(count($main_block) > 0)
                            @foreach($main_block as $img => $item)
                                <div class="col-12 my-1">
                                    <a class=""  onclick="pushUpMessage()">
                                        <img src="https://moodle.astanait.edu.kz/theme/image.php/boost/assign/1649144700/icon">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    @yield('Main Block')
                    </div>
                </fieldset>
            </div>
        </div>
        <div class="tab-pane fade show active">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        1st Week
                    </legend>
                    <div class="row px-5">
                        @if(count($first_week) > 0)
                            @foreach($first_week as $img => $item)
                                <div class="col-12 my-2">
                                    <a class=""  onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('1st Week')
                    </div>

                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        2nd Week
                    </legend>
                    <div class="row px-5">
                        @if(count($second_week) > 0)
                            @foreach($second_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class=""  onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('2nd Week')
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        3rd Week
                    </legend>
                    <div class="row px-5">
                        @if(count($third_week) > 0)
                            @foreach($third_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class=""  onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('3rd Week')
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        4th Week
                    </legend>
                    <div class="row px-5">
                        @if(count($fourth_week) > 0)
                            @foreach($fourth_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class=""  onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('4th Week')
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        5th Week
                    </legend>
                    <div class="row px-5">
                        @if(count($fifth_week) > 0)
                            @foreach($fifth_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class=""  onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('5th Week')
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        6th Week
                    </legend>
                    <div class="row px-5">
                        @if(count($sixth_week) > 0)
                            @foreach($sixth_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class=""  onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('6th Week')
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        7th Week
                    </legend>
                    <div class="row px-5">
                        @if(count($seventh_week) > 0)
                            @foreach($seventh_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class="" onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('7th Week')
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        8th Week
                    </legend>
                    <div class="row px-5">
                        @if(count($eighth_week) > 0)
                            @foreach($eighth_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class="" onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('8th Week')
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        9th Week
                    </legend>
                    <div class="row px-5">
                        @if(count($nineth_week) > 0)
                            @foreach($nineth_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class="" onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('9th Week')
                    </div>
                </fieldset>
            </div>
        </div>

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="page" class="container-fluid d-print-block mb-3 mt-3">
                <fieldset class="py-3">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        10th Week
                    </legend>
                    <div class="row px-5">
                        @if(count($tenth_week) > 0)
                            @foreach($tenth_week as $img => $item)
                                <div class="col-12 my-1">
                                    <a class="" onclick="pushUpMessage()">
                                        <img src="{{$img}}">
                                        {{$item}}
                                    </a>
                                </div>
                            @endforeach
                        @endif
                        @yield('10th Week')
                    </div>
                </fieldset>
            </div>
        </div>

    </div>

    {{--@if(count($courses) > 0)
                        @foreach($courses as $key => $course)
                            <div  class="col-lg-4 d-flex justify-content-center my-2 px-auto py-auto text-wrap">
                                <a class="btn btn-outline-secondary w-80" href="/courses/{{$key}}">
                                    {{$course}}
                                </a>
                            </div>
                        @endforeach
                    @endif--}}

@endsection()
