<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="https://kit.fontawesome.com/05a12f98dd.js" crossorigin="anonymous"></script>

    <!--BOOTSTRAP5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



    <title>MoodleKiller Back-End 3.0</title>

    <style>
        body{
            width: 100%;

            padding: 0;
        }

        /* width of webkit */
        ::-webkit-scrollbar {
            opacity: 0.5;
            width: 5px;
        }

        /* background of weblit's place */
        ::-webkit-scrollbar-track{
            opacity: 0.5;
            background: #f1f1f1;
        }

        /* if don't mouse on to webkit */
        ::-webkit-scrollbar-thumb {
            background: #C0C0C0;
        }

        /* hover effect*/
        ::-webkit-scrollbar-thumb:hover {
            opacity: 1;
            background: #6495ED;
        }

        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
            color: #191970;
        }
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}

        .col-12 {width: 100%;}
        [class*="col-"] {
            float: left;
        }
        @media only screen and (max-width: 1200px) {
            /* For mobile phones: */
            [class*="col-"] {
                width: 100%;
            }
        }

        @media only screen and (max-width: 1000px) {
            /* For mobile phones: */
            [class*="table-"] {
                overflow-x: scroll;
                white-space: nowrap; /* Запрещаем перенос строк */
            }
        }

        fieldset{
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }
        legend{
            width:inherit;
            padding:0 10px;
            border-bottom:none;
            float: none;
            margin-bottom: -10px;
            font-size: 14px;
            border-right: 5px;
            color: #6c757d;
            font-family: 'Montserrat', sans-serif;
        }

        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color:white;
            text-align: center;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
            border-radius: 5px;
            color: black;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>

</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row justify-content-center position-absolute top-50 start-50 translate-middle">
            <div class="col-12 justify-content-center">
                <div class="row">
                    <div class="col-12 text-center text-wrap">
                        <img src="https://raw.githubusercontent.com/zaurbbb/m00dlekiller-front-end/main/images/gifaitu.gif" height="160" width="160">
                        <img src="https://raw.githubusercontent.com/zaurbbb/m00dlekiller-front-end/main/images/aitu.png">
                    </div>
                </div>
            </div>

            <div class="col-6 mt-5">
                @csrf
                <div class="row">

                    <div class="col-md-12 mb-4" style="min-width: 300px">
                        <input placeholder="Email" id="email" type="email" class="text-center form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class= "col-md-12 mb-4" style="min-width: 300px">
                        <input placeholder="Password" id="password" type="password" class="text-center form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="row justify-content-center ">

                    <div class="col-6 text-center">
                        @if (Route::has('password.request'))
                            <a class="link-primary " href="{{ route('password.request') }}">
                                Forgot password!
                            </a>
                        @endif
                    </div>

                    <div class="col-6">
                        <center>
                        <div class="form-check justify-content-center text-center">

                            <input class="form-check-input" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="">
                                Remember me
                            </label>
                        </div>

                        </center>

                    </div>

                </div>
                <hr>

                <div class="row d-flex justify-content-center text-center">
                    <a class="col-12" href="{{route('register')}}">or Register New Account</a>
                    <div class="col-6 mx-auto my-auto px-auto py-auto mt-3">
                        <a role="button" href="/" class="btn btn-outline-dark">Log in as a guest</a>
                    </div>

                    <div class="col-6 mx-auto my-auto px-auto py-auto mt-3">
                        <button role="button" type="submit" class="btn btn-outline-dark">Log in via account</button>
                    </div>


                </div>
            </div>
        </div>
    </form>

</body>
