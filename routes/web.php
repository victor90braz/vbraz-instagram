<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

$routeHomePage = config('routes.mainPage');
$routeAboutUsPage = config('routes.aboutUsPage');
$routeStorePage = config('routes.storePage');

Route::get($routeHomePage, [UserController::class, "RenderMainPage"]);
Route::get($routeAboutUsPage , [UserController::class, "RenderAboutUsPage"]);
Route::get($routeStorePage , [UserController::class, "RenderStorePage"]);
