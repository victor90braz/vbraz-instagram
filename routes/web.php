<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

const RouteHomePage = '/';
const RouteAboutUsPage = '/about-us';

Route::get(RouteHomePage, [UserController::class, "RenderMainPage"]);
Route::get(RouteAboutUsPage , [UserController::class, "RenderAboutUsPage"]);
