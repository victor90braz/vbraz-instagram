<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    static function RenderMainPage () {
        return view("MainPage/MainPage");
    }
}
