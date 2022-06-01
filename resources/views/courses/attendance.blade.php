@extends('layouts.course_grade')

@section('buttons_status_attendance')
    active
@endsection

@section('grades_table')

    @if(count($trimesters) > 0)
        @foreach($trimesters as $trimester)

            <!-- TRIMAK-->
            <fieldset class="pt-2 mb-2">
                <legend  class="float-none w-auto mx-sm-2 text-xl-start text-center" >
                    {{$trimester}}
                </legend>
                <div class="px-3 table-responsive">
                    <table class="table table-hover table-sm flexible align-middle">
                        <thead>
                        <tr class="align-middle">
                            <th class="border-bottom custom-bottom">
                                <span class="mx-3">{{$field1}}</span>
                            </th>
                            <th class="text-center border-bottom custom-bottom">
                                <span>{{$field2}}</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

<<<<<<< HEAD
                        @foreach($courses as $course)
                            <tr>
                                <td>
                                    <a class="aa8 ms-3" href="/courses/{{$course['url']}}">{{$course['name']}}</a>
                                </td>
                                <td class="aa8 text-center">
                                    {{$course['attendance']}}%
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </fieldset>
        @endforeach
    @endif
=======
             @foreach($courses as $course)
                   <tr>
                       <td>
                           <a class="aa8 ms-3" href="/courses/{{$course['url']}}">{{$course['name']}}</a>
                       </td>
                       <td class="aa8 text-center">
                           {{$course['attendance']}}%
                       </td>
                   </tr>
               @endforeach
               </tbody>
           </table>
       </div>
   </fieldset>
@endforeach
@endif
>>>>>>> c6f55ba31efba73dcef394beb7b0ad7ef22c7e89

@endsection

