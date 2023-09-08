<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    const PATH_MAIN_PAGE_VIEW = "MainPage/MainPage";
    const PATH_ABOUT_US_VIEW = "AboutUsPage/AboutUsPage";

    static function RenderMainPage () {
        return view(self::PATH_MAIN_PAGE_VIEW);
    }

    static function RenderAboutUsPage () {
        return view(self::PATH_ABOUT_US_VIEW);
    }
}
