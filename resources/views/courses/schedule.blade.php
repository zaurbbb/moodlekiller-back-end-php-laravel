@extends('layouts.course_grade')

@section('buttons_status_schedule')
    active
@endsection

@section('grades_table')
    <style>
        td{
            width: 200px!important;
        }
    </style>
    <div id="page" class="fff container-fluid d-print-block">
        <!--SСhEdUlE-->
        <fieldset class="pt-2 mb-2">
            <legend id="course" class=" float-none w-auto mx-sm-2 text-xl-start text-center" >
                {{$legend}}
            </legend>

            <div class="px-4 py-3 table-responsive" >
                <table class="table table-bordered table-hover rounder-3 text-center align-middle">
                    <thead style="border-top: 1px solid transparent">
                    <tr>
                        <td style="border-left: 1px solid transparent; ">
                            Day of the week
                        </td>

                        <td>
                            Time
                        </td>

                        <td>
                            Discipline
                        </td>

                        <td>
                            Classromm
                        </td>

                        <td>
                            Type
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Lecturer
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <!--Monday-->
                    <tr>
                        <td rowspan="2" style="border-left: 1px solid transparent; ">
                            Monday
                        </td>

                        <td>
                            14:00 - 14:50
                        </td>

                        <td>
                            Foreign Language 2 (English)
                        </td>

                        <td>
                            C1.1.252L
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Assel Salkenova
                        </td>
                    </tr>
                    <tr>
                        <td>
                            15:00 - 14:50
                        </td>

                        <td>
                            Foreign Language 2 (English)
                        </td>

                        <td>
                            C1.1.252L
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Assel Salkenova
                        </td>
                    </tr>

                    <!--Tuesday-->
                    <tr>
                        <td rowspan="4" style="border-left: 1px solid transparent; ">
                            Tuesday
                        </td>

                        <td>
                            08:30 - 09:20
                        </td>

                        <td>
                            Discrete Mathematics
                        </td>

                        <td>
                            C1.1.227P
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Zhalgas Aidana
                        </td>
                    </tr>
                    <tr>
                        <td>
                            09:30 - 10:20
                        </td>

                        <td>
                            Discrete Mathematics
                        </td>

                        <td>
                            C1.1.227P
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Zhalgas Aidana
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11:40 - 12:30
                        </td>

                        <td>
                            Discrete Mathematics
                        </td>

                        <td>
                            online
                        </td>

                        <td>
                            lecture
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Baisalov Yerzhan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            12:40 - 13:30
                        </td>

                        <td>
                            Physical Culture
                        </td>

                        <td>
                            online
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Askapov Sarzhan
                        </td>
                    </tr>

                    <!--Wednesday-->
                    <tr>
                        <td rowspan="5" style="border-left: 1px solid transparent; ">
                            Wednesday
                        </td>

                        <td>
                            09:30 - 10:20
                        </td>

                        <td>
                            Modern History of Kazakhstan
                        </td>

                        <td>
                            online
                        </td>

                        <td>
                            lecture
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Auzhanova Assel
                        </td>
                    </tr>
                    <tr>
                        <td>
                            10:40 - 11:30
                        </td>

                        <td>
                            Modern History of Kazakhstan
                        </td>

                        <td>
                            online
                        </td>

                        <td>
                            lecture
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Auzhanova Assel
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11:40 - 12:30
                        </td>

                        <td>
                            Object-Oriented Programming (Java)
                        </td>

                        <td>
                            C1.1.348K
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Aimukhambetov Olzhas
                        </td>
                    </tr>
                    <tr>
                        <td>
                            15:00 - 15:50
                        </td>

                        <td>
                            WEB Technologies 1 (Front End)
                        </td>

                        <td>
                            C1.1.357K
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Yegemberdiyeva Gulzhan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            16:10 - 17:00
                        </td>

                        <td>
                            WEB Technologies 1 (Front End)
                        </td>

                        <td>
                            C1.1.357K
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Yegemberdiyeva Gulzhan
                        </td>
                    </tr>

                    <!--Thursday-->
                    <tr>
                        <td rowspan="6" style="border-left: 1px solid transparent; ">
                            Thursday
                        </td>

                        <td>
                            08:30 - 09:20
                        </td>

                        <td>
                            Object-Oriented Programming (Java)
                        </td>

                        <td>
                            C1.1.348K
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Aimukhambetov Olzhas
                        </td>
                    </tr>
                    <tr>
                        <td>
                            09:30 - 10:20
                        </td>

                        <td>
                            Object-Oriented Programming (Java)
                        </td>

                        <td>
                            C1.1.348K
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Aimukhambetov Olzhas
                        </td>
                    </tr>
                    <tr>
                        <td>
                            10:40 - 11:30
                        </td>

                        <td>
                            WEB Technologies 1 (Front End)
                        </td>

                        <td>
                            C1.1.357K
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Yegemberdiyeva Gulzhan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11:40 - 12:30
                        </td>

                        <td>
                            Modern History of Kazakhstan
                        </td>

                        <td>
                            C1.1.350P
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Mamytova Saule
                        </td>
                    </tr>
                    <tr>
                        <td>
                            12:40 - 13:30
                        </td>

                        <td>
                            Modern History of Kazakhstan
                        </td>

                        <td>
                            C1.1.350P
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Mamytova Saule
                        </td>
                    </tr>
                    <tr>
                        <td>
                            14:00 - 14:50
                        </td>

                        <td>
                            Physical Culture
                        </td>

                        <td>
                            gym
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Askapov Sarzhan
                        </td>
                    </tr>

                    <!--Friday-->
                    <tr>
                        <td rowspan="5" style="border-left: 1px solid transparent; ">
                            Thursday
                        </td>

                        <td>
                            08:30 - 09:20
                        </td>

                        <td>
                            Object-Oriented Programming (Java)
                        </td>

                        <td>
                            C1.1.348K
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Aimukhambetov Olzhas
                        </td>
                    </tr>
                    <tr>
                        <td>
                            09:30 - 10:20
                        </td>

                        <td>
                            Object-Oriented Programming (Java)
                        </td>

                        <td>
                            C1.1.348K
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Aimukhambetov Olzhas
                        </td>
                    </tr>
                    <tr>
                        <td>
                            10:40 - 11:30
                        </td>

                        <td>
                            Discrete Mathematics
                        </td>

                        <td>
                            online
                        </td>

                        <td>
                            lecture
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Baisalov Yerzhan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            11:40 - 12:30
                        </td>

                        <td>
                            Discrete Mathematics
                        </td>

                        <td>
                            online
                        </td>

                        <td>
                            lecture
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Baisalov Yerzhan
                        </td>
                    </tr>
                    <tr>
                        <td>
                            15:00 - 15:50
                        </td>

                        <td>
                            Foreign Language 2 (English)
                        </td>

                        <td>
                            C1.1.251L
                        </td>

                        <td>
                            practice
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Assel Salkenova
                        </td>
                    </tr>

                    <!--Sunday-->
                    <tr style="border-bottom: 1px solid transparent; ">
                        <td rowspan="1" style="border-left: 1px solid transparent; ">
                            Sunday
                        </td>

                        <td>
                            08:30 - 09:20
                        </td>

                        <td>
                            Modern History of Kazakhstan
                        </td>

                        <td>
                            online
                        </td>

                        <td>
                            lecture
                        </td>

                        <td style="border-right: 1px solid transparent; ">
                            Auzhanova Assel
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </fieldset>

    </div>

@endsection
