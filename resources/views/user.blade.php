@extends('layouts.prof')

@section('ava')
<<<<<<< HEAD
=======

>>>>>>> c6f55ba31efba73dcef394beb7b0ad7ef22c7e89
    <img src="https://i.pinimg.com/originals/1f/de/c9/1fdec9d0c4d8754be744a44bb2d27a18.png" style="z-index: 1"  class="rounded border" height="205" width="205">
@endsection

@section('profile_content')

    <div class="col-6" >
            <ul class="list-group list-group-flush">
                    <li class="list-group-item d-flex">Email: <span class="mx-1" id="email">{{ Auth::user()->email }}</span></li>
                    <li class="list-group-item d-flex">Major: <span class="mx-1" id="email">{{ Auth::user()->major }}</span></li>
                    <li class="list-group-item d-flex">Group: <span class="mx-1" id="email">{{ Auth::user()->group }}</span></li>
                    <li class="list-group-item d-flex">Age: <span class="mx-1" id="email">{{ Auth::user()->age }}</span></li>
                    <li class="list-group-item d-flex">Male: <span class="mx-1" id="email">{{ Auth::user()->gender }}</span></li>
            </ul>
    </div>
    <div class="col-6" >
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex">VKontakte profile: <a href="{{Auth::user()->vk}}" class="mx-1"> click to open</a>
                <li class="list-group-item d-flex">Instagram profile: <a href="{{Auth::user()->insta}}" class="mx-1"> click to open</a>
                <li class="list-group-item d-flex">Telegram profile: <a href="{{Auth::user()->tg}}" class="mx-1"> click to open</a>
                <li class="list-group-item d-flex">Linkedin profile: <a href="{{Auth::user()->linkedin}}" class="mx-1"> click to open</a>
                <li class="list-group-item d-flex">Github profile: <a href="{{Auth::user()->github}}" class="mx-1"> click to open</a>
            </ul>
    </div>
@endsection
