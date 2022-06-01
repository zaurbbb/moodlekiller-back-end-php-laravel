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
                    <a class="text-center" href="/add-image">
                        @yield('ava')

                    </a>
                    <br><br>

                    <p class="fs-3 lead text-center" id="full_name">
                        {{ Auth::user()->name }}
                    </p>

                    <br>

                </div>
            </div>

            <!--USER DETAILS-->
            <div class="col-10 mt-3">
                <fieldset class="px-2" style="background-color: transparent;!important;" >
                    <legend class="float-none w-auto mx-sm-2 text-xl-start text-center">
                        Some information aboout you
                        <a href="#" role="button">
                            <i class="fa-solid fa-pencil" onclick="pushUpMessage()" style="color: black"></i></a>
                        <span id="user_hat"></span>
                    </legend>
                    <br>
                    <div id="user_details" >
                        <p class="mx-3"><span id="description">{{ Auth::user()->description }}</span></p>
                        <hr>
                        <div class="row d-flex " >
<<<<<<< HEAD
                            @yield('profile_content')
=======
>>>>>>> c6f55ba31efba73dcef394beb7b0ad7ef22c7e89
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
@endsection
