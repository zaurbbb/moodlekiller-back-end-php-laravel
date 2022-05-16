@extends('layouts.app')

@section('content')

    <div class="container-fluid d-print-block mt-2">
    @guest

    @else
        <!-- Courses -->
            <fieldset class="py-3">
                <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                    {{$legend_trimester}}
                </legend>

                <div class="row d-flex justify-content-center">
                    it's gonna be seen with DataBase
                    {{--@foreach($courses as $course)
                        <div  class="col-lg-4 d-flex justify-content-center my-2 px-auto py-auto text-wrap">
                            <a class="btn btn-outline-secondary w-80" href="/courses/{{'/'}}">
                                {{$course['name']}}
                            </a>
                        </div>
                    @endforeach--}}
                </div>

            </fieldset>
    @endguest

    <!-- The main block -->
        <div class="row my-2 mb-4">

            <!-- Left side-->
            <div class="col-9 pe-lg-1 pe-auto" >

                <fieldset class="col-12 d-flex justify-content-center ">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        Announcements
                    </legend>

                    <!-- News block-->
                    <div class="col-12 px-3 py-3">

                        <!-- FIRST BLOCK (1course final)-->
                        <fieldset class="mb-3 py-2">
                            <!--TOP DIV-->
                            <div class="container-fluid">
                                <div class="mb-2 row  d-flex">
                                    <!--LOGO-->
                                    <div class="col-n1 d-none d-xxl-block text-center my-auto rounded-circle"
                                         style="background-image: url('https://sun9-87.userapi.com/impf/hXOHdjIZnTrEo3NNuK3aBII4CRy-NSUmTnDEsg/5Qb98pjhNLQ.jpg?size=640x640&quality=96&sign=919edb211f86f8a916b951165364ecd6&type=album'); background-size: 100%;
                              width: 35px; height: 35px; position:relative; top: 1px">
                                    </div>

                                    <!--TITLE-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mb-0 ">
                                            <span class="font-weight-bold">
                                                Final exams for the 1st course!
                                            </span>

                                        </span>

                                        <span class="h6 fw-normal mb-0">
                                         by <a class="link-primary" href="/profile/umar">Umar Musa</a>
                                         - Monday, 21 February 2022, 07:30 AM
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!--BOTTOM DIV-->
                            <div class=" container-fluid">
                                <div class="row d-flex">
                                    <!--NO LOGO-->
                                    <div class="col-n1 d-none d-xxl-block" style="
                                                                background-size: 100%;
                                                                width: 35px; height: 35px;">
                                    </div>

                                    <!--INFO-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mt-3 ">
                                          Final exams for the 1st course
                                          <span class="fw-normal">will be held from </span>
                                            28.02.2022 to 19.03.2022!
                                        </span>

                                        <span class="h6  mt-3 mb-2 fw-normal">
                                          The schedule is attached below:
                                        </span>

                                        <span class="h6 mb-4 ">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/529/3%20cours%28final%20examination%29.pdf?forcedownload=1">
                                              1 course - Final Examination.pdf
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <!-- SECOND BLOCK (2course final)-->
                        <fieldset class="mb-3 py-2">
                            <!--TOP DIV-->
                            <div class="container-fluid">
                                <div class="mb-2 row  d-flex">
                                    <!--LOGO-->
                                    <div class="col-n1 d-none d-xxl-block text-center my-auto rounded-circle"
                                         style="background-image: url('https://sun9-87.userapi.com/impf/hXOHdjIZnTrEo3NNuK3aBII4CRy-NSUmTnDEsg/5Qb98pjhNLQ.jpg?size=640x640&quality=96&sign=919edb211f86f8a916b951165364ecd6&type=album'); background-size: 100%;
                              width: 35px; height: 35px; position:relative; top: 1px">
                                    </div>

                                    <!--TITLE-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mb-0">
                                          <span class="font-weight-bold">
                                            Final exams for the 2nd course!
                                          </span>

                                        </span>
                                        <span class="h6 fw-normal mb-0">
                                          by <a class="link-primary" href="/profile/umar">Umar Musa</a>
                                          - Monday, 14 February 2022, 3:00 AM
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!--BOTTOM DIV-->
                            <div class=" container-fluid">
                                <div class="row d-flex">
                                    <!--NO LOGO-->
                                    <div class="col-n1 d-none d-xxl-block" style="
                                                                background-size: 100%;
                                                                width: 35px; height: 35px;">
                                    </div>

                                    <!--INFO-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mt-3 ">
                                          Final exams for the 2nd course
                                          <span class="fw-normal">will be held from </span>
                                           21.02.2022 to 05.03.2022!
                                        </span>

                                        <span class="h6  mt-3 mb-2 fw-normal">
                                          The schedule is attached below:
                                        </span>

                                        <span class="h6 mb-4 ">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/530/2%20course%20-%20DJ%2C%20ITM%2C%20TS%2C%20CS%2C%20SE.pdf?forcedownload=1">
                                              2 course - SE, MT, ITM, DJ, TS.pdf
                                            </a>
                                            <br>
                                            <i class="fa fa-file-pdf-o mt-2"></i>
                                            <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/530/2%20course%20-%20MT%2C%20IT%2C%20IA%2C%20BDA.pdf?forcedownload=1">
                                              2 course - CS, IT, IA, BDA.pdf
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <!--THIRD BLOCK  (3course final)-->
                        <fieldset class="mb-3 py-2">
                            <!--TOP DIV-->
                            <div class="container-fluid">
                                <div class="mb-2 row  d-flex">
                                    <!--LOGO-->
                                    <div class="col-n1 d-none d-xxl-block text-center my-auto rounded-circle"
                                         style="background-image: url('https://sun9-87.userapi.com/impf/hXOHdjIZnTrEo3NNuK3aBII4CRy-NSUmTnDEsg/5Qb98pjhNLQ.jpg?size=640x640&quality=96&sign=919edb211f86f8a916b951165364ecd6&type=album'); background-size: 100%;
                              width: 35px; height: 35px; position:relative; top: 1px">
                                    </div>

                                    <!--TITLE-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                    <span class="h6 mb-0 ">
                                        <span class="font-weight-bold">
                                          Final exams for the 3rd course!
                                        </span>

                                    </span>

                                    <span class="h6 fw-normal mb-0">
                                      by <a class="link-primary" href="/profile/umar">Umar Musa</a>
                                      - Monday, 7 February 2022, 4:30 AM
                                    </span>

                                    </div>
                                </div>
                            </div>

                            <!--BOTTOM DIV-->
                            <div class=" container-fluid">
                                <div class="row d-flex">
                                    <!--NO LOGO-->
                                    <div class="col-n1 d-none d-xxl-block" style="
                                                                background-size: 100%;
                                                                width: 35px; height: 35px;">
                                    </div>

                                    <!--INFO-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mt-3 ">
                                          Final exams for the 3rd course
                                          <span class="fw-normal">will be held from </span>
                                           21.02.2022 to 05.03.2022!
                                        </span>

                                        <span class="h6  mt-3 mb-2 fw-normal">
                                          The schedule is attached below:
                                        </span>

                                        <span class="h6 mb-4 ">
                                          <i class="fa fa-file-pdf-o"></i>
                                          <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/529/3%20cours%28final%20examination%29.pdf?forcedownload=1">
                                            3 course - Final Examination.pdf
                                          </a>

                                        </span>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <!--FOURTH BLOCK  (нирс конкурс)-->
                        <fieldset class="mb-3 py-2">
                            <!--TOP DIV-->
                            <div class="container-fluid">
                                <div class="mb-2 row  d-flex">
                                    <!--LOGO-->
                                    <div class="col-n1 d-none d-xxl-block text-center my-auto rounded-circle"
                                         style="background-image: url('https://sun9-86.userapi.com/impf/9aw3yqHezzRDVuzRzUjt82X392uilFoMsjX8PQ/ksc0TMcG1z0.jpg?size=640x640&quality=96&sign=a81f085956577d544f116610f90eb443&type=album'); background-size: 100%;
                              width: 35px; height: 35px; position:relative; top: 1px">
                                    </div>

                                    <!--TITLE-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mb-0 ">
                                          <span class="font-weight-bold">
                                            Конкурс научно исследовательских работ студентов AITU (НИРС)
                                          </span>

                                        </span>
                                        <span class="h6 fw-normal mb-0 ">
                                          by <a class="link-primary" href="/profile/akniet">Akniet Baibolat</a>
                                          - Tuesday, 25 January 2022, 5:20 AM
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!--BOTTOM DIV-->
                            <div class=" container-fluid">
                                <div class="row d-flex">
                                    <!--NO LOGO-->
                                    <div class="col-n1 d-none d-xxl-block" style="
                                                                background-size: 100%;
                                                                width: 35px; height: 35px;">
                                    </div>

                                    <!--INFO-->
                                    <div class="d-flex flex-column col-n11 my-auto ">
                                        <span class="h6 mt-3  fw-normal">
                                          Dear students!
                                        </span>

                                        <span class="h6  mt-3 mb-2 fw-normal">
                                          We would like to inform you about the НИРС AITU competition.
                                        </span>

                                        <span class="h6  mt-3 mb-2 fw-normal">
                                          The competition accepts research works of students in the direction of AITU educational programs.
                                        </span>

                                        <span class="h6  mt-3 mb-2 fw-normal">
                                          The works of the winners of the intra-university stage of the НИРС Competition are sent to the I stage of the republican НИРС competition in basic universities.
                                        </span>

                                        <span class="h6  mt-3 mb-2 fw-normal">
                                          Prize-winners of the Republican НИРС competition are awarded with diplomas of the Ministry of Education and Science of I, II, III degrees, they are given the opportunity to re-credit credits for the next trimester after consideration by the commission.
                                        </span>

                                        <span class="h6  mt-3 mb-4 fw-normal">
                                          Find a supervisor among teachers for yourself. Submission deadline: the 1st of March.
                                          <br><br>
                                          You can find out more here: <a href="https://astanait.edu.kz/2022/01/25/konkurs-nauchno-issledovatelskih-rabot/">НИРС AITU</a>
                                          <br><br>
                                          For more information, please contact the Department of Science and Innovation:
                                          <a href="mailto:zhansaya.makhambetova@astanait.edu.kz">Zhansaya Makhambetova</a>
                                        </span>

                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <!--FIFTH BLOCK (schedule который)-->
                        <fieldset class="mb-3 py-2">
                            <!--TOP DIV-->
                            <div class="container-fluid">
                                <div class="mb-2 row  d-flex">
                                    <!--LOGO-->
                                    <div class="col-n1 d-none d-xxl-block text-center my-auto rounded-circle"
                                         style="background-image: url('https://sun9-87.userapi.com/impf/hXOHdjIZnTrEo3NNuK3aBII4CRy-NSUmTnDEsg/5Qb98pjhNLQ.jpg?size=640x640&quality=96&sign=919edb211f86f8a916b951165364ecd6&type=album'); background-size: 100%;
                              width: 35px; height: 35px; position:relative; top: 1px">
                                    </div>

                                    <!--TITLE-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mb-0">
                                          <span class="font-weight-bold">
                                            The schedule for the 2nd trimester 2021-2022!
                                          </span>

                                        </span>
                                        <span class="h6 fw-normal mb-0">
                                          by <a class="link-primary" href="/profile/umar">Umar Musa</a>
                                          - Tuesday, 14 December 2022, 8:45 AM
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!--BOTTOM DIV-->
                            <div class=" container-fluid">
                                <div class="row d-flex">
                                    <!--NO LOGO-->
                                    <div class="col-n1 d-none d-xxl-block" style="
                                                                background-size: 100%;
                                                                width: 35px; height: 35px;">
                                    </div>

                                    <!--INFO-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mt-3 ">
                                          Dear students!
                                          <br>
                                          <br>
                                          <span class="fw-normal">The schedule for the 2nd trimester is attached below.</span>
                                        </span>

                                        <span class="h6 mt-3 mb-4 ">
                                            <i class="fa fa-file-pdf-o"></i>
                                            <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/516/1%20course%20BDA%2C%20IT%2C%20MT%2C%20SE%2C%20ITM.pdf?forcedownload=1">
                                               1 course - SE, IT, BDA, MT, ITM.pdf
                                            </a>
                                            <br>
                                            <i class="fa fa-file-pdf-o mt-2"></i>
                                            <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/516/1%20course%20IA%2C%20TS%2C%20ST%2C%20ITE%2C%20DJ%2C%20CS.pdf?forcedownload=1">
                                               1 course - CS, TS, ST, ITE, IA.pdf
                                            </a>
                                            <br>
                                            <i class="fa fa-file-pdf-o mt-2"></i>
                                            <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/516/2%20course%20BDA%2C%20CS%2C%20DJ%2C%20IA.pdf?forcedownload=1">
                                               2 course - SE, IT, TS, MT, ITM.pdf
                                            </a>
                                            <br>
                                            <i class="fa fa-file-pdf-o mt-2"></i>
                                            <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/516/2%20course%20BDA%2C%20CS%2C%20DJ%2C%20IA.pdf?forcedownload=1">
                                               2 course - CS, BDA, DJ, IA.pdf
                                            </a>
                                            <br>
                                            <i class="fa fa-file-pdf-o mt-2"></i>
                                            <a class="fw-normal ms-1" target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/5035/mod_forum/attachment/516/3%20course.pdf?forcedownload=1">
                                               3 course.pdf
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <!--SIXTH BLOCK (опрос студентов)-->
                        <fieldset class="mb-3 py-2">
                            <!--TOP DIV-->
                            <div class="container-fluid">
                                <div class="mb-2 row  d-flex">
                                    <!--LOGO-->
                                    <div class="col-n1 d-none d-xxl-block text-center my-auto rounded-circle"
                                         style="background-image: url('https://sun9-86.userapi.com/impf/9aw3yqHezzRDVuzRzUjt82X392uilFoMsjX8PQ/ksc0TMcG1z0.jpg?size=640x640&quality=96&sign=a81f085956577d544f116610f90eb443&type=album'); background-size: 100%;
                              width: 35px; height: 35px; position:relative; top: 1px">
                                    </div>

                                    <!--TITLE-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mb-0 ">
                                          <span class="font-weight-bold">
                                            Survey on the topic: "Analysis of student satisfaction"
                                          </span>

                                        </span>
                                        <span class="h6 fw-normal mb-0 ">
                                          by <a class="link-primary" href="/profile/akniet">Akniet Baibolat</a>
                                          - Monday, 6 December 2022, 12:15 PM
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!--BOTTOM DIV-->
                            <div class=" container-fluid">
                                <div class="row d-flex">
                                    <!--NO LOGO-->
                                    <div class="col-n1 d-none d-xxl-block" style="
                                                                background-size: 100%;
                                                                width: 35px; height: 35px;">
                                    </div>

                                    <!--INFO-->
                                    <div class="d-flex flex-column col-n11 my-auto">
                                        <span class="h6 mt-3 ">
                                          It's absolutely necessary to pass the survey - "Analysis of student satisfaction"
                                          <br><br>
                                          <span class="fw-normal">
                                            The purpose of this survey is to analyze the state of teaching subjects for the first trimester 2021-2022.
                                          </span>
                                          <br><br>
                                          <span class="fw-normal">
                                            It takes approximately 7-10 minutes to complete the survey.
                                          </span>
                                          <br><br>
                                          <span class="fw-normal">
                                            Deadline: 23.12.2021 until 6:00 PM
                                          </span>
                                        </span>

                                                            <span class="h6 mt-3 mb-4  fw-normal">
                                          Link to the survery for the 1st course students:
                                          <a class="fw-normal text-break" href="https://forms.gle/mapR6QYZEVyJNk2X6">https://forms.gle/mapR6QYZEVyJNk2X6</a>
                                          <br>
                                          <br>
                                          Link to the survery for the 2nd course students:
                                          <a class="fw-normal text-break" href="https://forms.gle/8TCTJQPu3wGM6KGeA">https://forms.gle/8TCTJQPu3wGM6KGeA</a>
                                          <br>
                                          <br>
                                          Link to the survery for the 3rd course students:
                                          <a class="fw-normal text-break" href="https://forms.gle/pdUWdmaUQWmbhP9a9">https://forms.gle/pdUWdmaUQWmbhP9a9</a>

                                        </span>
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </div>
                </fieldset>

            </div>

            <!--RIGHT SIDE-->
            <div class="col-3">
                <!-- DEADLINES BLOCK-->
                @guest

                @else

                    <fieldset class="mb-1">
                        <legend class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                            {{$legend_deadlines}}
                        </legend>

                        <div class="px-4 py-3 " >
                            it's gonna be seen with DataBase
                        {{--@foreach($courses as $course)

                            @if(count($deadlines) > 0)
                                @foreach($deadlines as $key => $deadline)
                                    <div class="row" onclick="pushUpMessage()" >
                                        <span class="col-12 text-primary">Monday, 21 February, 11:59 PM</span>
                                        <a href="#" type="button" >
                                            <div class="row">
                                                <div class="col-md-2 сol-sm-2 px-0 py-0 mx-0 d-none d-xxl-block">
                                            <span class="d-flex justify-content-center my-3">
                                                <img src="https://icon-library.com/images/file-icon-image/file-icon-image-5.jpg" style="height: 50px"/>
                                            </span>
                                                </div>

                                                <div class="col-md-10 сol-sm-10 justify-content-center my-auto ">
                                                    <h5 class="my-auto align-middle d-block fw-normal">{{$key}}</h5>
                                                    <h6 class="my-auto align-middle fw-normal d-block text-secondary">
                                                        {{$deadline}}</h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <hr>
                                @endforeach
                            @endif


                        </div>

                    </fieldset>
                    @endforeach--}}
                        </div>


                    </fieldset>
            @endguest
            <!--STUDENT'S HOT LINKS BLOCK-->
                <fieldset class=" @guest @else my-2 @endguest my-0">
                    <legend class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                        Student's Hot Links
                    </legend>
                    <div class="card-body px-4 py-3">
                        <div class="">
                            <a target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/24480/block_html/content/1%20%D0%BA%D1%83%D1%80%D1%81%20%D0%B0%D0%BD%D0%B3%D0%BB.pdf">
                                Academic Calendar 1 Course
                            </a>
                            <br>
                            <a target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/24480/block_html/content/2%20%D0%BA%D1%83%D1%80%D1%81%20%D0%B0%D0%BD%D0%B3%D0%BB.pdf">
                                Academic Calendar 2 Course
                            </a>
                            <br>
                            <a target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/24480/block_html/content/3%20%D0%BA%D1%83%D1%80%D1%81%20%D0%B0%D0%BD%D0%B3%D0%BB.pdf">
                                Academic Calendar 3 Course
                            </a>
                            <br>
                            <a target="_blank" href="https://moodle.astanait.edu.kz/pluginfile.php/24480/block_html/content/3%20%D0%BA%D1%83%D1%80%D1%81%20%D0%B0%D0%BD%D0%B3%D0%BB.pdf">
                                Academic Calendar Master's Degree 1 course
                            </a>
                            <br>
                            <a target="_blank" href="https://forms.office.com/Pages/ResponsePage.aspx?id=8xWPFeCDBkmCTGm9xQ2dYdQgqgpRMVJCgGvX6dIPF2JUNkVGTlFEUVVaSlE4TUIzNDVPUzZaQjlaTC4u">
                                Application to the Dean's office
                            </a>
                            <br>
                            <a target="_blank" href="http://abdigavu.beget.tech">
                                Enrollment verification letter request
                            </a>
                            <br>
                        </div>
                        <hr>
                        <div class="">
                            <span><a href="mailto:alexei.peresipkin@astanait.edu.kz">Аlexey Peresipkin</a> <br> Military department <br> Room – C1.3.336 </span>
                            <br>
                            <br>
                            <span><a href="mailto:arman.kenzhebekov@astanait.edu.kz">Arman Kenzhebekov</a> <br> Department of the students' affairs <br>Room – C1.2.245 </span>
                            <br>
                            <br>
                            <span><a href="mailto:aliya.koitanova@astanait.edu.kz">Aliya Koitanova</a>  <br>Head of the Register's office <br> Room – C1.1.273 </span>
                            <br>
                            <br>
                            <span><a href="mailto:moldir.berzhanova@astanait.edu.kz">Moldir Barzhanova</a> <br> Head of the Students Department<br> Room – C1.1.270  </span>
                            <br>
                        </div>
                        <hr>
                        <div class="">
                            <span><a href="mailto:d.yedilkhan@astanait.edu.kz">Didar Yedilkhan</a> <br> Coordinator of ICT program <br> Room – C1.1.266 </span>
                            <br>
                            <br>
                            <span><a href="mailto:zhibek.tleshova@astanait.edu.kz">Zhibek Tleshova</a> <br> Coordinator of English program <br>Room – C1.1.262 </span>
                            <br>
                            <br>
                            <span><a href="mailto:zhibek.tleshova@astanait.edu.kz">Yerzhan Baissalov</a>  <br> Coordinator of Math program<br> Room – C1.1.321  </span>
                            <br>
                            <br>
                            <span><a href="mailto:zhibek.tleshova@astanait.edu.kz">Nurbek Shayakhmetov</a> <br> Coordinator of GED program<br>  Room – C1.1.263 </span>
                            <br>
                        </div>

                    </div>

                </fieldset>
            </div>
        </div>

    </div>

    <audio id="sound" src="wind_sound.wav"></audio>

@endsection
