<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    const PATH_MAIN_PAGE_VIEW = "MainPage/MainPage";

    static function RenderMainPage () {
        return view(self::PATH_MAIN_PAGE_VIEW);
    }
}
