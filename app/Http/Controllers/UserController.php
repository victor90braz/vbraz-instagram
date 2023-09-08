<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    private $mainPageView;
    private $aboutUsView;

    public function __construct() {
        // Use the config function to access configuration values
        $this->mainPageView = config('configViewPaths.mainPage');
        $this->aboutUsView = config('configViewPaths.aboutUsPage');
    }

    public function RenderMainPage () {
        return view($this->mainPageView);
    }

    public function RenderAboutUsPage () {
        return view($this->aboutUsView);
    }
}
