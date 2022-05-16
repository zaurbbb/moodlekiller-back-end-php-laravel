@extends('layouts.course_grade')

@section('grades_table')

            @if(count($trimesters) > 0)
                @foreach($trimesters as $trimester)
                    <div id="page" class="container-fluid d-print-block">
                        <!--TRIMAK-->
                        <fieldset class="pt-2 mb-2">
                            <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                                {{$trimester}}
                            </legend>

                            <div class="px-3 table-responsive">
                                <table class="table table-hover table-sm flexible align-middle">




                                    <tbody>
                                    @foreach($courses as $key => $course)
                                        @if($key == 'pc')
                                            <tr style="border-bottom: 1px solid white">
                                                <td>
                                                    <a class="ms-3" href="/courses/{{$key}}/grades">{{$course}}</a>
                                                </td>
                                                <td class="text-center">
                                                    {{$mark}}
                                                </td>
                                            </tr>
                                        @else
                                            <tr>
                                                <td>
                                                    <a class="ms-3" href="/courses/{{$key}}/grades">{{$course}}</a>
                                                </td>
                                                <td class="text-center">
                                                    {{$mark}}
                                                </td>
                                            </tr>
                                        @endif


                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </fieldset>
                    </div>
                @endforeach
            @endif

@endsection

