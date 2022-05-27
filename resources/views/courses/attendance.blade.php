@extends('moodlekiller-new.resources.views.layouts.courses_button')

@section('buttons_status_attendance')
    active
@endsection

@section('pages_table')

    @if(count($trimesters) > 0)
        @foreach($trimesters as $trimester)
            <div id="page" class="container-fluid d-print-block">
                <fieldset class="pt-2 mb-2">
                    <legend id="course" class="float-none w-auto mx-sm-2 text-xl-start text-center" >
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
                            @foreach($courses as $key => $course)
                                <tr>
                                    <td>
                                        <a class="ms-3" href="/courses/{{$key}}">{{$course}}</a>
                                    </td>
                                    <td class="text-center">
                                        {{$mark}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </fieldset>
            </div>
        @endforeach
    @endif

@endsection
