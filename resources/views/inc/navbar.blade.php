<div id="app">
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
        <div class="container-fluid">

            @guest

            @else
                <a class="navbar-item ms-2 me-0 my-auto" href="/courses/grades">
                    <button class="courses_text">
                        Courses
                    </button>
                </a>
            @endguest

            <!--LEFT SIDE OF NAVBAR-->
                <div class="collapse navbar-collapse"  id="navbarSupportedContent">
                <!--LOGO AND TEXT MOODLE KILLER-->
                <ul class="navbar-nav mx-2 py-lg-0 py-sm-2  ">
                    <li class="nav-item">

                        <a href="{{ url('/') }}" class="navbar-brand">

                            <a href="/" class="navbar-brand">

                                <span class="logo d-none d-sm-inline">
                                <img id="moodle_logo" width="30" height="35" src="https://i.ibb.co/R21LxRF/dark-logo.png" alt="Astana IT University">
                                </span>
                                <span class="mt-5 fs-6" style="font-family: 'Nunito', sans-serif;
                                ">
                                MoodleKiller Project
                                </span>
                            </a>
                        </a>
                    </li>
                </ul>

                <!--LANGUAGE-->
                <ul class="navbar-nav mx-2 me-2 py-lg-0 py-sm-2  ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            Language
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li onclick="pushUpMessage()">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-globe fa-fw"></i> English
                                </a>
                            </li>
                            <li onclick="pushUpMessage()">
                                <a class="dropdown-item " href="#">
                                    <i class="fa fa-language fa-fw"></i> Russian
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!--THEME-->
                <ul class="navbar-nav mx-2 me-auto py-lg-0 py-sm-2  ">
                    <li class="nav-item">
                        <a class=" courses_text" href="#" onclick="themeToggle()" data-bs-toggle="dropdown"
                        style="padding-bottom: 6px; padding-top: 5px">
                            Change theme
                        </a>
                    </li>
                </ul>
                </div>



            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><span class="text-primary">Login</span> to the system</a>
                            </li>
                        @endif

                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="my-auto link-primary fs-6  ">{{ Auth::user()->name }}</span>
                                <img class="my-0 mx-1 rounded-circle" width="25px" height="25px" src="https://i.pinimg.com/originals/1f/de/c9/1fdec9d0c4d8754be744a44bb2d27a18.png" alt="">
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end text-start"  aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="/profile">
                                        <div class="container">
                                            <i class="fa fa-user me-1"></i>
                                            Profile
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#" onclick="pushUpMessage()">
                                        <div class="container">
                                            <i class="fa fa-cog me-1"></i>
                                            Settings
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <div class="container">
                                        <i class="fa fa-sign-out me-1"></i>
                                            Logout
                                        </div>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

</div>
