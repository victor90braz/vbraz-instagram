<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    private $mainPageView;
    private $aboutUsView;
    private $storeView;

    public function __construct() {
        $this->mainPageView = config('paths.mainPage');
        $this->aboutUsView = config('paths.aboutUsPage');
        $this->storeView = config('paths.storePage');
    }

    public function RenderMainPage () {
        return view($this->mainPageView);
    }

    public function RenderAboutUsPage () {
        return view($this->aboutUsView);
    }

    public function RenderStorePage () {
        return view($this->storeView);
    }
}
