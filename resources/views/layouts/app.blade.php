<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--Favicon-->
    <link id="favicon" rel="icon" type="image/x-icon" href="">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet" id="link">

    <script src="https://kit.fontawesome.com/05a12f98dd.js" crossorigin="anonymous"></script>

    <!--BOOTSTRAP5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



    <title id="title">MoodleKiller Back-End 3.0</title>

    <style>
        a{
            text-decoration: none;
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
            font-family: 'Montserrat', sans-serif;
        }
        tr, td{
            height: 50px;
            color: black;
        }
        table{
            width: 100%;
        }
        thead, th{
            font-weight: 600;

        }

        .col-n1 {width: 4%;}
        .col-n11 {width: 96%;}
        .w-85{width: 85%;}
        .w-40{width: 40%;}
        .col-1 {width: 8.33%;}
        .col-2 {width: 16.66%;}
        .col-3 {width: 25%;}
        .col-4 {width: 33.33%;}
        .col-5 {width: 41.66%;}
        .col-6 {width: 50%;}
        .col-7 {width: 58.33%;}
        .col-8 {width: 66.66%;}
        .col-9 {width: 75%;}
        .col-10 {width: 83.33%;}
        .col-11 {width: 91.66%;}
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

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
        html, body{
            width: 100%;
            height: 100%;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            position: relative;
            min-height: 100%;
        }
        .content {
            padding-bottom: 120px;
        }
        .footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
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
        .footerlink{
            color: white;
        }
        .footerlink:hover{
            color: #C0C0C0;
        }

        .navbar{
            padding: 5px 0;
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("https://moodle.astanait.edu.kz/pluginfile.php/48898/user/icon/boost/f2?rev=2110057");
            border-radius: 50px;
        }
        .custom-toggler.navbar-toggler {
            border: none;
        }
        .dropdown-menu {
            min-width: 50px;
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

        fieldset{
            background-color: transparent;
        }
        fieldset:hover{
            border-color: black;
        }
        .footer{
            background-color: #373a3c;
        }
        legend{
            color: #6c757d;
        }
        .courses_text {
            border: 1px solid #f8f9fa;
            background-color: #f8f9fa;
            color: black;
            border-radius: 5px;
            padding-left: 6px;
            padding-right: 6px;
            padding-bottom: 3px;
            transition: all 0.2s;
        }
        .courses_text:hover{
            border: 1px solid #f8f9fa;
            background-color: #0d6efd;
            color: white;
            transition: all 0.2s ;
        }
        #moodle_logo{
            width: 30px;
            height: 35px;
            content: url("https://moodle.astanait.edu.kz/pluginfile.php/1/core_admin/logocompact/100x100/1640173744/logo%20AITU%28imageonly%29.png");
        }
        .subj {
            transition: background-color 0.2s linear;
            border: 1px solid #6c757d;
            border-radius: 5px;
            padding: 6px;
            text-align: center;
            color: #6c757d;!important;
        }
        .subj:hover {
            background-color: #1177d1;
            transition: all 0.2s linear;
            color: white;
            border: 1px solid #1177d1;
        }
        tr td:first-child{
            width: 1300px;
        }
        tr:last-child td{
            border-bottom: none;
        }
        #favicon{
            content: url("");
        }
        .text{
            color: #1177d1;
        }


        .dark-mode{
            background-color: #273049;
            color: white;
        }
        .dark-mode a{
            color: #EF667D;
        }
        .dark-mode a:hover{
            color: #A53D4F;
        }
        .dark-mode .nav-link{
            color: white!important;
        }
        .dark-mode fieldset{
            border-color: #7C829E;
        }
        .dark-mode fieldset:hover{
            border-color: white;
        }
        .dark-mode .dropdown-menu{
            background-color: #273049!important;
            border-color: #7C829E;
        }
        .dark-mode .dropdown-divider{
            color: white;
        }
        .dark-mode .link-primary{
            color: #EF667D;
        }
        .dark-mode .link-primary:hover{
            color: #A53D4F;
        }
        .dark-mode legend{
            color: #B9AFB1;
        }
        .dark-mode .navbar-brand{
            color: white;
        }

        .dark-mode footer{
            background-color: #212738;
        }
        .dark-mode span{
            color: white;
            border-color: white;
        }
        .dark-mode td{
            color: white;
        }
        .dark-mode .courses_text {
            border: 1px solid #273049;
            background-color: #273049;
            color: white;
            border-radius: 5px;
            padding-bottom: 3px;
            transition: all 0.2s;
        }
        .dark-mode .courses_text:hover{
            background-color: #EF667D;
            color: #273049;
            transition: all 0.2s ;
        }
        .dark-mode #moodle_logo{
            content:url("https://i.ibb.co/R21LxRF/dark-logo.png");
        }
        .dark-mode .subj {
            transition: background-color 0.2s linear;
            border: 1px solid #7C829E;
            border-radius: 5px;
            padding: 6px;
            text-align: center;
            color: #7C829E;
        }
        .dark-mode .subj:hover {
            background-color: #EF667D;
            transition: all 0.2s linear;
            color: white;
            border: 1px solid #EF667D;
        }
        .dark-mode .dropdown-item:hover{
            background-color: #EF667D;
            color: #273049;
        }
        .dark-mode.nav-link {
            width: 100%;
        }
        .dark-mode .nav-link.active {
            background-color: #EF667D !important;
            border-radius: 5px;
            color: #273049 !important;
        }
        .dark-mode #favicon{
            content: url("");
        }
        .dark-mode #snackbar {
            background-color: #273049;
            color: white;
        }
        .dark-mode #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }
        .dark-mode #user_details{
            background-color: transparent;
        }
        .dark-mode .list-group-item{
            background-color: transparent!important;
            color: whitesmoke;
        }
        .dark-mode .text{
            color: #EF667D;
        }


    </style>

</head>
<body>
    @include('inc.navbar')

    <div class="wrapper">

        <div class="content">
            @yield('content')
        </div>


    @include('inc.footer')
    </div>

    <script id="script" type="text/javascript" src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script id="script" type="text/javascript" src="{{asset('js/script.js')}}"></script>

    <script>
        (function() {
            let onpageLoad = localStorage.getItem("theme") || "";
            let element = document.body;
            element.classList.add(onpageLoad);
            document.getElementById("theme").textContent =
                localStorage.getItem("theme") || "light";
        })();

        function themeToggle() {
            let element = document.body;
            element.classList.toggle("dark-mode");

            let theme = localStorage.getItem("theme");
            if (theme && theme === "dark-mode") {
                localStorage.setItem("theme", "");
                $('#favicon').attr('href', 'https://i.ibb.co/rs5z9tz/light-icon.png');

            } else {
                localStorage.setItem("theme", "dark-mode");
                $('#favicon').attr('href', 'https://i.ibb.co/D8r86Dk/light-icon.png');
            }

            document.getElementById("theme").textContent = localStorage.getItem("theme");
        }
    </script>
</body>
</html>
