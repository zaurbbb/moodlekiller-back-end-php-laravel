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
