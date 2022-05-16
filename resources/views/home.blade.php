@extends('layouts.app')

@section('content')
    <style>
        .footer{
            position: absolute;
            bottom: 0;
        }
    </style>
    <br>
<center>
<fieldset class="py-3 w-25 text-center mb-5">
    <legend id="course" class="float-none w-auto text-center" >
        Welcome to the Moodlekiller!
    </legend>

    <div class="row d-flex justify-content-center">

        <div class="card-body text-center">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            You have logged in!
        </div>
    </div>

</fieldset>
</center>
@endsection
