<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Course extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;
}
