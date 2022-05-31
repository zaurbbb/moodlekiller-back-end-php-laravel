@extends('layouts.app')

@section('content')
    <div style="margin: 30px; padding-top: 5%">

        <div class="row">

            <!--PROFILE-->
            <div class="col-2">
                <br>
                <br>

                <div class="col-12 px-2">
                    <!--AVA-->
                    <div class="text-center">
                        @yield('ava')

                    </div>
                    <br>

                    <p class="fs-3 lead text-center" id="full_name">{{$name_surname}}</p>

                    <br>

                </div>
            </div>

            <!--USER DETAILS-->
            <div class="col-10 mt-3">
                <fieldset class="px-2 bg-body">
                    <legend class="float-none w-auto mx-sm-2 text-xl-start text-center">
                        {{$legend_text}}
                        <a href="#" role="button">
                            <i class="fa-solid fa-pencil" onclick="changeUserDetails()" style="color: black"></i></a>
                        <span id="user_hat"></span>
                    </legend>
                    <br>
                    <div id="user_details">
                        <p class="mx-3"><span id="description">{{$description}}</span></p>
                        <hr>
                        <div class="row d-flex">
                            @yield('profile_content')

                        </div>
                    </div>

                    <br>
                </fieldset>
            </div>

        </div>




    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
