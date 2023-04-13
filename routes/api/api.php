<?php

use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Api\AdmissionRequirementsController;
use App\Http\Controllers\Api\BookTripController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\ProgramController;
use App\Http\Controllers\Api\Registeration\UserController;
use App\Http\Controllers\Api\SlidesController;
use App\Http\Controllers\Api\SocialMediaController;
use App\Http\Controllers\Api\TeamWorkController;
use App\Http\Controllers\Api\CommonQuestionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/////////  Apis sign up
Route::get('/allUsers',[UserController :: class ,"index"]);
Route::get('/show{id}',[UserController :: class ,"show"]);
Route::post('/signup',[UserController :: class ,"store"]);
Route::post('/login',[UserController :: class ,"login"]);
Route::get('/logout',[UserController :: class ,"logout"]);


/////////// SocialMedia
    Route::get('/socialMedia',[SocialMediaController :: class ,"index"]);


//////// about
Route::get('/about',[AboutController :: class ,"about"]);

/////////////  store Trip & Contact Us
Route::post('/storeBookTrip',[BookTripController :: class ,"storeBookTrip"]);
Route::post('/contact',[BookTripController :: class ,"contact"]);


    ////////// CommonQuestions
    Route::get('/commonQuestions',[CommonQuestionsController :: class ,"index"]);

//////// teamWork
Route::get('/teamWork',[TeamWorkController :: class ,"index"])->name('teamWork');

/////// programs
Route::get('/program',[ProgramController :: class ,"index"]);
Route::get('/program/show/{id}',[ProgramController :: class ,"show"]);

////////// admissionRequirements
Route::get('/admissionRequirements',[AdmissionRequirementsController:: class ,"index"])->name('admissionRequirements');


    ////////// gallery
    Route::get('/images',[GalleryController :: class ,"indexImages"])->name('images');
    Route::get('/videos',[GalleryController :: class ,"indexVideos"])->name('videos');

        ///////// Slides
    Route::get('/slides',[SlidesController:: class ,"index"]);
    Route::get('/slides/show/{id}',[SlidesController:: class ,"show"]);
