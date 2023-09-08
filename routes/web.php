<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

$routeHomePage = config('routes.mainPage');
$routeAboutUsPage = config('routes.aboutUsPage');

Route::get($routeHomePage, [UserController::class, "RenderMainPage"]);
Route::get($routeAboutUsPage , [UserController::class, "RenderAboutUsPage"]);
