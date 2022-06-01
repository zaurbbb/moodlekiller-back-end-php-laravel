@extends('layouts.app')

@section('content')
    <style>
        .images{
            height: 100px;
            width: 100px;
        }
        fieldset{
            border: none;
        }
    </style>
    <br>
    <div style="margin: 30px;">

        <div class="row " style="  display: flex;
                                   align-items: center;
                                    justify-content: center">

            <!--PROFILE-->
            <div class="col-6">
                <br>
                <br>

                <div class="col-12 px-2 ">
                    <!--google maps api-->
                    <div class="text-center py-auto mx-auto">
                        <iframe width="500"
                                height="500"
                                style="margin-top: -40px;"
                                loading="lazy"
                                allowfullscreen
                                src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJBVZSBaaFRUIRflb3cxlK_00&key=
                                AIzaSyCkWqkS3TCxqPgzNO1fq6F_xDqxEmJNBpM"></iframe>


                    </div>
                </div>
            </div>

            <!--USER DETAILS-->
            <div class="col-5 float-right">
                <fieldset class="px-2 py-2 mb-5">
                    <div id="user_details">
                        <div class="row d-flex text-center">
                            <div class="col-3">
                                <img class="images rounded border" src="{{$img1}}" style="z-index: 1" >
                            </div>
                            <div class="col-8 pt-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex"><a>{{$fullname1}}</a></li>
                                    <li class="list-group-item d-flex">{{$role1}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="px-2 py-2 mb-5">
                    <div id="user_details">
                        <div class="row d-flex text-center">
                            <div class="col-3">
                                <img class="images rounded border" src="{{$img2}}" style="z-index: 1" >
                            </div>
                            <div class="col-8 pt-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex"><a>{{$fullname2}}</a></li>
                                    <li class="list-group-item d-flex">{{$role2}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="px-2 py-2 mb-5">
                    <div id="user_details">
                        <div class="row d-flex text-center">
                            <div class="col-3">
                                <img class="images rounded border" src="{{$img3}}" style="z-index: 1" >
                            </div>
                            <div class="col-8 pt-2">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex"><a>{{$fullname3}}</a></li>
                                    <li class="list-group-item d-flex">{{$role3}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>



        </div>




    </div>
    <br>
@endsection
